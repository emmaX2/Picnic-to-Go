




<?php

   require_once("./connect_db.php");
  
  $sql = "SELECT * FROM product";
  $result = $conn->query($sql);
  
  
  
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){



        echo'<div class="card" style="width: 18rem;">';
  echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['productfoto'] ).'"' . ' class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">'. $row["productnaam"] . '</h5>
    <p class="card-text">' . $row["productomschrijving"] . '</p>
    <p class="card-text">€'  . $row["productprijs"] . '</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>';
        // echo "<div class='row'><div class='col-6'>";
        // echo "<p> Productnaam: " . $row["productnaam"] . "</p>";
        // echo "<p> Productomschrijving: " . $row["productomschrijving"] . "</p>";
        // echo "<p> Productprijs: " . $row["productprijs"] . "</p>";
        // echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['productfoto'] ).'"/>';
      }
    }
  
?>