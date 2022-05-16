<?php var_dump($_POST); ?>

<?php
    require_once("conexao.php");
    
    try{
        $resultados=$PDO->query("SELECT * FROM usuario WHERE email = '$_POST[email]' AND senha = '$_POST[senha]'", PDO::FETCH_ASSOC);

        if($resultados == false){
            echo("Erro ao consultar os dados");
            exit();
        }
        var_dump($resultados->fetch());

    }catch(Exception $e){
        echo("Erro na consulta".$e->getMessage());
    }
    

?>