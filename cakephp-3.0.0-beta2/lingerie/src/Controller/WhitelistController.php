<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class WhitelistController extends AppController {
    
    public function index(){
        $hop = $this->getWhiteNetaff();
        echo '<pre>';
        var_dump($hop);
        echo '</pre>';
    }

    public function getWhiteNetaff() {
        $produits = TableRegistry::get('Produits');        
        $query = $produits->find('all')->limit(10);
        
        foreach ($query as $key => $row) {
            $res[$key] = $row;
        }
        
        return $res;
    }   
}


