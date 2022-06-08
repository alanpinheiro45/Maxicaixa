<div class="blog" >
            <div class="centralizdo">
                <h2>Blog Maxicaixa</h2>
                <p>Veja os últimos artigos e novidades que a Maxicaixa traz para você em nosso blog</p>

<?php
try{
    $resultados=$PDO->query("SELECT * FROM blog_postagem",PDO::FETCH_ASSOC);

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
    

    </div>
</div>