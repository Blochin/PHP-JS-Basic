<?PHP
    ini_set('display_errors',1);
    require_once ('loadXml.php');
    require_once ('../model/Product.php');
    $products = loadXml();
    session_start();
    $counter = $_GET['offset']-3;
    while($counter < $_GET['offset']){
        $products[$counter]->print();
        $counter++;

    }


