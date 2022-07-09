<?php ob_start(); ?>
<?php require_once("1)Database_and_Classes/init.php"); ?>

<!DOCTYPE html>
<html lang="en">
    
<?php require_once("includes/header.php"); ?>
    
<body>


<?php 

//Select All Products
$products = Product::find_all();
    
?>    

    
    

<!-- All Products Table-->
<div class="container">
<div class="table-wrapper">

<div class="table-title">
<div class="row">
<div class="col-sm-8"><h2>Select Table: <a href="users.php">Users</a> , <a href="products.php">Products</a> </h2></div>
</div>
</div>


<table class="table table-bordered">
<thead>
    
<tr>
<th>Id</th>
<th>Category</th>
<th>Name</th>
<th>Price</th>
<th>Actions</th>
</tr>

</thead>
    
<tbody>
    
<?php foreach($products as $product) : ?>  

<tr>
<td><?php echo $product->id; ?></td>
<td><?php echo $product->category; ?></td>
<td><?php echo $product->name; ?></td>
<td><?php echo $product->price . "$"; ?></td>
    
<td>
<a href="products.php?edit_product=<?php echo $product->id; ?>"           class="edit"   title="Edit"   data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
<a href="includes/delete_product.php?delete_product=<?php echo $product->id; ?>"   class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
</td>
</tr>
    
<?php endforeach; ?>
    
</tbody>
    
</table>

<div class="table-title">
<div class="row">
<div class="col-sm-12">
<a href="products.php?add_product" type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</a>
</div>
</div>
</div>     
    
<br> 
    
    
  

    
<!-- Create Product-->    
<?php if(isset($_GET['add_product'])) {
    
include_once("includes/add_product.php");
    
}
?>      
    
    
    
<!-- Edit User-->    
<?php if(isset($_GET['edit_product'])) {

include_once("includes/edit_product.php");
       
}
?> 
    

    
</div>
</div> 
    
    

    
    
</body>
</html>