<?php 

//Find and Instate Prudct By Id
$product = Product::find_by_id($_GET['edit_product']);  

//Updating Product     
if(isset($_POST['update_product'])) {
    
$product->category = $_POST['category'];
$product->name     = $_POST['product_name'];
$product->price    = $_POST['price'];

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

<td><input autofocus name="category"      value="<?php echo $product->category; ?>" class="form-control" ></td>
<td><input autofocus name="product_name"  value="<?php echo $product->name; ?>" class="form-control" ></td>
<td><input autofocus name="price"         value="<?php echo $product->price; ?>" class="form-control" ></td>
<td>
<input name="update_product" class="form-controll btn btn-primary" type="submit" value="Save">
</td>

</form> 
    
</tr>
</tbody>
</table> 