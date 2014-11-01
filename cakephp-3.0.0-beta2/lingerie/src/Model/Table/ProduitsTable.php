<?php
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

class ProduitsTable extends Table {

    public function getWhiteNetaff(){
        $produits = TableRegistry::get('Produits'); 
        $query = $produits->find('all')->where( array('source =' => 'ZNX', 'status' => 'Validation') )->limit(1000);
        return $query;
    }
}


