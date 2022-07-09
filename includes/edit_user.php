<?php

//Find and Instate User by id
$user = User::find_by_id($_GET['edit_user']);    

//Update User     
if(isset($_POST['update_user'])) {
   
$user->first_name = $_POST['first_name'];
$user->last_name = $_POST['last_name'];
$user->username = $_POST['username'];

$user->save();
    
header('Location: users.php');

}

?>


<table class="table table-bordered">
<thead>
    
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
<th>Actions</th>
</tr>

</thead>


<tbody>
<tr>
    
<form action="" method="post">   

<td><input autofocus name="first_name" value="<?php echo $user->first_name; ?>" class="form-control" ></td>
<td><input autofocus name="last_name"  value="<?php echo $user->last_name; ?>" class="form-control" ></td>
<td><input autofocus name="username"   value="<?php echo $user->username; ?>" class="form-control" ></td>
<td>
<input name="update_user" class="form-controll btn btn-primary" type="submit" value="Save">
</td>

</form> 
    
</tr>
</tbody>
</table> 