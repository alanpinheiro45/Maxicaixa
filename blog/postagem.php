<?php

require_once("../repetidores/head.php");
require_once("../repetidores/cabecalho.php");

try{
    $resultpostagem = $PDO->query("SELECT conteudo FROM blog_postagem WHERE id = $_GET[id]" , PDO::FETCH_ASSOC);

    if($resultpostagem != false){
        $postagem = $resultpostagem->fetch();
    }
    

}
catch(Exception $e){
    echo("Erro ao pegar os registros");
}?>

<div class="centralizado">
<div class="postagem">
    <?=$postagem["conteudo"]?>
</div></div>


<?php require_once("../repetidores/footer.php");?>