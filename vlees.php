<?php

require_once "product.php";



class Groente extends Product{

    private $categorie;
    private $productcode;
    


    public function __construct($productcode){
            parent:: __construct($productcode);
    }
        
    
}


?>