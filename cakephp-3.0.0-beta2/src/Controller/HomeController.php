<?php
namespace App\Controller;


use Cake\Network\Http\Client;

class HomeController extends AppController {

	public function index(){

		$this->layout = 'home';

        $http = new Client(['host' => 'vroum2.comparateur-lingerie.fr']);
        $response = $http->get('/index.php/vroum/category/?type=parent');
        $categoriesParent = json_decode($response->body);


        $response = $http->get('/index.php/vroum/category/?type=child');
        $categoriesChild = json_decode($response->body);


        $response = $http->get('/index.php/vroum/category/?type=sub');
        $categoriesSub = json_decode($response->body);

        $this->set('categoriesParent', $categoriesParent);
        $this->set('categoriesChild', $categoriesChild);
        $this->set('categoriesSub', $categoriesSub);

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
        }

        $this->set( 'offres', $produits);

	}
}