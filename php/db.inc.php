<?php 
require 'vendor/autoload.php';



$manager = new MongoDB\Client("mongodb://104.130.222.221:27018");
$dbname=$manager->selectDatabase('Demo_Easy_Hotel');

?>