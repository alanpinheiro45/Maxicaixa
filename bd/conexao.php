<?php

try{
    $PDO = new PDO("mysql:host=localhost;dbname=maxicaixa", "root", "");
}catch(Exception $e){
    echo("Erro ao conectar ao banco de dados" . $e->getMessage());
    exit();
}

?>