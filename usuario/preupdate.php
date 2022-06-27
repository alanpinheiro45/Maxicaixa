<?php
    require_once("../repetidores/head.php");
    require_once("../repetidores/cabecalho.php");
    require_once("../bd/conexao.php");

    try{
        $resultados=$PDO->query("SELECT * FROM produtos ORDER BY id_categoria ",PDO::FETCH_ASSOC);
    
        if($resultados == false){
            echo("Erro ao consultar os dados");
            exit();
        }
    
        $resultados=$resultados->fetchAll();

    }catch(Exception $e){
        echo("Erro ao consultar os dados".$e->getMessage());
    }
     
?>
<div class="centralizado  cd_produtos">
        <form form enctype="multipart/form-data" action="<?=$url?>usuario/updateproduto.php" method="post">
        
        <p>Selecione qual produto quer editar</p>
        <select name="titulo">
            <?php foreach($resultados as $item): ?>
                <option value="<?=$item["nome"]?>"><?=$item["nome"]?></option>
            <?php endforeach; ?>
        </select>

        <input type="submit" value="Enviar">
    </form>
</div>
