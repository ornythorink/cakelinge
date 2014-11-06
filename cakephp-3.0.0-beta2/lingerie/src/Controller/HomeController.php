<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Http\Client;

class HomeController extends AppController {

	public function index(){
		$this->layout = 'home';

        $http = new Client(['host' => 'ornythorink.alwaysdata.net']);
        $response = $http->get('/index.php/vroum/category/?type=parent');
        $categoriesParent = json_decode($response->body);

        $http = new Client(['host' => 'ornythorink.alwaysdata.net']);
        $response = $http->get('/index.php/vroum/category/?type=child');
        $categoriesChild = json_decode($response->body);

        $http = new Client(['host' => 'ornythorink.alwaysdata.net']);
        $response = $http->get('/index.php/vroum/category/?type=sub');
        $categoriesSub = json_decode($response->body);

        $this->set('categoriesParent', $categoriesParent);
        $this->set('categoriesChild', $categoriesChild);
        $this->set('categoriesSub', $categoriesSub);


        $http = new Client(['host' => 'ornythorink.alwaysdata.net']);
        $response = $http->get('/index.php/vroum/produits/home/');
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
}