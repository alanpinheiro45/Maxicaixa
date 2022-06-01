<title>Home • Maxicaixa</title>
<?php require_once("{$_SERVER["DOCUMENT_ROOT"]}/Maxicaixa/repetidores/head.php");?>
<?php $url = "http://$_SERVER[SERVER_NAME]/Maxicaixa/";?>
<?php //$_SESSION["cor"] = "verde";?>
<?php require_once("{$_SERVER["DOCUMENT_ROOT"]}/Maxicaixa/bd/conexao.php");?>
    </head><body>
<?php require_once("{$_SERVER["DOCUMENT_ROOT"]}/Maxicaixa/repetidores/cabecalho.php");?>
    <div class="imgbanner">
        <img src="<?=$url?>/img/banner.png">
    </div>
    <div class="imgbanner2">
        <img src="<?=$url?>/img/bannercortado.png">
    </div>
    <div class="informacoes">
        <div class="centralizado infoHome">
            <h1>A Maxicaixa industrializa e comercializa uma <br>variada linha de produtos em material plástico.</h1>
            <h5>Nossa postura, aliada ao padrão de atendimento prestado por nossos funcionários,<br>que faz da Maxicaixa referência no mercado.</h5>
        </div>
        <div class="centralizado">
            <div class="iconsHome row">
                <div class="col">
                    <img src="<?=$url?>/img/icone-agro-maxicaixa3.png">
                    <p>Agronegócio</p>
                </div>
                <div class="col">
                    <img src="<?=$url?>/img/icone-auto-maxicaixa3.png">
                    <p>Automotiva</p>
                </div>
                <div class="col">
                    <img src="<?=$url?>/img/icone-avicola-maxicaixa3.png">
                    <p>Avícola</p>
                </div>
                <div class="col">
                    <img src="<?=$url?>/img/icone-farma-maxicaixa3.png">
                    <p>Farmacêutica</p>
                </div>
                <div class="col">
                    <img src="<?=$url?>/img/icone-industrial-maxicaixa3.png">
                    <p>Industrial</p>
                </div>
            </div>
        </div>
    </div>
<?php require_once("repetidores/linhaprodutos.php") ?>
<?php require_once("repetidores/sobrenos.php")?>
<?php require_once("repetidores/blog.php");?>
<?php require_once("repetidores/faleconosco.php")?>
<?php require_once("repetidores/footer.php");?>

</html>