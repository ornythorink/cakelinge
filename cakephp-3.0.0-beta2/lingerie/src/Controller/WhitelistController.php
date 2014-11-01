<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class WhitelistController extends AppController {
    
    public $paginate = array(
        'limit' => 25,
        'maxLimit' => 1000
    );  
    
    // Dans un controller.
    public $helpers = array( 
        'Html',
        'Form',       
        'Paginator'
    ); 
        
    public function intialize() {
        parent::initialize();
        $this->loadComponent('Paginator');
    }    
    
    public function index(){
        $produit = TableRegistry::get('Produits'); 
        $this->set('produits', $this->paginate(  $produit->getWhiteNetaff() ) );
    }
}


