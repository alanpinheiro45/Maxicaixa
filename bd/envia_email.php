<?php 

$name = $_POST["name"];
$empresa = $_POST["empresa"];
$cnpj = $_POST["cnpj"];
$email = $_POST["email"];
$telefone = $_POST["phone"];
$linha = $_POST["linha"];
$mensagem = $_POST["interest"];
$cidade = $_POST["city"];
$estado = $_POST["state"];

$arquivo = "
<html>
<table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
    <tr>
        <td>
            <tr>
                <td width='500'>Nome:$name</td>
            </tr>
            <tr>
                <td width='500'>Empresa:$empresa</td>
            </tr>
            <tr>
                <td width='500'>CNPJ:$cnpj</td>
            </tr>
            <tr>
                <td width='320'>E-mail:<b>$email</b></td>
            </tr>
            <tr>
                <td width='320'>Telefone:<b>$telefone</b></td>
            </tr>
            <tr>
                <td width='320'>Linha de interesse:<b>$linha</b></td>
            </tr>
            <tr>
                <td width='320'>Mensagem:<b>$mensagem</b></td>
            </tr>
            <tr>
                <td width='320'>Cidade:$cidade</td>
            </tr>
            <tr>
                <td width='320'>Estado:$estado</td>
            </tr>
        </td>
    </tr>
</table>
</html>
" ;

$emailenviar = "alanzinhopinheiro@gmail.com";
$destino = $emailenviar;
$assunto = "Contato pelo Site";

// É necessário indicar que o formato do e-mail é html
$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: <$nome> <$email>';
//$headers .= "Bcc: $EmailPadrao\r\n";

var_dump($_POST);
$enviaremail = mail($destino, $assunto, $arquivo, $headers);
if($enviaremail){
    require_once("../bd/envio_email_sucesso.php");
} else {
$mgm = "ERRO AO ENVIAR E-MAIL!";
echo "";
}





?>