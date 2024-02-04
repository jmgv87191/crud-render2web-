<?php

    function subir_imagen(){
        if (isset($_FILES["imagen_usuario"])) {
            $extension = explode('.', $_FILES['imagen_usuario']['name']);
            $nuevo_nombre = rand(). '.' . $extension[1];
            $ubicacion = './img/'.$nuevo_nombre
        }
    }


?>