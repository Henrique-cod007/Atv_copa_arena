<?php
include "conexao.php";

$nickname = "";
$nome = "";
$email = "";
$telefone_whatsApp =  (int) 0;
$usu_discord = "";
$cidade = "";
$plataforma = "";
$jogo = "";

$mensagem = "";

 if($_SERVER["REQUEST_METHOD"] === "POST"){
    $nickname = $_POST["nickname"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone_whatsApp = $_POST["telefone_whatsApp"];
    $usu_discord = $_POST["usu_discord"];
    $cidade = $_POST["cidade"];
    $plataforma = $_POST["plataforma"];
    $jogo = $_POST["jogo"];
    if( $nickname === "" || $nome === "" || $email === "" || $telefone_whatsApp === "" || $usu_discord === "" || $cidade === "" || $plataforma === "" || $jogo === "" ){
        $mensagem = "prencha todos os campos";
    }else{
        $sql = "INSERT INTO jogadores
    (nickname,nome,email,telefone_whatsApp,usu_discord,cidade,plataforma,jogo)
    VALUES('$nickname','$nome','$email','$telefone_whatsApp','$usu_discord','$cidade','$plataforma','$jogo')";
    $conexao->query($sql);
    $mensagem = "cadastro feito com sucesso";
    if($conexao->query($sql)){
    header("Location: index.php");
    exit();
}
    }
 }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>copa arena</title>
</head>
<style>
    body{
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://afroreggae.org/wp-content/uploads/2024/04/copaafg02.jpeg");
        background-color: rgba(31, 31, 31, 0.42);
        height: 100vh;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    #formu{
        background-color: rgba(7, 7, 7, 0.7);
        color: white;
        position: absolute;
        width: 400px;
        height: 710px;
        text-align: center;
        padding: 30px ;
        padding-bottom: 40px;
        border-radius: 20px;
        margin: auto;

        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

    }
    .selct_01{
        /* background-color: rgb(179, 179, 205); */
        background: none;
        border: none;
        border-bottom: 2px solid rgb(95, 46, 175) ;
        color: rgb(173, 169, 169);
        width: 350px;
        height: 30px;
        outline: none;

        margin: 12px;
        padding: 5px;
    }
    button{
        margin-top: 20px;
        width: 100px;
        border-radius: 10px;
        border: none;
    }
    fieldset{
         border: 3px solid rgb(95, 46, 175)  ;
         border-radius: 10px;
         
    }
    legend{
        border: 2px solid rgb(95, 46, 175) ;
        padding: 5px;
        text-align: center;
    }
    .label_div{
        position: relative;
        width: 300px;
    }
    .labelInput{
        position: absolute;
        top: 20px;
        left:10px;
        pointer-events: none;
        transition: .5s;
    }
    .selct_01:focus~.labelInput,
    .selct_01:valid~.labelInput
    {
        top: -3px;
        font-size:12px ;
        color: rgb(121, 121, 121) ;

    }
    button{
        padding: 5px;
        margin-bottom: 5px;
        border: 2px solid rgb(68, 29, 131);
        background: none;
        color: white;
    }


</style>
<body>
    <div id="formu">
        
        <fieldset>
        <legend>Inscrição jogadores</legend>
    <form action="index.php" method="POST">

        <div class="label_div">
        <input type="text" name="nickname"  class="selct_01" required> 
        <label for="nickname" class="labelInput">Nickname</label>
        </div><br>

        <div class="label_div">
        <input type="text" name="nome"  class="selct_01" required>
        <label for="name" class="labelInput" required>Nome</label>
        </div><br>

        <div class="label_div">
        <input type="email" name="email"  class="selct_01" required>
        <label for="email" class="labelInput" required>Email</label>
        </div><br>

        <div class="label_div">
        <input type="number" name="telefone_whatsApp" class="selct_01" required>
        <label for="telefone_whatsApp" class="labelInput">Telefone/whatsApp</label>
        </div><br>
        
        <div class="label_div">
        <input type="text" name="usu_discord"  class="selct_01" required>
        <label for="usu_discord" class="labelInput">Usuário discord</label>
        </div><br>

        <div class="label_div">
        <input type="text" name="cidade"  class="selct_01" required>
        <label for="cidade" class="labelInput">cidade</label>
        </div><br>

        <select name="plataforma" class="selct_01" style="color:white; background-color:rgba(37, 37, 37, 0.5) ;">
                <option value="disabled select"> selecione a plataforma</option>
                <option value="PC">PC</option>
                <option value="console">console</option>
                <option value="celular">celular</option>
        </select><br>

        <select name="jogo" class="selct_01" style="color:white; background-color:rgba(37, 37, 37, 0.5);">
            <option value="disabled select"> selecione jogo</option>
            <option value="valorant">valorant</option>
            <option value="league of legend">league of legend</option>
            <option value="EA FC">EA FC</option>
        </select><br>

        <button type="submit">enviar</button>
        </fieldset>
    </form>
    </div>
    
</body>
</html>