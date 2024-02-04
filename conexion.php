<?php

$servername = "162.241.203.240";
$user = "juangtzc_jmgv8719";
$password = "Jmsa424b";
$database = "juangtzc_portafolio";

$conn = new mysqli($servername,$user,$password,$database);

if ($conn->connect_error) {
    die("eror".$conn->connect_error);
}else{
    echo ("ahora si");
}

?>