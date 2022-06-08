<title>Blog • Maxicaixa</title>
<?php  

require_once("../repetidores/head.php");
require_once("../repetidores/cabecalho.php");
require_once("../bd/conexao.php");

$resultados=$PDO->query("SELECT id, titulo, img_miniatura, resumo FROM blog_postagem",PDO::FETCH_ASSOC);

?>
<div class="blogtitle">
    <h1>Blog Maxicaixa</h1>
</div>
<div class="centralizado blog">
    <div class="row infoProdutos1">
    <?php foreach($resultados as $item): ?>

        <div class="col-4">

        <a href="<?=$url?>blog/postagem.php?id=<?=$item['id']?>">
            <div class="imgProdutos">
                <img src="<?=$item["img_miniatura"]?>">
            </div>
            <div class="titulo">
                <p><?= $item["titulo"] ?></p>
            </div></a>
            <div class="resumo">
                <p><?= $item["resumo"] ?></p>
            </div></a>
            
        </div>

        
        <?php endforeach; ?>
    </div>
</div>


<?php require_once("../repetidores/footer.php");?>