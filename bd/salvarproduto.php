<?php
    require_once("../repetidores/head.php");
    
    $diretorio=date("Y-m-d-H-i-s").$_FILES['img_perfil']['name'];
    $diretorio2=date("Y-m-d-H-i-s").$_FILES['img_descricao']['name'];
    $diretorio3=date("Y-m-d-H-i-s").$_FILES['img3']['name'];
    $diretorio4=date("Y-m-d-H-i-s").$_FILES['img4']['name'];
    $diretorio5=date("Y-m-d-H-i-s").$_FILES['img5']['name'];
    $diretorio6=date("Y-m-d-H-i-s").$_FILES['img6']['name'];
    
    move_uploaded_file($_FILES['img_perfil']['tmp_name'],"../img/imgproduto/".$diretorio);
    move_uploaded_file($_FILES['img_descricao']['tmp_name'],"../img/imgproduto/".$diretorio2);
    move_uploaded_file($_FILES['img3']['tmp_name'],"../img/imgproduto/".$diretorio3);
    move_uploaded_file($_FILES['img4']['tmp_name'],"../img/imgproduto/".$diretorio4);
    move_uploaded_file($_FILES['img5']['tmp_name'],"../img/imgproduto/".$diretorio5);
    move_uploaded_file($_FILES['img6']['tmp_name'],"../img/imgproduto/".$diretorio6);

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
        '{$url}img/imgproduto/{$diretorio}',
        '$_POST[carga_dinamica]',
        '$_POST[carga_estatica]',
        '{$url}img/imgproduto/{$diretorio2}',
        '{$url}img/imgproduto/{$diretorio3}',
        '{$url}img/imgproduto/{$diretorio4}',
        '{$url}img/imgproduto/{$diretorio5}',
        '{$url}img/imgproduto/{$diretorio6}'
        )");
            
            $lastid = $PDO->lastInsertId();
        foreach($_POST["segmentos"] as $item){
            $PDO->exec("INSERT INTO rl_produto_segmentos VALUES(default, '$lastid', '$item')");
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