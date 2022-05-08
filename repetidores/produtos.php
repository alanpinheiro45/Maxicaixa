<div class="infoProdutos">
    <div class="centralizado pdProdutos">
        <h1>Produtos Maxicaixa</h1>
    </div>

<?php
try{
    $resultados=$PDO->query("SELECT * FROM produtos",PDO::FETCH_ASSOC);

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
                    <div class="imgProdutos">
                        <img src="<?=$item["imagem"]?>">
                    </div>
                    <div class="txtProdutos">
                        <p><?= $item["nome"] ?></p>
                    </div>
                    <button>Solicitar um Cotação</button>
                </div> 

                
                
                <?php endforeach; ?>
            </div>
        </div>

</div>