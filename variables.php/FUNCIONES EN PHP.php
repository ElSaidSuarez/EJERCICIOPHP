<?php

function saludarNombre(){
    echo "Hola Said";
}

function saludar(){
    echo "Hola ...";
}

function despedir($nombre, $apellido){
    echo "Adios " . $nombre. " ". $apellido;
}


saludar();
saludarNombre();
echo "<br>";
despedir("said", "suarez");



?>