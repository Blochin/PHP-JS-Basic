<?php
    require_once ('../model/Product.php');

    function loadXml(){
        $products = array();
        $xml = simplexml_load_file("../api/products_1.xml") or die("cannot read object");
        $xml2 = simplexml_load_file("../api/products_2.xml")or die("cannot read objects");
        $xml3 = simplexml_load_file("../api/products_3.xml")or die("cannot read objects");

        foreach ($xml->SHOPITEM as $item){
            $product = new Product($item);
            array_push($products,$product);
        }
        foreach ($xml2->SHOPITEM as $item){
            $product = new Product($item);
            array_push($products,$product);
        }
        foreach ($xml3->SHOPITEM as $item){
            $product = new Product($item);
            array_push($products,$product);
        }

        function  sortCallback($a,$b): int
        {
            if((float) $a->getPrice() <(float) $b->getPrice()){
                return -1;
            }else if((float) $a->getPrice() >(float) $b->getPrice()){
                return 1;
            }else{
                return 0;
            }
        }

        usort($products,'sortCallback');

        return $products;
    }





