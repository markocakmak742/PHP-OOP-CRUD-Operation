<?php

class User extends Db_object {
   
protected static $db_table = "users";
protected static $db_table_fields = array('id', 'first_name', 'last_name', 'username');

public $id;
public $first_name;
public $last_name;
public $username;

} // EndClassUser
















?>