<?php ob_start(); ?>
<?php require_once("1)Database_and_Classes/init.php"); ?>

<!DOCTYPE html>
<html lang="en">
    
<?php require_once("includes/header.php"); ?>
    
<body>


<?php 

//Select All Users
$users = User::find_all();

?>    

    
    
    
<!-- All Users Table-->
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
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
<th>Actions</th>
</tr>

</thead>
    
<tbody>
    
<?php foreach($users as $user) : ?>  

<tr>
<td><?php echo $user->id; ?></td>
<td><?php echo $user->first_name; ?></td>
<td><?php echo $user->last_name; ?></td>
<td><?php echo $user->username; ?></td>
    
<td>
<a href="users.php?edit_user=<?php echo $user->id; ?>"   class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
<a href="includes/delete_user.php?delete_user=<?php echo $user->id; ?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
</td>
</tr>
    
<?php endforeach; ?>
    
</tbody>
    
</table>

<div class="table-title">
<div class="row">
<div class="col-sm-12">
<a href="users.php?add_user" type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</a>
</div>
</div>
</div>     
    
<br> 




    
<!-- Create User-->    
<?php if(isset($_GET['add_user'])) {
    
include_once("includes/add_user.php");
    
}
?>      



<!-- Edit Product-->    
<?php if(isset($_GET['edit_user'])) {

include_once("includes/edit_user.php");
       
}
?> 
    
    

</div>
</div> 
    
    

    
    
</body>
</html>