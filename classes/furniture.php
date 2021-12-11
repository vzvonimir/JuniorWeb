<?php

class Furniture extends Product {

    protected $type = "Furniture";
    protected $product_spec;


    public function getType(){
        return $this->type;
    }

    public function setType($type){
		$this->type = $type;
	}

    public function getProduct_spec(){
        return "Dimension: " . $this->product_spec;
    }

    public function setProduct_spec($product_spec){
		$this->product_spec = $product_spec;
	}

    public static function checkProduct_spec($product_spec){
        if(empty($product_spec)){
            return false;
        }else{
            return true;
        }
    }

}
?>