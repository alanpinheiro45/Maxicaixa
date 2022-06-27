<title>Cadastro De Produtos • Maxicaixa</title>
<?php
require_once("../repetidores/cabecalho.php");
require_once("../repetidores/head.php");
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
            <h1>Cadastro de Produtos</h1>

        <form enctype="multipart/form-data" action="<?=$url?>bd/salvarproduto.php" method="post">

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
                            <option value="1" selected>Caixa Pallet GLT</option>
                            <option value="2">Caixas Vazadas</option>
                            <option value="3">Cestos Expositores</option>
                            <option value="4">Contentor Plástico 40</option>
                            <option value="5">Estrados</option>
                            <option value="6">Gaveteiros BIN</option>
                            <option value="7">Linha 1000</option>
                            <option value="8">Linha RKLT</option>
                            <option value="9">Linha Flex ALC</option>
                            <option value="10">Pallets</option>
                            <option value="11">Estantes</option>
                        </select>
                            <p>Nome do Produto</p>
                        <input name="nome" type="text" placeholder="Digite o nome do produto">
                            <p>Imagem Principal do Produto</p>
                        <input name="img_perfil" type="file">
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
                        <textarea id="sample" class="sun-editor-editable" name="descricao" value="testando" rows="20">Hi</textarea>
                        <textarea id="sample2" class="sun-editor-editable" name="descricao2" value="testando2" rows="20">Hi</textarea>
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
                    </form>
</div>

<?php require_once("../repetidores/footer.php");?>
</body>