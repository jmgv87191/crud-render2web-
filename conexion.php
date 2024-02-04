<?php


$conn = new mysqli($servername,$user,$password,$database);

if ($conn->connect_error) {
    die("eror".$conn->connect_error);
}else{
    echo ("ahora si");
}

?>