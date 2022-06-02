    <?php require_once("../repetidores/head.php"); ?>
    <title>Faça um Orçamento • Maxicaixa</title>
<body>
    <?php require_once("../repetidores/cabecalho.php"); ?>
    <div class="contato">
        <h1>Contato</h1>
        <p>Ficou com alguma dúvida, ou quer solicitar um orçamento?</p>
        <p>Entre em contato com a Maxicaixa. Nossa equipe está sempre pronta para te atender.</p>
    </div>

    <div class="centralizado">
            <div class="esquerda">
                <?php require("../repetidores/infocontato.php");?>
                <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29469.01056951704!2d-47.45042892267076!3d-22.59307525100835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c62a58f5d38a67%3A0x7c470f437ba77fd0!2sMaxicaixa%20-%20Ind%C3%BAstria%20e%20Com%C3%A9rcio%20de%20Produtos%20Pl%C3%A1sticos.!5e0!3m2!1spt-BR!2sbr!4v1638399536595!5m2!1spt-BR!2sbr" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <button>
                    <a href="https://ul.waze.com/ul?preview_venue_id=204801574.2048146811.5706899&navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location" target="_blank">
                    <p>NOS ENCONTRE PELO WAZE<i class="fa-brands fa-waze"></i></p>
                    </a></button>
                </div>
            </div><div class="direita">
            <form>
                    <input name="name" type="text" placeholder="Digite seu nome">
                    <input name="email" type="email" placeholder="E-mail">
                    <input name="phone"type="text" placeholder="Telefone">
                    <textarea name="interest" placeholder="Mensagem" rows="8"></textarea>
                    <input name="city" type="text" placeholder="Cidade">
                    <p>Estado:</p>
                    <select id="estado" name="state">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                        <option value="EX">Estrangeiro</option>
                    </select>
                <input type="submit" value="Enviar">
                </form>
            </div>
    </div>
    
    <?php require_once("../repetidores/blog.php"); ?>
    <?php require_once("../repetidores/footer.php");?>