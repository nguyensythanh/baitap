<?php
require_once('model/Model.php');
class Controller 
{	
     public function show()
     {
          $l = Model::get();
          $h = Model::gethight();
          $t = Model::getlow();
          require_once('view/banggia.php');
     }

     public function change()
     {
     	$new = Model::getnew();
     	return $new;
     	$he = Model::gethight();
     	$lo = Model::getlow();
     } 

     public function change1()
     {
     	$he = Model::gethight();
     	return $he;
     } 
     
     public function change2()
     {
     	$lo = Model::getlow();
     	return $lo;
     } 
} 
?>