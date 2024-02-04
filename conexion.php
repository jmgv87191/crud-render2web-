<?php

<<<<<<< HEAD
    $servername = "localhost";
    $user = "root";
    $password = "";
    $database = "";

    $conn = mysqli_connect( $servername, $user, $password, $database );

    if(!$conn){
        die( "conexion sin exito". mysqli_connect_error() );
    }
=======
$servername = "localhost";
$user = "juangtzc_jmgv8719";
$password = "msa424b";
$database = "juangtzc_portafolio";

$conn = new mysqli($servername,$user,$password,$database);

if ($conn->connect_error) {
    die("eror".$conn->connect_error);
}else{
    echo ("ahora si");
}
>>>>>>> origin/master

?>