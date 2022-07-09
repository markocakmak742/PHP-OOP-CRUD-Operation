<?php

//Create Product     
if(isset($_POST['add_product'])) {

$product = new Product;   

$product->category = $_POST['category'];
$product->name = $_POST['product_name'];
$product->price = $_POST['price'];
    
$product->save();
    
header('Location: products.php');

}  

?>

<table class="table table-bordered">
<thead>
    
<tr>
<th>Category</th>
<th>Name</th>
<th>Price</th>
<th>Actions</th>
</tr>

</thead>


<tbody>
<tr>
    
<form action="" method="post">   

<td><input autofocus name="category"     class="form-control" ></td>
<td><input autofocus name="product_name" class="form-control" ></td>
<td><input autofocus name="price"        class="form-control" ></td>

<td>
<input name="add_product" class="form-controll btn btn-primary" type="submit" value="Save">
</td>

</form> 
    
</tr>
</tbody>
</table>   