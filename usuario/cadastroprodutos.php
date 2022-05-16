<?php
require_once("../repetidores/cabecalho.php");
require_once("../repetidores/head.php");
?>

<div class="centralizado cd_produtos">
    <h1>Cadastro de Produtos</h1>
        <form enctype="multipart/form-data" action="<?=$url?>bd/salvarproduto.php" method="post">

                            <p>Selecione a Linha do Produto</p>
                        <select name="select">
                            <option value="1" selected>Caixa Pallet GLT</option>
                            <option value="2">Caixas Vazadas</option>
                            <option value="3">Cestos</option>
                            <option value="4">Contentor Plástico 40</option>
                            <option value="5">Estratos</option>
                            <option value="6">Gaveteiros BIN</option>
                            <option value="7">Linha 1000</option>
                            <option value="8">Linha RKLT</option>
                            <option value="9">Linha Flex ALC</option>
                            <option value="10">Pallets</option>
                        </select>
                            <p>Nome do Produto</p>
                        <input name="nome" type="text" placeholder="Digite o nome do produto">
                            <p>Peso do Produto</p>
                        <input name="peso" type="text" placeholder="Peso">
                            <p>Capacidade e/ou Volume do Produto</p>
                        <input name="capacidade_volume" type="text" placeholder="Capacidade / Volume">
                            <p>Material do Produto</p>
                        <input name="material" type="text" placeholder="Material">
                            <p>Dimensões Externas do Produto</p>
                        <input name="dimensoes_externas" type="text" placeholder="Dimensões Externas">
                            <p>Dimensões Internas do Produto</p>
                        <input name="dimensoes_internas" type="text" placeholder="Dimensões Internas">
                            <p>Imagem Principal do Produto</p>
                        <input name="img_perfil" type="file">
                            <p>Carga Dinâmica do Produto</p>
                        <input name="carga_dinamica" type="text" placeholder="Carga Dinâmica">
                            <p>Carga Estática do Produto</p>
                        <input name="carga_estatica" type="text" placeholder="Carga Estática">
                            <p>Imagem Secundária do Produto</p>
                        <input name="img_descricao" type="file">
                        <input type="submit" value="Enviar">
                    </form>
</div>

<?php require_once("../repetidores/footer.php");?>