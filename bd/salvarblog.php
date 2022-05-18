<?php 
require_once("../repetidores/head.php"); 


$diretorio=date("Y-m-d-H-i-s").$_FILES['img_miniatura']['name'];
move_uploaded_file($_FILES['img_miniatura']['tmp_name'],"../img/imgblog/".$diretorio);

    try{
        $cont = $PDO->exec("INSERT INTO blog_postagem VALUES (default,'$_POST[titulo]','{$url}img/imgblog/{$diretorio}','$_POST[resumo]', '$_POST[conteudo]', NOW())");
        echo "numero de linhas afetadas". $cont;
    }catch(PDOException $e){
        echo("Erro na consulta".$e->getMessage());
    }

    if($cont>0){
        require_once("../blog/postagemsalva.php");
    }else{
        echo("Erro ao inserir dados");}


?>

