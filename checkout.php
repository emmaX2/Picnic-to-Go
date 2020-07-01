<?php

echo'<div class="alert alert-primary" role="alert">
bedankt voor uw bestelling :)
</div>';
unset($_SESSION['winkelwagen'],$_SESSION['total_price']);
echo '<meta http-equiv="Refresh" content="1; url=./index.php?content=home">';
    