<title>Segmentos • Maxicaixa</title>
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
var_dump($page);
try{
    $resultadoID=$PDO->query("SELECT * FROM segmentos WHERE segmentos.nome = '$_GET[titulo]'");
    $resultadoID = $resultadoID->fetch();
    $resultados=$PDO->query("SELECT produtos.id, produtos.nome, produtos.img_perfil FROM produtos, rl_produto_segmentos WHERE produtos.id = rl_produto_segmentos.idProduto AND rl_produto_segmentos.idSegmentos = $resultadoID[id] LIMIT $n1 , $n2",PDO::FETCH_ASSOC);
    $qtdpaginas=$PDO->query('SELECT ceil(count(*)/12) as contador FROM produtos, rl_produto_segmentos WHERE produtos.id = rl_produto_segmentos.idProduto AND rl_produto_segmentos.idSegmentos = '.$resultadoID["id"].'');

    if($resultados == false){
        echo("Erro ao consultar os dados");
        exit();
    }

    $resultados=$resultados->fetchAll();
    $qtdpaginas=$qtdpaginas->fetch();

}catch(Exception $e){
    echo("Erro ao consultar os dados".$e->getMessage());
}
var_dump($qtdpaginas);
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
                    </div></a>
                    <a href="../fale-conosco/index.php"><button>Solicitar um Cotação</button></a>
                </div>

                <?php endforeach; ?>
            </div>

            <div class="npage">
            <?php for($i = 1; $i <= $qtdpaginas['contador']; $i++):?>
                <a href="<?=$url?>segmentos/<?=$_GET['titulo']."/".$i?>"class="linkpagina btn"><?=$i?></a>
                <?php endfor;?>
            </div>
        </div>

        <?php require_once("../repetidores/footer.php"); ?>