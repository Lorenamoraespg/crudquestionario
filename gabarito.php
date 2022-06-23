<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gabarito</title>
</head>
<body style="background-color:lightblue;" >
<button> <a href="index.php">Página Inicial </a> </button>
<button> <a href="crudquestoes.php">Gerenciamento de questoes </a> </button>
<button> <a href="crudresposta.php">Gerenciamento de Respostas </a> </button>
<button> <a href="gabarito.php">Gabarito </a> </button>
<br>

<h1> Gabarito </h1> <h4>
<?php

$link = mysqli_connect("localhost", "root", "", "questionario");
$sql = "SELECT * FROM alternativas WHERE certo = '0'";
$result = mysqli_query($link, $sql);
if ($result) {
while ($row = mysqli_fetch_assoc($result)) {
echo $row['numero_questao'] . ' - ' . $row['texto'] . '<br>';
}
}
?>