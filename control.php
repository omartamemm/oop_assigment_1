<?php
class product {
    private string $name;
    private  $price;

    public string $brand;
    public string $image;
    public string  $discount;
    const  tax=20; 


    function set_name($name){
        $this->name=$name;

    }

    function set_price($price){
        $this->price=$price;
        
    }

    function get_price(){
        return $this->price;

    }



    function get_name(){
        return $this->name;

    }

    function get_tax(){
        return $this::tax;

    }

    function price_after_descount(){
        $amount =$this->price*($this->discount/100);
        $final_price=$this->price -$amount;
        return round($final_price,2,PHP_ROUND_HALF_DOWN);

    }

}



$product_1= new product();
$product_1->set_name("REAlME 12");
$product_1->discount=10;
$product_1->set_price(10000);
$product_1->brand="OPPO";
$product_1->image="imgs/1.jpg";


// echo $product_1->price_after_descount();

$product_2= new product();
$product_2->set_name("A52s");
$product_2->discount=12;
$product_2->set_price(8000);
$product_2->brand="smsung";
$product_2->image="imgs/2.jpg";

$product_3= new product();
$product_3->set_name(" IPHONE 16 pro");
$product_3->discount=5;
$product_3->set_price(30000);
$product_3->brand="APPLE";
$product_3->image="imgs/3.jpg";


