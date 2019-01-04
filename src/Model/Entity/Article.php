<?php
/**
 * Created by PhpStorm.
 * User: mario
 * Date: 12/4/2017
 * Time: 9:13 PM
 */
namespace App\Model\Entity;
 use Cake\ORM\Entity;

 class Article extends Entity
 {
     protected $_accessible =[
         '*' => true,
         'id' => false,
         'slug' => false,
     ];
 }