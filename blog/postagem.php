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
    <title>Post</title>
<div class="centralizado blogPost">
    <div class="postagem">
        <?=$postagem["conteudo"]?>
    </div>

    <button><a href="../index.php">VOLTAR PARA A PAGINA INICIAL</a></button>
</div>


<?php require_once("../repetidores/footer.php");?>