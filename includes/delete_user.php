<?php

require_once("../1)Database_and_Classes/init.php");
 
//Delete User    
if(isset($_GET['delete_user'])) {
    
$user = User::find_by_id($_GET['delete_user']); 
$user->delete();
    
header('Location: ../users.php');    
    
}

?>
