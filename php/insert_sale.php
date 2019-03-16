<?php
require 'vendor/autoload.php';

$connection = new MongoDB\Client("mongodb://104.130.222.221:27018");
$db=$connection->selectDatabase('Demo_Easy_Hotel');
$collection=$db->selectCollection('saless');

    $ruc = $_POST["ruc"];
    $razon_social = $_POST["razon_social"];
    $dir_fiscal = $_POST["dir_fiscal"];
    $telf_hotel = $_POST["telf_hotel"];
    $cel_hotel = $_POST["cel_hotel"];
    $correo_hotel = $_POST["correo_hotel"];
    $facebook_hotel = $_POST["facebook_hotel"];
    $instagram_hotel = $_POST["instagram_hotel"];
    $twitter_hotel = $_POST["twitter_hotel"];

    //Servicios
    $service=$_POST["service"];

    //datos del gerente o propietario
    $nombres_propietario = $_POST["nombres_propietario"];
    $apellidos_propietario = $_POST["apellidos_propietario"];
    $dni_propietario = $_POST["dni_propietario"];
    $cel_propietario = $_POST["cel_propietario"];
    $telf_propietario = $_POST["telf_propietario"];

    //datos de convenio
    $convenio = $_POST["tiempo_convenio"];
    $periodo = $_POST["periodo"];
    $plan = $_POST["plan"];

    $cuotas = $_POST["cuotas"];

    





    $sales = [
        'ruc' => $ruc, 
        'razon_social' => $razon_social, 
        'dir_fiscal' => $dir_fiscal,
        'telf_hotel' => $telf_hotel,
        'cel_hotel' => $cel_hotel,
        'correo_hotel' => $correo_hotel, 
        'facebook_hotel' => $facebook_hotel, 
        'instagram_hotel' => $instagram_hotel,
        'twitter_hotel' => $twitter_hotel,
        //servicios
        'service' => $service,
        //datos del gerente o propietario
        'nombres_propietario' => $nombres_propietario, 
        'apellidos_propietario' => $apellidos_propietario, 
        'dni_propietario' => $dni_propietario,
        'cel_propietario' => $cel_propietario,
        'telf_propietario' => $telf_propietario,
        //datos de convenio
        'tiempo_convenio' => $convenio, 
        'periodo' => $periodo,
        'plan' => $plan,
        'cuotas' => $cuotas,
    ];
  
    if (is_array($sales)){
             
        if($collection->insertOne($sales)){
            header('Location: http://localhost/EH_0.0.1/Formulario_registro.html');
            }else{
                echo "fill the fields";
        }
        };


// if($_POST)
// {
//     $doc= array(

//         'ruc' => $_POST['ruc'],
//         'razon_social' => $_POST['razon_social'],
//         'dir_Fiscal' => $_POST['dir_Fiscal'],
//         'telf_hotel' => $_POST['telf_hotel'],
//         'cel_hotel' => $_POST['cel_hotel'],
//         'correo_hotel' => $_POST['correo_hotel'],
//         'web_hotel' => $_POST['web_hotel'],
//         'facebook' => $_POST['facebook_hotel'],
//         'instagram' => $_POST['instagram_hotel'],
//         'twitter' => $_POST['twitter_hotel'],
        
//         // SERVICIOS
         
    
    
//         // DATOS DEL GERENTE O PROPIETARIO
//         'nombres_propietario' => $_POST['nombres_propietario'],
//         'apellidos_propietario' => $_POST['apellidos_propietario'],
//         'dni_propietario' => $_POST['dni_propietario'],
//         'cel_propietario' => $_POST['cel_propietario'],
//         'telf_propietario' => $_POST['telf_propietario'],

//         // DATOS DE CONVENIO
//         'cuotas' => $_POST['cuotas'],

//     );
    
//     if($collection->insertOne($doc)){
//         header('Location: http://localhost/EH_0.0.1/Formulario_sale.html');
//         exit;
//         };
//     }

?>