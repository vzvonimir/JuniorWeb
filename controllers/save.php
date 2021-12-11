<?php

require_once("../init.php");

$type = $_POST['type'];

if($type != "" && $_POST['sku'] != "" && $type::checkName($_POST['name']) && $type::checkPrice($_POST['price']) && $type::checkProduct_spec($_POST['product_spec'])){
    if($type::checkSKU($_POST['sku'])){
        $product = new $type();
        $product->setSKU($_POST['sku']);
        $product->setName($_POST['name']);
        $product->setPrice($_POST['price']);
        $product->setProduct_spec($_POST['product_spec']);
        if($product->create()){
            echo 1;
        }else{
            echo "Error while saving!";
        }
    }else{
        echo "SKU already exists, please insert new sku!";
    }    
}else{
    echo "Please, submit required data!";
}

?>