
<?php 
 require_once("head.php");
 require_once("../bd/conexao.php");

try{
    $rsegmentos=$PDO->query("SELECT * FROM segmentos",PDO::FETCH_ASSOC);
    $lprodutos=$PDO->query("SELECT * FROM categoria_produto",PDO::FETCH_ASSOC);

    if($rsegmentos == false || $lprodutos == false){
        echo("Erro ao consultar os dados");
        exit();
    }

    $rsegmentos=$rsegmentos->fetchAll();
    $lprodutos=$lprodutos->fetchAll();
    // var_dump($rsegmentos);
    // var_dump($lprodutos);

}catch(Exception $e){
    echo("Erro ao consultar os dados".$e->getMessage());
}



?>

<div class="bemVindo">
    <div class="centralizado cabeca">
        <span>Bem-vindo ao site Maxicaixa</span><span><i class="fa-solid fa-phone-flip"></i>(11) 4280.1721</span><span><i class="fa-regular fa-envelope"></i>contato@maxicaixa.com.br</span>
        <div class="redesSociais">
            <span><i class="fa-brands fa-facebook-f"></i><i class="fa-brands fa-linkedin-in"></i><i class="fa-brands fa-instagram"></i></span>
        </div>
    </div>
</div>
<header>
    <div class="barraTarefas">
        <a href="<?=$url?>/index.php"><img src="<?=$url?>/img/logo-footer-maxicaixa.png"></a>

        <nav>
            <ul>
                <li><a href="<?=$url?>/index.php">Home</a></li>
                <li><a href="<?=$url?>/sobre-nos/index.php">Sobre nós</a></li>
                <li> <a href="<?=$url?>/produtos/index.php"> Produtos</a>
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
                        <li>
                            <?= $item["nome"] ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li> 
                <li>Blog</li> 
                <li><a href="<?=$url?>/fale-conosco/index.php">Fale Conosco</a></li> 
                <li><a href="<?=$url?>/upload/catalogo-pdf.pdf" target="_blank">Catálogo Digital</a></li>
                <li><i class="fa-solid fa-magnifying-glass"></i></li>        
            </ul>
        </nav>
    </div> 
</header>