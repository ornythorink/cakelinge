<?php
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

class ProduitsTable extends Table {

    public function getWhiteListBySource($source){
        $produits = TableRegistry::get('Produits'); 
        $query = $produits->find('all')->where( array('source =' => $source, 'status' => 'Validation') )->group('categorie_marchand')->limit(1000);
        return $query;
    }
}


