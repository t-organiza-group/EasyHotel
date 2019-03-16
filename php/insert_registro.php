<?php
require 'vendor/autoload.php';

$connection = new MongoDB\Client("mongodb://104.130.222.221:27018");
$db=$connection->selectDatabase('Demo_Easy_Hotel');
$collection=$db->selectCollection('hotelss');

    $nameHotel = $_POST["nameHotel"];
    $address = $_POST["address"];
    $reference = $_POST["reference"];
    $ubis = $_POST["ubi"];
    $categorias=$_POST["categoria"];
    $estrellas=$_POST["calificacion"];

    $hotel = [
        'nameHotel' => $nameHotel, 
        'address' => $address, 
        'reference' => $reference,
        'categoria' => $categorias,
        'ubi' => $ubis,
        'calificacion' =>$estrellas,
    ];
  
    if (is_array($hotel)){
             
        if($collection->insertOne($hotel)){
            header('Location: http://localhost/EH_0.0.1/Formulario_sale.html');
            }else{
                echo "fill the fields";
        }
        };
        // if (is_array($ubis)){
             
        //         if($collection->insertOne($ubis)){
        //             header('Location: http://localhost/EH_0.0.1/Formulario_registro.html');
        //             };
        //         }
          
    // try{
    // if($collection->insertOne($hotel)){
    //     header('Location: http://localhost/EH_0.0.1/Formulario_registro.html');
    //     };

    // }catch(MongoDB\Driver\Exception\Exception $e){
    //    die("Error Encountered: ".$e);

    // }


// if($_POST)
// {

//     $doc= array(
        
//         'nameHotel' => $_POST['nameHotel'],
//         'address' => $_POST['address'],
//         'reference' => $_POST['reference'],

        

  
//     );
//    
          
//     if($collection->insertOne($doc)){
//         header('Location: http://localhost/EH_0.0.1/Formulario_registro.html');
//         exit;
//         };
//     }

?>