<?php

require_once "product.php";



class Groente extends Product{

    private $categorie;
    private $productcode;
    
    public function __construct($categorie){
            parent:: __construct($categorie);
    }
        
    
}


?>