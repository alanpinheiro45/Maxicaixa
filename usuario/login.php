<title>Login • Maxicaixa</title>
<?php
require_once("../repetidores/head.php");
if(isset($_SESSION["logado"])){

    if($_SESSION["logado"] == true){
        header("Location: menu.php");
    }
    
}
require_once("../repetidores/cabecalho.php");


?>

<div class="centralizado login">

    <h1>Login</h1>

    <form action="../bd/logar.php" method="post">
        <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input name="email" type="text" class="form-control" id="staticEmail">
            </div>
        </div>
        <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input name="senha" type="password" class="form-control" id="inputPassword">
            </div>
        </div>
        <input type="submit" class="btn btn-primary">
    </form>

</div>



<?php require_once("../repetidores/footer.php");?>