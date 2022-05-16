<?php
    require_once("../repetidores/head.php");
    //var_dump($_FILES , $_POST);
    
    $diretorio=date("Y-m-d-H-i-s").$_FILES['img_perfil']['name'];
    $diretorio2=date("Y-m-d-H-i-s").$_FILES['img_descricao']['name'];
    
    move_uploaded_file($_FILES['img_perfil']['tmp_name'],"../".$diretorio);
    move_uploaded_file($_FILES['img_descricao']['tmp_name'],"../".$diretorio2);

    try{
        $contador=$PDO->exec("INSERT INTO produtos VALUES (
        default,
        '$_POST[select]',
        '$_POST[nome]',
        '$_POST[peso]',
        '$_POST[capacidade_volume]',
        '$_POST[material]',
        '$_POST[dimensoes_externas]',
        '$_POST[dimensoes_internas]',
        '{$url}{$diretorio}',
        '$_POST[carga_dinamica]',
        '$_POST[carga_estatica]',
        '{$url}{$diretorio2}'
        )");

    }catch(Exception $e){
        echo("Erro na consulta".$e->getMessage());
    }

    if($contador>0){
        require_once("../produto/salvoproduto.php");
    }else{
        echo("Erro ao inserir dados");
    }
?>