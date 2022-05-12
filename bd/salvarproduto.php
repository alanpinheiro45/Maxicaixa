<?php
    require_once("../repetidores/head.php");
    //var_dump($_FILES , $_POST);
    
    $diretorio=date("Y-m-d-H-i-s").$_FILES['img_perfil']['name'];

    move_uploaded_file($_FILES['img_perfil']['tmp_name'],"../".$diretorio);
    // move_uploaded_file($_FILES['img_perfil']['tmp_name'],"../".$diretorio);

    try{
        $contador=$PDO->exec("INSERT INTO produtos VALUES (
        default,
        '1',
        '$_POST[nome]',
        '$_POST[peso]',
        '$_POST[capacidade_volume]',
        '$_POST[material]',
        '$_POST[dimensoes_externas]',
        '$_POST[dimensoes_internas]',
        '{$url}{$diretorio}',
        '$_POST[carga_dinamica]',
        '$_POST[carga_estatica]',
        'descricao'
        )");

    }catch(Exception $e){
        echo("Erro na consulta".$e->getMessage());
    }
    var_dump($contador);

    if($contador>0){
        echo("Dados inseridos com sucesso");
    }else{
        echo("Erro ao inserir dados");
    }

    

?>