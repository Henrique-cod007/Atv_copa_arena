<?php 
include "conexao.php";



$resultado = $conexao->query("SELECT * FROM jogadores");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        color: rgb(201, 196, 196);
    }
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://p2.bahamut.com.tw/B/2KU/59/aa2b667c8e8eb3494fe4fee4fd14a4f5.JPG");
        background-color: rgba(31, 31, 31, 0.42);
        height: 100vh;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    table{
        width: 720px;
        border-collapse: collapse;
        margin: auto;
        padding: 10px;
        overflow: hidden;
        border-collapse: collapse;
        border-radius: 15px;
        
        text-align: center;
    }
    tbody>tr:nth-child(2n){
            background-color: rgba(76, 75, 77, 0.64);
    }
    tr{
        background-color:rgb(95, 46, 175) ;
        border: 1px solid black;
        
    }
    th{
        border: 1px solid black;
        padding: 7px;
    }
    td{
        background-color: rgb(68, 29, 131);
        border: 1px solid black;
    }
</style>
<body>
<table>
    <tr>
        <th colspan="7">Incrições copa arena</th>
    </tr>
    <tr>
        <th>id</th>
        <th>nickname</th>
        <th>nome</th>
        <th>email</th>
        <th>discord</th>
        <th>jogo</th>
        <th>plataforma</th>
    </tr>
<?php while($linha = $resultado->fetch_assoc()) { ?>
<tr>
<td><?= $linha["Id"] ?></td>
<td><?= $linha["nickname"] ?></td>
<td><?= $linha["nome"] ?></td>
<td><?= $linha["email"] ?></td>
<td><?= $linha["usu_discord"] ?></td>
<td><?= $linha["plataforma"] ?></td>
<td><?= $linha["jogo"] ?></td>
</tr>
 <?php } ?> 
 
</table>
</body>
</html>

