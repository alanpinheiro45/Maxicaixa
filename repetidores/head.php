<?php //$url = "http://$_SERVER[DOCUMENT_ROOT]/Maxicaixa/";?>
<?php $url = "http://$_SERVER[SERVER_NAME]/Maxicaixa/";?>
<?php
//require_once("../url.php");
require_once($url . "/bd/conexao.php"); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="<?=$url?>css/estilo.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">