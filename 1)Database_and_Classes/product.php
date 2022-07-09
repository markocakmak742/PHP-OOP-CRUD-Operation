<?php

class Product extends Db_object {
   
protected static $db_table = "products";
protected static $db_table_fields = array('id', 'category', 'name', 'price');

public $id;
public $category;
public $name;
public $price;

} // EndClassUser
















?>