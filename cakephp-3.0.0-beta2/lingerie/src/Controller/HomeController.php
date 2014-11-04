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
	}
}