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

<div id="wrapper">
   <!-- Sidebar -->
   <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../sobre-nos/index.php">Sobre nós</a></li>
                <li><a href="../produtos/index.php">Produtos</a>
                    <ul>
                        <?php foreach($lprodutos as $item): ?>
                        <li><a href="<?= "../categoria-produto/index.php?id=$item[id]" ?>">
                            <?= $item["nome"] ?> </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li><a>Segmentos</a>
                    <ul>
                    <?php foreach($rsegmentos as $item): ?>
                        <li><a href="<?= "../segmentos/index.php?id=$item[id]" ?>">
                            <?= $item["nome"] ?> </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li> 
                <li><a href="../blog/blog.php">Blog</a></li> 
                <li><a href="../fale-conosco/index.php">Faça um Orçamento</a></li> 
                <li><a href="../upload/catalogo-pdf.pdf" target="_blank">Catálogo Digital</a></li>       
      </ul>
   </div>
   <!-- /#sidebar-wrapper -->