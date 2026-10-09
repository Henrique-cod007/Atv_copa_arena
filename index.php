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
    $telefone_whatsApp = $_POST["tele_zap"];
    $usu_discord = $_POST["usu_discord"];
    $cidade = $_POST["cidade"];
    $plataforma = $_POST["plataforma"];
    $jogo = $_POST["jogo"];
    if( $nickname === "" || $nome === "" || $email === "" || $telefone_whatsApp === "" || $usu_discord === "" || $cidade === "" || $plataforma === "" || $jogo === "" ){
        $mensagem = "prencha todos os campos";
    }else{
        $sql = "INSERT INTO jogadores (nickname,nome, email,telefone_whatsApp,usu_discord, cidade, plataforma,jogo) VALUES($nickname,$nome,$email,$telefone_whatsApp,$cidade,$plataforma,$jogo)";
        $conexao->query($sql);
        $mensagem = "cadastro feito com sucesso";
        $nickname = "";
        $nome = "";
        $email = "";
        $telefone_whatsApp =  (int) 0;
        $usu_discord = "";
        $cidade = "";
        $plataforma = "";
        $jogo = "";
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
    #formu{
        background-color: rgb(137, 137, 235);
        width: 400px;
        height: 400px;
        text-align: center;
        padding: 20px;
        border-radius: 20px;
        margin: auto;
    }
    #selct_01{
        background-color: rgb(179, 179, 205);
        width: 300px;
        height: 30px;
        border: none;
        margin: 5px;
        border-radius: 20px 10px;
        padding: 5px;
    }
    button{
        margin-top: 20px;
        width: 100px;
        border-radius: 10px;
        border: none;
    }

</style>
<body>
    <div id="formu">
    <form action="index.php" method="POST">
        <input type="text" name="nickname" placeholder="nickname" id="selct_01"><br>

        <input type="email" name="email" placeholder="email" id="selct_01"><br>

        <input type="number" name="telefone_whatsApp" placeholder="telefone_whatsApp" id="selct_01"><br>

        <input type="text" name="usu_discord" placeholder="usuário discord" id="selct_01"><br>

        <input type="text" name="cidade" placeholder="cidade" id="selct_01"><br>

        <select name="plataforma" id="selct_01">
                <option value="disabled select"> selecione a plataforma</option>
                <option value="PC">PC</option>
                <option value="console">console</option>
                <option value="celular">celular</option>
        </select><br>

        <select name="jogo" id="selct_01">
            <option value="disabled select"> selecione jogo</option>
            <option value="valorant">valorant</option>
            <option value="league of legend">league of legend</option>
            <option value="EA FC">EA FC</option>
        </select><br>

        <button type="submit">enviar</button>
    </form>
    </div>
</body>
</html>