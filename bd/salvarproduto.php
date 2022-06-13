<?php
    require_once("../repetidores/head.php");
    var_dump($_POST);
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
        $contador=$PDO->exec("INSERT INTO produtos VALUES (
        default,
        '$_POST[select]',
        '$_POST[nome]',
        '$_POST[peso]',
        '$_POST[capacidade_volume]',
        '$_POST[descricao]',
        '$_POST[material]',
        '$_POST[dimensoes_externas]',
        '$_POST[dimensoes_internas]',
        '$urlImgPerfil',
        '$_POST[carga_dinamica]',
        '$_POST[carga_estatica]',
        '$urlImgDesc',
        '$urlImg3',
        '$urlImg4',
        '$urlImg5',
        '$urlImg6'
        )");
            
            $lastid = $PDO->lastInsertId();
            var_dump($lastid);

        foreach($_POST["segmentos"] as $item){
            var_dump($item);

            $PDO->exec("INSERT INTO rl_produto_segmentos VALUES (default, '$lastid', '$item')");
        }

    }catch(Exception $e){
        echo("Erro na consulta".$e->getMessage());
    }
    
    if($contador>0){
        require_once("../produto/salvoproduto.php");
    }else{
        echo("Erro ao inserir dados");
    }
?>