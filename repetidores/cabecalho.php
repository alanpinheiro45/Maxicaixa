
<?php 
 require_once("{$_SERVER["DOCUMENT_ROOT"]}/Maxicaixa/repetidores/head.php");
 require_once("{$_SERVER["DOCUMENT_ROOT"]}/Maxicaixa/bd/conexao.php");

try{
    $rsegmentos=$PDO->query("SELECT * FROM segmentos",PDO::FETCH_ASSOC);
    $lprodutos=$PDO->query("SELECT * FROM categoria_produto",PDO::FETCH_ASSOC);

    if($rsegmentos == false || $lprodutos == false){
        echo("Erro ao consultar os dados");
        exit();
    }

    $rsegmentos=$rsegmentos->fetchAll();
    $lprodutos=$lprodutos->fetchAll();

}catch(Exception $e){
    echo("Erro ao consultar os dados".$e->getMessage());
}

?>

<div class="bemVindo">
    <div class="centralizado cabeca">
        <span>Bem-vindo ao site Maxicaixa</span><span><i class="fa-brands fa-whatsapp"></i></i>(19) 99344-2134</span><span><i class="fa-regular fa-envelope"></i>contato@maxicaixa.com.br</span>
        <div class="redesSociais">
            <span><a href="<?=$url?>usuario/login.php"><i class="fa-regular fa-circle-user"></i></a><a href="https://www.facebook.com/maxicaixa" target="_blank"><i class="fa-brands fa-facebook-f"></i></a><a href="https://www.linkedin.com/company/maxicaixa/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a><a href="https://www.instagram.com/maxicaixa.com.br" target="_blank"><i class="fa-brands fa-instagram"></i></a></span>
        </div>
    </div>
</div>
<header>
    <div class="barraTarefas">
        <a href="<?=$url?>index.php"><img src="<?=$url?>img/logo-footer-maxicaixa.png"></a>

        <nav>
            <ul>
                <li><a href="<?=$url?>index.php">Home</a></li>
                <li><a href="<?=$url?>sobre-nos/index.php">Sobre nós</a></li>
                <li> <a href="<?=$url?>produtos/index.php"> Produtos</a>
                    <ul>
                        <?php foreach($lprodutos as $item): ?>
                        <li><a href="<?= $url. "categoria-produto/index.php?id=$item[id]" ?>">
                            <?= $item["nome"] ?> </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li>Segmentos
                    <ul>
                    <?php foreach($rsegmentos as $item): ?>
                        <li><a href="<?= $url. "segmentos/index.php?id=$item[id]" ?>">
                            <?= $item["nome"] ?> </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li> 
                <li><a href="<?=$url?>blog/blog.php">Blog</a></li> 
                <li><a href="<?=$url?>fale-conosco/index.php">Faça um Orçamento</a></li> 
                <li><a href="<?=$url?>upload/catalogo-pdf.pdf" target="_blank">Catálogo Digital</a></li>       
            </ul>
        </nav>
    </div> 
</header>