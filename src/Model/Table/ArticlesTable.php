<?php
/**
 * Created by PhpStorm.
 * User: mario
 * Date: 12/4/2017
 * Time: 9:06 PM
 */
//src/Modle/Table;
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Utility\Text;
use Cake\Validation\Validator;

 class ArticlesTable extends Table
 {
     public function initialize(array $config)
     {
         $this->addBehavior('timestamp');

         $this->belongsToMany('Tags'); // Add this line
     }
     public function beforeSave($event, $entity, $options)
     {
         if ($entity->isNew() && !$entity->slug) {
             $sluggedTitle = Text::slug($entity->title);
             // trim slug to maximum length defined in schema
             $entity->slug = substr($sluggedTitle, 0, 191);
         }
     }
     public function validationDefault(Validator $validator)
     {
         $validator
             ->notEmpty('title')
             ->minLength('title', 10)
             ->maxLength('title', 255)

             ->notEmpty('body')
             ->minLength('body', 10);

         return $validator;
     }
 }