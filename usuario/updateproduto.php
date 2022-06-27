<title>Update De Produtos • Maxicaixa</title>
<?php
require_once("../repetidores/cabecalho.php");
require_once("../repetidores/head.php");
require_once("../bd/conexao.php");


$nomeTitulo = urldecode($_POST["titulo"]);
$resultproduto = $PDO->query("SELECT * FROM produtos WHERE nome = '$nomeTitulo'" , PDO::FETCH_ASSOC);


if($resultproduto != false){
    $produto = $resultproduto->fetch();
}



?>
<link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
<style>
        /* html, body{
            height:100%
        } */
        textarea{
            width: 100%;
        }
    </style></head>
    <body>

<div class="centralizado cd_produtos">
    <h1>Update de Produtos</h1>
        <form enctype="multipart/form-data" action="<?=$url?>bd/editproduto.php" method="post">

                    
                            <p>Selecione o Segmento do Produto</p>
                            
                        <label><input type="checkbox" name="segmentos[0]" value="1">Agronegócio</label> 
                        <label><input type="checkbox" name="segmentos[1]" value="2">Automotiva</label> 
                        <label><input type="checkbox" name="segmentos[2]" value="3">Avícola</label> 
                        <label><input type="checkbox" name="segmentos[3]" value="4">Farmacêutica</label> 
                        <label><input type="checkbox" name="segmentos[4]" value="5">Industrial</label> 
                        <label><input type="checkbox" name="segmentos[5]" value="6">Pescado</label> 
                        <label><input type="checkbox" name="segmentos[6]" value="7">Centros Logísticos e Distribuição</label> 
                            

                            <p>Selecione a Linha do Produto</p>
                        <select name="select">
                            <?php foreach($lprodutos as $item): ?>
                            <option value="<?=$item["id"]?>"<?= ($item["id"] == $produto["id_categoria"])?"selected":"" ?>><?=$item["nome"]?></option>
                            <?php endforeach; ?>
                        </select>
                        <p>Nome do Produto</p>
                        <input name="nome" type="text" value="<?=$produto["nome"]?>">
                            <p>Imagem Principal do Produto</p>
                        <input name="img_perfil" type="file" value="<?=$produto["img_perfil"]?>">
                            <p>Imagem 2 do produto</p>
                        <input name="img_descricao" type="file">
                            <p>Imagem 3 do produto</p>
                        <input name="img3" type="file">
                            <p>Imagem 4 do produto</p>
                        <input name="img4" type="file">
                            <p>Imagem 5 do produto</p>
                        <input name="img5" type="file">
                            <p>Imagem 6 do produto</p>
                        <input name="img6" type="file">
                        
                        <p>Descricao Lateral</p>
                        <textarea id="sample" class="sun-editor-editable" name="descricao" value="testando" rows="20"><?=$produto["descricao"]?></textarea>
                        <textarea id="sample2" class="sun-editor-editable" name="descricao2" value="testando2" rows="20"><?=$produto["descricao2"]?></textarea>
                        <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>
                        <!-- languages (Basic Language: English/en) -->
                        <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/src/lang/pt_br.js"></script>
                        <script>
                            /**
                    * ID : 'suneditor_sample'
                    * ClassName : 'sun-eidtor'
                    */
                    // ID or DOM object
                    const editor = SUNEDITOR.create((document.getElementById('sample') || 'sample'),{
                        // All of the plugins are loaded in the "window.SUNEDITOR" object in dist/suneditor.min.js file
                        // Insert options
                        buttonList: [
                            ['undo', 'redo'],
                            ['font', 'fontSize', 'formatBlock'],
                            ['paragraphStyle', 'blockquote'],
                            ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'],
                            ['fontColor', 'hiliteColor', 'textStyle'],
                            ['removeFormat'],
                            '/', // Line break
                            ['outdent', 'indent'],
                            ['align', 'horizontalRule', 'list', 'lineHeight'],
                            ['image'],
                            ['table', 'link', 'image', 'video', 'audio' /** ,'math' */], // You must add the 'katex' library at options to use the 'math' plugin.
                            /** ['imageGallery'] */ // You must add the "imageGalleryUrl".
                            ['fullScreen', 'showBlocks', 'codeView'],
                            ['preview', 'print'],
                            ['save', 'template'],
                            /** ['dir', 'dir_ltr', 'dir_rtl'] */ // "dir": Toggle text direction, "dir_ltr": Right to Left, "dir_rtl": Left to Right
                        ],
                        // Language global object (default: en)
                        lang: SUNEDITOR_LANG['pt_br']
                    });
                    const editor2 = SUNEDITOR.create((document.getElementById('sample2') || 'sample2'),{
                        // All of the plugins are loaded in the "window.SUNEDITOR" object in dist/suneditor.min.js file
                        // Insert options
                        buttonList: [
                            ['undo', 'redo'],
                            ['font', 'fontSize', 'formatBlock'],
                            ['paragraphStyle', 'blockquote'],
                            ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'],
                            ['fontColor', 'hiliteColor', 'textStyle'],
                            ['removeFormat'],
                            '/', // Line break
                            ['outdent', 'indent'],
                            ['align', 'horizontalRule', 'list', 'lineHeight'],
                            ['image'],
                            ['table', 'link', 'image', 'video', 'audio' /** ,'math' */], // You must add the 'katex' library at options to use the 'math' plugin.
                            /** ['imageGallery'] */ // You must add the "imageGalleryUrl".
                            ['fullScreen', 'showBlocks', 'codeView'],
                            ['preview', 'print'],
                            ['save', 'template'],
                            /** ['dir', 'dir_ltr', 'dir_rtl'] */ // "dir": Toggle text direction, "dir_ltr": Right to Left, "dir_rtl": Left to Right
                        ],
                        // Language global object (default: en)
                        lang: SUNEDITOR_LANG['pt_br']
                    });
                        </script>
                        <input type="submit" value="Enviar">
                        <input type="hidden" name="idproduto" value="<?=$produto["id"]?>">
                    </form>
</div>

<?php require_once("../repetidores/footer.php");?>
                </body>