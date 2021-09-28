<?php

class Product
{
    public $group_id = "";
    public $item_id = "";
    public $product_name = "";
    public $description = "";
    public $price = "";
    public $img_url = "";
    public $url = "";
    public $category = "";
    public $sex = "";
    public $ean = "";
    public $manufacturer = "";

    function __construct($xml){
        $this->group_id = $xml->GROUP_ID;
        $this->item_id  = $xml ->ITEM_ID;
        $this->product_name = $xml->PRODUCTNAME;
        $this->description = $xml->DESCRIPTION;
        $this->price = $xml->PRICE;
        $this->img_url = $xml->IMGURL;
        $this->url = $xml->URL;
        $this->category = $xml->CATEGORY;
        $this->sex = $xml->SEX;
        $this->ean = $xml->EAN;
        $this->manufacturer = $xml->MANUFACTURER;
    }

    public function print(){
        echo "<tr>
                <td>$this->product_name</td>
                <td>$this->description</td>
                <td><a href='$this->url'>link</a></td>
                <td><img src=".$this->img_url." style='width: 100px; height: 100px'></td>
                <td>$this->price</td>
              </tr>
                ";

    }

    function getPrice(){
        return $this->price;
    }

}