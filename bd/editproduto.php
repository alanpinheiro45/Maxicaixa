<?php
    require_once("../repetidores/head.php");
    require_once("../repetidores/cabecalho.php");
    $diretorio=date("Y-m-d-H-i-s").$_FILES['img_perfil']['name'];
    $diretorio2=date("Y-m-d-H-i-s").$_FILES['img_descricao']['name'];
    $diretorio3=date("Y-m-d-H-i-s").$_FILES['img3']['name'];
    $diretorio4=date("Y-m-d-H-i-s").$_FILES['img4']['name'];
    $diretorio5=date("Y-m-d-H-i-s").$_FILES['img5']['name'];
    $diretorio6=date("Y-m-d-H-i-s").$_FILES['img6']['name'];
    
    move_uploaded_file($_FILES['img_perfil']['tmp_name'],"../img/imgproduto/".$diretorio);
    $urlImgPerfil = (!empty($_FILES["img_perfil"]["name"])) ? "{$url}img/imgproduto/{$diretorio}" : "";
    move_uploaded_file($_FILES['img_descricao']['tmp_name'],"../img/imgproduto/".$diretorio2);
    $urlImgDesc = (!empty($_FILES["img_descricao"]["name"])) ? "{$url}img/imgproduto/{$diretorio2}" : "";
    move_uploaded_file($_FILES['img3']['tmp_name'],"../img/imgproduto/".$diretorio3);
    $urlImg3 = (!empty($_FILES["img3"]["name"])) ? "{$url}img/imgproduto/{$diretorio3}" : "";
    move_uploaded_file($_FILES['img4']['tmp_name'],"../img/imgproduto/".$diretorio4);
    $urlImg4 = (!empty($_FILES["img4"]["name"])) ? "{$url}img/imgproduto/{$diretorio4}" : "";
    move_uploaded_file($_FILES['img5']['tmp_name'],"../img/imgproduto/".$diretorio5);
    $urlImg5 = (!empty($_FILES["img5"]["name"])) ? "{$url}img/imgproduto/{$diretorio5}" : "";
    move_uploaded_file($_FILES['img6']['tmp_name'],"../img/imgproduto/".$diretorio6);
    $urlImg6 = (!empty($_FILES["img6"]["name"])) ? "{$url}img/imgproduto/{$diretorio6}" : "";

    try{
        $pdtid=$_POST["idproduto"];

        $contador=$PDO->exec("UPDATE produtos SET 
        id_categoria = '$_POST[select]', 
        nome = '$_POST[nome]', 
        descricao = '$_POST[descricao]', 
        descricao2 = '$_POST[descricao2]', 
        img_perfil = '$urlImgPerfil', 
        img_descricao = '$urlImgDesc', 
        img3 = '$urlImg3', 
        img4 = '$urlImg4', 
        img5 = '$urlImg5', 
        img6 = '$urlImg6' 
        WHERE produtos.id = $pdtid") ;
            
            $lastid = $PDO->lastInsertId();

        $PDO->exec("DELETE FROM rl_produto_segmentos WHERE $pdtid = rl_produto_segmentos.idProduto");
        
        foreach($_POST["segmentos"] as $item){
            $PDO->exec("INSERT INTO rl_produto_segmentos VALUES (default, '$pdtid', '$item')");
        }

var_dump($pdtid);
var_dump($contador);

    }catch(Exception $e){
        echo("Erro na consulta".$e->getMessage());
    }
    
    if($contador>0){
        require_once("../produto/salvoproduto.php");
    }else{
        echo("Erro ao inserir dados");
    }
?>