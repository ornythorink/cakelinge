<?php

namespace App\Controller;

use Cake\Network\Http\Client;
use Cake\Filesystem\File;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;

class CategorieController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('ImageModifier');
    }

    /**
     * @todo factoriser les appels clients
     */
    public function index(){

        $host = Configure::read('App.webservice') ;
        $dirHost = Configure::read('App.dirWS') ;

        $http = new Client(['host' => $host]);
        $response = $http->get($dirHost.'/index.php/vroum/category/?type=parent');
        $categoriesParent = json_decode($response->body);

        $response = $http->get($dirHost.'/index.php/vroum/category/?type=child');
        $categoriesChild = json_decode($response->body);

        $response = $http->get($dirHost.'/index.php/vroum/category/?type=sub');
        $categoriesSub = json_decode($response->body);

        $this->set('categoriesParent', $categoriesParent);
        $this->set('categoriesChild', $categoriesChild);
        $this->set('categoriesSub', $categoriesSub);


        $this->layout = 'home';

        $term = urldecode($this->request->query['term']);

        $response = $http->get( '/index.php/vroum/produits/produitsCategory/?term=' . $term . '&offset=20');
        $tail = "";
        if($rest = substr($response->body, -1) != "]" ) {
            $tail = "]";
        }

        $items = json_decode($response->body.$tail);

        $produits = TableRegistry::get('Produits');

        /*
        echo '<pre>';
        var_dump($items);
        echo '</pre>';
        exit;*/

        foreach($items as $key => $image){

            // FAAAAAKKKKKKEEEE
            // @todo faire un vrai fake
            //$image->imagecache = 'http://localhost/tmp/cache/images/3cdc44283f05a90ab78b9db13cf11fac.jpg';
            if($image !== null) {
                if ($image->imagecache != '' && $image->imagecache != null) {

                    $image->longimage = $image->imagecache;
                    $image->mediumimage = $image->imagecache;
                    $image->petiteimage = $image->imagecache;

                } else {
                        if (($image->longimage !== null && $image->longimage != '') && $image->imagecache == null) {
                            $cached = $this->resizeImage($image->longimage, true);
                            $items[$key]->imagecache = $cached;

                            $produit = $produits->get($image->id_produit);
                            $produit->imagecache = $cached;
                            $produits->save($produit);

                        } elseif (($image->mediumimage !== null && $image->mediumimage != '') && $image->imagecache == null) {
                            $cached = $this->resizeImage($image->mediumimage, true);
                            $items[$key]->imagecache = $cached;

                            $produit = $produits->get($image->id_produit);
                            $produit->imagecache = $cached;
                            $produits->save($produit);

                        } elseif (($image->petiteimage !== null && $image->petiteimage != '') && $image->imagecache == null) {
                            $cached = $this->resizeImage($image->petiteimage, true);
                            $items[$key]->imagecache = $cached;

                            $produit = $produits->get($image->id_produit);
                            $produit->imagecache = $cached;
                            $produits->save($produit);
                        }
                    }
                } else {
                    unset($items[$key]);
                }
            }


        $this->set( 'offres', $items);

    }


    /**
     * @param $url
     * @param $useCache
     * @return mixed
     *
     * @todo déplacer cette méthode ? refacto ?
     */
    function resizeImage($url, $useCache){

        if($url == ""){
            return null;
        }
        $extensions = array(
            1 => 'GIF', 2 => 'JPG',3 => 'PNG', 4 => 'SWF', 5 => 'PSD',
            6 => 'BMP', 7 => 'TIFF', 8 => 'TIFF', 9 => 'JPC', 10 => 'JP2', 11 => 'JPX',
            12 => 'JB2', 13 => 'SWC', 14 => 'IFF');



        $target = parse_url($url);

        $http = new Client(['host' => $target['host']]);

        $imageUrl = "";
        if(isset($target['path'])){
            $imageUrl = $target['path'];
        }

        if(isset($target['query'])){
            $imageUrl .= $target['query'];
        }

        try {
            $response = $http->get($imageUrl, array(), array('timeout' => 3));
        } catch(\Cake\Core\Exception\Exception $e) {
            return '';
        }

        if($response->statusCode() != 408  ){
        $content = $response->body;
        $infos_image = getImageSize($url);

        $rand  = rand(1,10000000);


            $file = new File( $this->imgCachePath . 'img'. $rand . '.' . strtolower($extensions[$infos_image[2]]));
            $file->write($content);

            $params = array('maxwidth'=>190, 'maxheight'=>242,'background'=>'#ffffff','zoom'=>100);

            $att = $this->ImageModifier->get( $this->imgCachePath . 'img'. $rand  . '.' . strtolower($extensions[$infos_image[2]]), $params);


            return  $att['cache_path'];
        } else {
            return '';
        }
    }

}