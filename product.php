<?php
  require_once("./database.php");
  
  
  

  class Product{
    private $categorieid;
    private $winkelwagen ;
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
            echo "<div class='product_wrapper col-4'>
            <form method='post' action=''>
            <input type='hidden' name='productcode' value=".$data[$i]['productcode']." />
            <div class='image'><img src='data:image/jpeg;base64,".base64_encode($data[$i]['productfoto']). "'/></div>
            <div class='name'>".$data[$i]['productnaam']."</div>
            <div class='description'>".$data[$i]['productomschrijving']."</div>
            <div class='price'>€".$data[$i]['productprijs']."</div>
            <div>
            <input type='number' min='1' name='aantal' value='1' />
            <button  type='submit'  class='buy'>bestel</button>
            </div>
            </form>
            </div>";
                };
                
          
        }
  
}

if(!isset($_SESSION['winkelwagen'])){
  $_SESSION['winkelwagen'] = array();
}
if($_POST != null){

  array_push($_SESSION['winkelwagen'],$_POST);
  unset($_POST);
  
}

        
      
    
  
?>