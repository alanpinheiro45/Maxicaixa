<title>Categorias • Maxicaixa</title>
<?php
require_once("../repetidores/head.php");
require_once("../repetidores/cabecalho.php");
require_once("../bd/conexao.php");

try{
    $nomeTitulo = urldecode($_GET["titulo"]);
    $resultadoID=$PDO->query("SELECT * FROM categoria_produto WHERE nome = '$nomeTitulo'");
    $resultadoID = $resultadoID->fetch();
    $resultados=$PDO->query("SELECT produtos.id, produtos.nome, produtos.img_perfil FROM produtos , categoria_produto WHERE produtos.id_categoria = categoria_produto.id AND categoria_produto.id = $resultadoID[id]",PDO::FETCH_ASSOC);

    if($resultados == false){
        echo("Erro ao consultar os dados");
        exit();
    }

    $resultados=$resultados->fetchAll();

}catch(Exception $e){
    echo("Erro ao consultar os dados".$e->getMessage());
}

?>

 <div class="centralizado listagemProdutos">
        <div class="row infoProdutos1">
            <?php foreach($resultados as $item): ?>


                <div class="col-4">
                <a href="<?=$url?>produto/<?=urlencode($item['nome'])?>">
                    <div class="imgProdutos">
                        <img src="<?=$item["img_perfil"]?>">
                    </div>
                    <div class="txtProdutos">
                        <p><?= $item["nome"] ?></p>
                    </div>
                    <button>SOLICITAR COTAÇÃO</button></a>
                </div>

                <?php endforeach; ?>
            </div>
        </div>

        <?php require_once("../repetidores/footer.php"); ?>