<?php

class Product extends DBobject{

    protected static $db_table = "products";
    protected static $db_table_fields = array('SKU', 'name', 'price', 'type', 'product_spec');
    protected $id;
    protected $SKU;
    protected $name;
    protected $price;
    
    
    public function getId(){
        return $this->id;
    }

    public function setId($id){
		$this->id = $id;
	}

    public function getSKU(){
        return $this->SKU;
    }

    public function setSKU($SKU){
        $this->SKU = $SKU;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public static function checkName($name){
        if(empty($name)){
            return false;
        }else{
            return true;
        }
    }

    public static function checkPrice($price){
        if(!empty($price) && is_numeric($price)){
            return true;
        }else{
            return false;
        }
    }

}
?>