<?php
    session_start();

    $_SESSION["logado"] = true;
    require_once("conexao.php");
    try{
        $resultLogin=$PDO->query("SELECT * FROM usuario WHERE email = '$_POST[email]' AND senha = '$_POST[senha]'", PDO::FETCH_ASSOC);
        $testelogin = $resultLogin->fetch();
        
        if($resultLogin == false){
            $_SESSION["logado"] = false;
            exit();
        }
  
        $_SESSION["logado"] = true;
        $_SESSION["id"] = $testelogin["id"];
        $_SESSION["nome"] = $testelogin["nome"];

        if($_SESSION["logado"] == true){
            header("Location: ../usuario/menu.php");
        }else{
            header("Location: ../usuario/login.php");}

    }catch(Exception $e){
         echo("Erro na consulta".$e->getMessage());
    }
?>