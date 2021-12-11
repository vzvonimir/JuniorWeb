<?php
require_once("../init.php");

if(empty($_GET['delete'])){
  header("Location: ../index.php");
  exit();
}else{
   foreach($_GET['delete'] as $id){
       $product = Product::findById(intval($id));
       $product->delete();
   }
   header("Location: ../index.php");
   exit();
}
?>