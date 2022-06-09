<title>Home • Maxicaixa</title>
<?php require_once("{$_SERVER["DOCUMENT_ROOT"]}/Maxicaixa/repetidores/head.php");?>
<?php $url = "http://$_SERVER[SERVER_NAME]/Maxicaixa/";?>
<?php require_once("{$_SERVER["DOCUMENT_ROOT"]}/Maxicaixa/bd/conexao.php");?>
    </head><body>
<?php require_once("{$_SERVER["DOCUMENT_ROOT"]}/Maxicaixa/repetidores/cabecalho.php");?>
    <div class="imgbanner">
        <img src="<?=$url?>img/banner.png">
    </div>
    <div class="imgbanner2">
        <img src="<?=$url?>img/bannercortado.png">
    </div>
    <div class="informacoes">
        <div class="centralizado infoHome">
            <h1>A Maxicaixa industrializa e comercializa uma <br>variada linha de produtos em material plástico.</h1>
            <h3>Nossa postura aliada ao alto padrão de atendimento prestado por nossos funcionários são
o que fazem da Maxicaixa uma referência no mercado de embalagens plásticas.</h3>
        </div>
        <div class="centralizado">
            <div class="iconsHome row">
                <div class="col">
                    <a href="<?=$url?>segmentos/Agronegocio"><img src="<?=$url?>/img/icone-agro-maxicaixa3.png"></a>
                    <h2>Agronegócio</h2>
                </div>
                <div class="col">
                    <a href="<?=$url?>segmentos/Automotiva"><img src="<?=$url?>/img/icone-auto-maxicaixa3.png"></a>
                    <h2>Automotiva</h2>
                </div>
                <div class="col">
                    <a href="<?=$url?>segmentos/Avicola"><img src="<?=$url?>/img/icone-avicola-maxicaixa3.png"></a>
                    <h2>Avícola</h2>
                </div>
                <div class="col">
                    <a href="<?=$url?>segmentos/Farmaceutica"><img src="<?=$url?>/img/icone-farma-maxicaixa3.png"></a>
                    <h2>Farmacêutica</h2>
                </div>
                <div class="col">
                    <a href="<?=$url?>segmentos/Industrial"><img src="<?=$url?>/img/icone-industrial-maxicaixa3.png"></a>
                    <h2>Industrial</h2>
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