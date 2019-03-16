<?php 
    session_start();
    require 'vendor/autoload.php';
    include 'db.inc.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dni = $_POST['dni'];
    
    $collection=$dbname->selectCollection('userss');
    
    $result = $collection->findOne(array('username' =>$username),array('password' =>($password)),array('dni' =>($dni)));
        
        if(!empty($result)){
            header('Location: http://localhost/EH_0.0.1/Formulario_registro.html');
        }else{
            echo "Wrong combination of username and password";
    }


?>