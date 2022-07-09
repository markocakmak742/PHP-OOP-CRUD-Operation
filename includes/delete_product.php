<?php

require_once("../1)Database_and_Classes/init.php");

//Delete Product    
if(isset($_GET['delete_product'])) {
    
$product = Product::find_by_id($_GET['delete_product']); 
$product->delete();
    
header('Location: ../products.php');    
    
}

?>
