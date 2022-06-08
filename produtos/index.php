<title>Produtos • Maxicaixa</title>
<?php
require_once("../repetidores/head.php");
require_once("../repetidores/cabecalho.php");
require_once("../bd/conexao.php");

$qtd = 12;
$page = 1; 
if(isset($_GET["page"])){
    $page = $_GET["page"];
}

$n1= ($page - 1) * $qtd;
$n2= $qtd;

try{
    $resultados=$PDO->query("SELECT * FROM produtos LIMIT $n1 , $n2 ",PDO::FETCH_ASSOC);


    if($resultados == false){
        echo("Erro ao consultar os dados");
        exit();
    }

    $resultados=$resultados->fetchAll();

}catch(Exception $e){
    echo("Erro ao consultar os dados".$e->getMessage());
}

?>
<body>

    <div class="centralizado listagemProdutos">
        <div class="row infoProdutos1">
            <?php foreach($resultados as $item): ?>
                <div class="col-4">

                    <a href="<?=$url?>produto/index.php?titulo=<?=urlencode($item['nome'])?>">
                        <div class="imgProdutos">
                            <img src="<?=$item["img_perfil"]?>">
                        </div>
                        <div class="txtProdutos">
                            <p><?= $item["nome"] ?></p>
                        </div>
                    </a>

                        <a href="../fale-conosco/index.php"><button>Solicitar um Cotação</button></a>
                </div>
                <?php endforeach; ?>  
            </div>
            <div class="npage">
                <a href="?page=1" class="linkpagina btn">1</a>
                <a href="?page=2" class="linkpagina btn">2</a>
                <a href="?page=3" class="linkpagina btn">3</a>
                <a href="?page=4" class="linkpagina btn">4</a>
                <a href="?page=5" class="linkpagina btn">5</a>
                <a href="?page=6" class="linkpagina btn">6</a>
            </div>
        </div>
<?php require_once("../repetidores/footer.php");?>