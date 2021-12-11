<?php

class Book extends Product {

    protected $type = "Book";
    protected $product_spec;


    public function getType(){
        return $this->type;
    }

    public function setType($type){
		$this->type = $type;
	}

    public function getProduct_spec(){
        return "Weight: " . $this->product_spec . " KG";
    }

    public function setProduct_spec($product_spec){
		$this->product_spec = $product_spec;
	}

    public static function checkProduct_spec($product_spec){
        if(!empty($product_spec) && is_numeric($product_spec)){
            return true;
        }else{
            return false;
        }
    }

}
?>