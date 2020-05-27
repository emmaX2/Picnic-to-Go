<!-- <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bruin brood</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->

<?php

  require_once("./connect_db.php");
  $sql = "SELECT * FROM product";
  $result = $conn->query($sql);

  if (isset($_SESSION["id"])){
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        echo "<div class='row'><div class='col-6'>";
        echo "<p> Productnaam: " . $row["Productnaam"] . "</p>";
        echo "<p> Productomschrijving: " . $row["Productomschrijving"] . "</p>";
        echo "<p> Productprijs: " . $row["Productprijs"] . "</p>";
      }
    }
  }
?>