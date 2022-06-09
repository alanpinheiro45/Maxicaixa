<?php

require_once("../repetidores/head.php");
require_once("../repetidores/cabecalho.php");
require_once("../bd/conexao.php");

try{
    $nomeTitulo = urldecode($_GET["titulo"]);
    $resultproduto = $PDO->query("SELECT * FROM produtos WHERE nome = '$nomeTitulo'" , PDO::FETCH_ASSOC);

    if($resultproduto != false){
        $produto = $resultproduto->fetch();
    }

    $resultsegmento = $PDO->query("SELECT segmentos.nome FROM segmentos, rl_produto_segmentos , produtos WHERE segmentos.id = rl_produto_segmentos.idSegmentos AND produtos.id = rl_produto_segmentos.idProduto AND produtos.id = $produto[id]", PDO::FETCH_ASSOC);
    $resultimg = $PDO->query("SELECT * FROM img_produto WHERE img_produto.idProduto = $produto[id]" , PDO::FETCH_ASSOC);

    
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

<title>Produto • Maxicaixa</title>
<div class="bgproduto">
    <div class="centralizado">
        <div class="row">
            <div class="col">

                <div class="row">
                                      
                    <div class="container slides">

                            <?php
                            $cont = 0;

                                if(!empty($produto["img_perfil"]))
                                    $cont++;
                                if(!empty($produto["img_descricao"]))
                                    $cont++;
                                if(!empty($produto["img3"]))
                                    $cont++;
                                if(!empty($produto["img4"]))
                                    $cont++;
                                if(!empty($produto["img5"]))
                                    $cont++;
                                if(!empty($produto["img6"]))
                                    $cont++;    
                            ?>
        
                            <!-- Full-width images with number text -->
                            <?php if(!empty($produto["img_perfil"])): ?>
                                <div class="mySlides">
                                     <div class="numbertext">1 /<?=$cont?></div>
                                        <img src="<?=$produto["img_perfil"]?>" style="width:100%" >
                                </div>
                            <?php endif; ?>
        
                            <?php if(!empty($produto["img_descricao"])): ?>
                                <div class="mySlides">
                                     <div class="numbertext">2 /<?=$cont?></div>
                                        <img src="<?=$produto["img_descricao"]?>" style="width:100%" >
                                </div>
                            <?php endif; ?>
        
                            <?php if(!empty($produto["img3"])): ?>
                                <div class="mySlides">
                                     <div class="numbertext">3 /<?=$cont?></div>
                                        <img src="<?=$produto["img3"]?>" style="width:100%" >
                                </div>
                            <?php endif; ?>
        
                            <?php if(!empty($produto["img4"])): ?>
                                <div class="mySlides">
                                     <div class="numbertext">4 /<?=$cont?></div>
                                        <img src="<?=$produto["img4"]?>" style="width:100%" >
                                </div>
                            <?php endif; ?>
        
                            <?php if(!empty($produto["img5"])): ?>
                                <div class="mySlides">
                                     <div class="numbertext">5 /<?=$cont?></div>
                                        <img src="<?=$produto["img5"]?>" style="width:100%" >
                                </div>
                            <?php endif; ?>
        
                            <?php if(!empty($produto["img6"])): ?>
                                <div class="mySlides">
                                     <div class="numbertext">6 /<?=$cont?></div>
                                        <img src="<?=$produto["img6"]?>" style="width:100%" >
                                </div>
                            <?php endif; ?>
        
                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)"><i class="fa-solid fa-angle-left"></i></a>
                            <a class="next" onclick="plusSlides(1)"><i class="fa-solid fa-angle-right"></i></a>
        
                            
                            <!-- Thumbnail images -->
                            <div class="row">
                                <?php if(!empty($produto["img_perfil"])): ?>
                                    <div class="column">
                                        <img class="demo cursor" src="<?=$produto["img_perfil"]?>" style="width:100%" onclick="currentSlide(1)" >
                                    </div>
                                <?php endif; ?>
                                <?php if(!empty($produto["img_descricao"])): ?>
                                    <div class="column">
                                        <img class="demo cursor" src="<?=$produto["img_descricao"]?>" style="width:100%" onclick="currentSlide(2)" >
                                    </div>
                                <?php endif; ?>
                                <?php if(!empty($produto["img3"])): ?>
                                    <div class="column">
                                        <img class="demo cursor" src="<?=$produto["img3"]?>" style="width:100%" onclick="currentSlide(3)" >
                                    </div>
                                <?php endif; ?>
                                <?php if(!empty($produto["img4"])): ?>
                                    <div class="column">
                                        <img class="demo cursor" src="<?=$produto["img4"]?>" style="width:100%" onclick="currentSlide(4)" >
                                    </div>
                                <?php endif; ?>
                                <?php if(!empty($produto["img5"])): ?>
                                    <div class="column">
                                        <img class="demo cursor" src="<?=$produto["img5"]?>" style="width:100%" onclick="currentSlide(5)" >
                                    </div>
                                <?php endif; ?>
                                <?php if(!empty($produto["img6"])): ?>
                                    <div class="column">
                                        <img class="demo cursor" src="<?=$produto["img6"]?>" style="width:100%" onclick="currentSlide(6)" >
                                    </div>
                                <?php endif; ?>
                            </div>
                                    
                    </div>
                </div>
    


            </div>
            <div class="col">
                <h1><?=$produto["nome"]?></h1>
                <div class="descricaopd">
                    <div class="tabeladescricao">
                        <table class="table">
                            
                            <tr>
                                <?php if(!empty($produto["peso"])): ?>
                                    <th><h3>Peso</h3></th>
                                <?php endif; ?>
                                <?php if(!empty($produto["dimensoes_externas"])): ?>
                                    <th><h3>Dimensões Externas</h3></th>
                                <?php endif; ?>
                                <?php if(!empty($produto["material"])): ?>
                                    <th><h3>Material</h3></th>
                                <?php endif; ?>    
                                <?php if(!empty($produto["dimensoes_internas"])): ?>
                                    <th><h3>Dimensões Internas</h3></th>
                                <?php endif; ?>    
                            </tr>
                            <tr>
                                <?php if(!empty($produto["peso"])): ?>
                                    <td><?= $produto["peso"] ?></td>
                                <?php endif; ?>
                                <?php if(!empty($produto["dimensoes_externas"])): ?>
                                    <td><?= $produto["dimensoes_externas"] ?></td> 
                                <?php endif; ?>
                                <?php if(!empty($produto["material"])): ?>
                                    <td><?= $produto["material"] ?></td>
                                <?php endif; ?>
                                <?php if(!empty($produto["dimensoes_internas"])): ?>
                                    <td><?= $produto["dimensoes_internas"] ?></td>
                                <?php endif; ?>     
                            </tr>    
                            <tr>
                                <?php if(!empty($produto["capacidade_volume"])): ?>
                                    <th><h3>Capacidade / Volume</h3></th>
                                <?php endif;?>
                                <?php if(!empty($produto["carga_dinamica"])): ?>
                                    <th><h3>Carga Dinâmica</h3></th>
                                <?php endif; ?>
                                <?php if(!empty($produto["carga_estatica"])): ?>
                                    <th><h3>Carga Estática</h3></th>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <?php if(!empty($produto["capacidade_volume"])): ?>
                                    <td><?= $produto["capacidade_volume"] ?></td>
                                <?php endif; ?>
                                <?php if(!empty($produto["carga_dinamica"])): ?>
                                    <td><?= $produto["carga_dinamica"] ?></td>
                                <?php endif; ?>
                                <?php if(!empty($produto["carga_estatica"])): ?>
                                    <td><?= $produto["carga_estatica"] ?></td>
                                <?php endif; ?> 
                            </tr>    
                        </table>
                    </div>
                    <details open>
                        <summary>Descrição</summary>
                        <p><?=$produto["descricao"];?></p>
                    </details>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
    let slideIndex = 1;
    showSlides(slideIndex);
    
    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("demo");
      let captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    } 
    </script>

<?php require_once("../repetidores/faleconosco.php");?>
<?php require_once("../repetidores/footer.php");?>