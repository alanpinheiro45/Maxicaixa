
<?php require_once("../repetidores/head.php");?>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
    <title>Postagem</title>
    <style>
        html, body{
            height:100%
        }
        textarea{
            width: 100%;
            height:100%
        }
    </style>
</head>

<?php require_once("../repetidores/cabecalho.php");?>
    
<body>
    <form enctype="multipart/form-data" action="../bd/salvarblog.php" method="post">
    <div class="resumopost">
        <div class="res">
            <p>Título da Postagem</p>
            <input type="text" name="titulo">
        </div>
        <div class="res">
            <p>Insira uma imagem para a miniatura da postagem</p>
            <input type="file" name="img_miniatura">
        </div>
        <div class="res">
            <p>Insira uma descrição/resumo da postagem</p>
            <input type="text" name="resumo">
        </div>    
    </div>
    <textarea id="sample" class="sun-editor-editable" name="conteudo" value="testando" rows="20">Hi</textarea>
    <input type="submit" name="submit">
    </form>
    <!-- <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/assets/css/suneditor.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/assets/css/suneditor-contents.css" rel="stylesheet"> -->
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

    </script>
    
</body>
</html>