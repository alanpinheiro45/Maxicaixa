<?php

require_once("../repetidores/head.php");
require_once("../repetidores/cabecalho.php");
require_once("../bd/conexao.php");

try{
    $resultproduto = $PDO->query("SELECT * FROM produtos WHERE id = $_GET[id]" , PDO::FETCH_ASSOC);
    $resultsegmento = $PDO->query("SELECT segmentos.nome FROM segmentos, rl_produto_segmentos , produtos WHERE segmentos.id = rl_produto_segmentos.idSegmentos AND produtos.id = rl_produto_segmentos.idProduto AND produtos.id = $_GET[id]", PDO::FETCH_ASSOC);
    $resultimg = $PDO->query("SELECT * FROM img_produto WHERE img_produto.idProduto = $_GET[id]" , PDO::FETCH_ASSOC);

    if($resultproduto != false){
        $produto = $resultproduto->fetch();
    }
    
    if($resultsegmento != false){
        $segmento = $resultsegmento->fetchAll();
    }
    if($resultimg != false){
        $imagem = $resultimg->fetchAll();
    }
}
catch(Exception $e){
    echo("Erro ao pegar os registros");
}?>

<div class="bgproduto">
    <div class="centralizado">
        <div class="row">
            <div class="col">
                <img src="<?=$produto["img_perfil"]?>">
                    <div class="row subimagens">
                        <?php foreach($imagem AS $item): ?>
                            <div class="col">
                                <img src="<?=$item["url"]?>">
                            </div>
                        <?php endforeach; ?>                    
                    </div>
            </div>
            <div class="col">
                <h1><?=$produto["nome"]?></h1>
                <div class="descricaopd">
                    <div class="tabeladescricao">
                        <table class="table table-bordered">
                                <tr>
                                    <td>Peso</td>
                                <td>Tamanho</td>
                            </tr>
                            <tr>
                                <td><?= $produto["peso"] ?></td> 
                                <td><?= $produto["dimensoes_externas"] ?></td> 
                            </tr>    
                        </table>
                    </div>
                    <details open>
                        <summary>Descrição</summary>
                        <img src="<?= $produto["img_descricao"] ?>">
                    </details>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once("../repetidores/footer.php");?>