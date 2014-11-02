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
        'Paginator',
        'Url'
    ); 
        
    public function intialize() {
        parent::initialize();
        $this->loadComponent('Paginator');
    }    
    
    public function index(){
        
        $source = $this->request->query['source'];
        
        $produit = TableRegistry::get('Produits'); 
        $this->set('produits', $this->paginate(  $produit->getWhiteListBySource($source) ) );
    }
    
    public function updateCategories(){
            
        $produit = TableRegistry::get('Produits');
        $id = $this->request->data['id'];

        
        $firstArticle = $produit
        ->find()
        ->where(array('id_produit' => $id))
        ->first();
        
        $query = $produit->query();
        $query->update()
            ->set(array('status' => 'Ok'))
            ->where(array('categorie_marchand' => $firstArticle->categorie_marchand))
            ->execute(); 
                       
        die('Ok');
    }
}


