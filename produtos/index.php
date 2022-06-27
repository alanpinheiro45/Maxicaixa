<title>Produtos • Maxicaixa</title>
<?php
require_once("../repetidores/head.php");
require_once("../repetidores/cabecalho.php");
require_once("../bd/conexao.php");

$qtd = 30;
$page = 1; 
if(isset($_GET["page"])){
    $page = $_GET["page"];
}

$n1= ($page - 1) * $qtd;
$n2= $qtd;

try{
    $resultados=$PDO->query("SELECT * FROM produtos ORDER BY id_categoria ASC LIMIT $n1 , $n2 ",PDO::FETCH_ASSOC);
    $qtdpaginas=$PDO->query('SELECT ceil(count(*)/30) as contador FROM produtos');
    $rsegmentos=$PDO->query("SELECT * FROM segmentos",PDO::FETCH_ASSOC);
    $lprodutos=$PDO->query("SELECT * FROM categoria_produto ORDER BY ordem ASC;",PDO::FETCH_ASSOC);

    if($resultados == false){
        echo("Erro ao consultar os dados");
        exit();
    }

    $resultados=$resultados->fetchAll();
    $qtdpaginas=$qtdpaginas->fetch();
    $rsegmentos=$rsegmentos->fetchAll();
    $lprodutos=$lprodutos->fetchAll();

}catch(Exception $e){
    echo("Erro ao consultar os dados".$e->getMessage());
}

?>
<body>
    <div class="centralizado tprodutos"><h1>Produtos Maxicaixa</h1></div>
        <div class="segmentoLateral">
            <ul>
            <li><h2>Segmentos</h2>
                <ul>
                <?php foreach($rsegmentos as $item): ?>
                    <li><a href="<?= $url. "segmentos/".urlencode($item["nome"]) ?>">
                        <?= $item["nome"] ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </li>
                </ul>
                <ul>
                    <li><h2>Linhas de Produtos</h2>
                            <ul>
                                <?php foreach($lprodutos as $item): ?>
                                <li><a href="<?= $url. "categoria-produto/".urlencode($item['nome']) ?>">
                                    <?= $item["nome"] ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                    </li>
                </ul> 
        </div>
          
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
            
            <div class="npage">
            <?php for($i = 1; $i <= $qtdpaginas['contador']; $i++):?>
                <a href="?page=<?=$i?>"class="linkpagina btn"><?=$i?></a>
                <?php endfor;?>
            </div>
        </div>
<?php require_once("../repetidores/footer.php");?>