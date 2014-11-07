<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Http\Client;
use Cake\Filesystem\File;


class CategorieController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('ImageModifier');
    }


    public function index(){

        /*
        $HelperRegistry = new HelperRegistry($this->View);

        $HelperRegistry->addHelper('ImageModifier');
        */


        $this->layout = 'home';

        $type = "soutien gorge bandeau";
        $term = urlencode('soutien gorge bandeau');
        $http = new Client(['host' => 'ornythorink.alwaysdata.net']);
        $response = $http->get( '/index.php/vroum/produits/produitsCategory/?term=' . $term . '&offset=20');
        $tail = "";
        if($rest = substr($response->body, -1) != "]" ) {
            $tail = "]";
        }

        $produits = json_decode($response->body.$tail);

        foreach($produits as $image){

            if($image->imagecache != '' && $image->imagecache != null){
                $image->longimage   = $image->imagecache;
                $image->mediumimage = $image->imagecache;
                $image->petiteimage = $image->imagecache;
            }

            $cache = false;
            if($image->source != 'SDC'){
                $cache = true;
            }

            if( ($image->longimage !== null &&  $image->longimage != '') && $image->imagecache  == null){
                $image->longimage = $this->resizeImage($image->longimage, $cache);
            } elseif ( ($image->mediumimage !== null &&  $image->mediumimage != '') && $image->imagecache  == null) {
                $image->mediumimage = $this->resizeImage($image->mediumimage, $cache);
            } elseif (  ($image->petiteimage !== null &&  $image->petiteimage != '')  && $image->imagecache  == null) {
                $image->petiteimage = $this->resizeImage($image->petiteimage, $cache);
            }
        }

        $this->set( 'offres', $produits);

    }

    function resizeImage($url, $useCache){

        if($url == ""){
            return null;
        }
        $extensions = array(
            1 => 'GIF', 2 => 'JPG',3 => 'PNG', 4 => 'SWF', 5 => 'PSD',
            6 => 'BMP', 7 => 'TIFF', 8 => 'TIFF', 9 => 'JPC', 10 => 'JP2', 11 => 'JPX',
            12 => 'JB2', 13 => 'SWC', 14 => 'IFF');

        $infos_image = getImageSize($url);


        /*
        $ch = curl_init ($url) ;
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1) ;
        $content = curl_exec ($ch) ;
        curl_close ($ch) ;
        */

        $target = parse_url($url);


        $http = new Client(['host' => $target['host']]);

        $imageUrl = "";
        if(isset($target['path'])){
            $imageUrl = $target['path'];
        }

        if(isset($target['query'])){
            $imageUrl .= $target['query'];
        }

        $response = $http->get($imageUrl);
        $content = $response->body;

        /*
        $config = jApp::configPath('defaultconfig.ini.php');
        $ini = new jIniFileModifier ($config);
        $cache = $ini->getValue('imagecache','0');
        */


        $rand  = rand(1,10000000);
        // $ok = jFile::write( $cache . '/var/upload/img'. $rand . '.' . strtolower($extensions[$infos_image[2]]) , $content);
        $file = new File('/var/www/html/projects/cakephp-3.0.0-beta2/lingerie/tmp/cache/images/' . 'img'. $rand . '.' . strtolower($extensions[$infos_image[2]]));
        $file->write($content);


        $params = array('maxwidth'=>190, 'maxheight'=>242,'background'=>'#ffffff','zoom'=>100);


        $att = $this->ImageModifier->get('/var/www/html/projects/cakephp-3.0.0-beta2/lingerie/tmp/cache/images/' . 'img'. $rand  . '.' . strtolower($extensions[$infos_image[2]]), $params);
        var_dump($att);
        die();

        if($useCache == true){
            // instanciation de la factory
            $maFactory = jDao::get("linge~produits");

            $conditions = jDao::createConditions();
            $conditions->startGroup('OR');
            $conditions->addCondition('petiteimage','=',$url);
            $conditions->addCondition('mediumimage','=',$url);
            $conditions->addCondition('longimage','=',$url);
            $conditions->endGroup();

            $liste = $maFactory->findBy($conditions)->fetch();
            if($liste != null && $liste != false){
                $liste->imagecache = $att['src'];
                $maFactory->update($liste);
            }
        }
        return  $att['src'];
    }

}