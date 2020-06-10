<?php
  require_once("./database.php");

  $product1 = new Product(100);

  echo "<pre>";
  //niet op deze manier doen tho maar ik moest ff tessten of t deed, had geen zin om getters te maken :)
  print_r($product1);
  echo "</pre>";



  

  class Product{
    private $productcode;
    private $productnaam = null;
    private $productomschrijving = null;
    private $productprijs= null;
    private $productfoto= null;
    private $rijBestaat = false;
    private $conn = null;
    

    public function __construct(string $productcode){
        $this->productcode = $productcode;
        $this->conn = DB::getConnection('PicnicToGo');
        $sql = "select * from product where productcode=:productcode";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['productcode'=>$this->productcode]);
        if ($stmt->rowCount() == 1){
            $this->rijBestaat = true;
            $row = $stmt->fetch();
            $this->productnaam = $row->productnaam;
            $this->productomschrijving = $row->productomschrijving;
            $this->productprijs = $row->productprijs;
            $this->productfoto ='<img src="data:image/jpeg;base64,'.base64_encode( $row->productfoto ).'"/>';
           
        };
        
    }
  
  
}
        
      
    
  
?>