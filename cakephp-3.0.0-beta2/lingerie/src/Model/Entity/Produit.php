<?php

// src/Model/Entity/User.php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class Produit extends Entity {


    public function getImageCache(){
        return $this->imagecache;
    }

}