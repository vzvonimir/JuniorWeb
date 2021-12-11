<?php

class DVD extends Product {

    protected $type = "DVD";
    protected $product_spec;


    public function getType(){
        return $this->type;
    }

    public function setType($type){
		$this->type = $type;
	}

    public function getProduct_spec(){
        return "Size: " . $this->product_spec . " MB";
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