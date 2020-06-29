<?php
require_once "database.php";

if(isset($_SESSION['winkelwagen'])){

    $cart = new Winkelwagen();
    
}else{
    echo'<div class="alert alert-primary" role="alert">
    Uw winkelwagen is nog leeg<a href="" class="alert-link">an example link</a>. Give it a click if you like.
  </div>'; exit();
};


class Winkelwagen{

    private $conn = null;
    private $productcode;
    
    
    public function __construct(){
        $productcode = $_SESSION['winkelwagen'];
        $this->conn = DB::getConnection('PicnicToGo');
        echo '<table class="table">
        <thead>
          <tr>
            <th scope="col">product</th>
            <th scope="col">productnaam</th>
            <th scope="col">aantal</th>
            <th scope="col">prijs</th>
            <th scope="col">totaalprijs</th>
          </tr>
        </thead>'; 
        foreach($productcode as $product){
            $sql = "select * from product where productcode = $product[productcode]";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchall(PDO::FETCH_ASSOC);

            for($i=0;$i<count($data);$i++){
                echo'
                
                <tbody>
                
                <tr>
                
                <td><img style=" width: 75px; height: 75px;" src="data:image/jpeg;base64,' .base64_encode($data[$i]['productfoto']). '"/></td>
                <td>'. $data[$i]["productnaam"] . '</td>
                <td>'. $product["aantal"] . '</td>
                <td>€ '. $data[$i]["productprijs"] . '</td>
                <td>€ '. $product["aantal"] *$data[$i]["productprijs"] . '</td>
                
                
                
                </tbody>';
               
            }
        }
        echo'<tr>
        <td colspan="5" align="right">
        
        <a href="index.php?content=home" class="btn btn-primary" role="button">bestel</a>   
        </td>
        
        
        </tr>
        </table>';
        
                
                
            }
            
            
            
        }


        
?>
    





