<?php
  require_once("./database.php");

  class Product{
    private $categorieid;
    private $productcode;
    private $productnaam = null;
    private $productomschrijving = null;
    private $productprijs= null;
    private $productfoto= null;
    private $conn = null;
    

    public function __construct($categorieid){
        $this->categorieid = $categorieid;
        $this->conn = DB::getConnection('PicnicToGo');
        $sql = "select * from product where categorieid=:categorieid";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['categorieid'=>$this->categorieid]);
        $data = $stmt->fetchall(PDO::FETCH_ASSOC);
        for($i=0;$i<count($data);$i++){
            echo 
            '<div class="card col-sm-6-md-4-lg-3-xl-2" style="width: 18rem;">
            <img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($data[$i]['productfoto']). '"/>
            <div class="card-body">
            <h5 class="card-title">' . $data[$i]['productnaam'] . '</h5>
            <p class="card-text">' .  $data[$i]['productomschrijving'] . '</p>
            <a href="#" class="btn btn-primary">Bestel!</a>
            </div>
            </div>';
        };
          
        }

    public function getProductcode(){
      return $this->productcode;
    }

    public function getProductnaam(){
      return $this->productnaam;
    }

    public function getProductomschrijving(){
      return $this->productomschrijving;
    }

    public function getProductprijs(){
      return $this->productprijs;
    }

    public function getProductfoto(){
      return $this->productfoto;
    }
  
  
}
        
      
    
  
?>