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
        $produit = TableRegistry::get('Produits');  
        $produits = $produit->getWhiteNetaff(); 
        return $produits; 
    }   
}


