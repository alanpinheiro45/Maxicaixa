<?php
    require_once("../repetidores/head.php");
    var_dump($_GET);
    
    try{
        $contador=$PDO->exec("INSERT INTO contatos VALUES ( default, '$_GET[nome]','$_GET[empresa]','$_GET[cidade]','$_GET[email]','$_GET[telefone]','$_GET[mensagem]')");
    }catch(Exception $e){
        echo("Erro na consulta".$e->getMessage());
    }

    if($contador>0){
        echo("Dados inseridos com sucesso");
    }else{
        echo("Erro ao inserir dados");
    }

?>