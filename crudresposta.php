<html>
<head>
<title>Gerenciador de Respostas</title>
</head>
<body>
<button> <a href="index.php">Página Inicial </a> </button>
<button> <a href="crudquestoes.php">Gerenciamento de questoes </a> </button>
<button> <a href="crudresposta.php">Gerenciamento de Respostas </a> </button>
<button> <a href="gabarito.php">Gabarito </a> </button>
<body style="background-color:lightblue;" >
<h2> Gerenciador de Respostas </h2>
<?php
$link = mysqli_connect("localhost", "root", "", "questionario");
$sql = "SELECT * FROM alternativas ORDER BY id";
$result = mysqli_query($link, $sql);
if ($result) {
while ($row = mysqli_fetch_assoc($result)) {
echo $row["numero_questao"]. ' - '. $row["texto"]." <a href=\"deleterespostas.php?a=".$row["id"]."\"><button> REMOVE </button></a>" . "<a href='updateformresposta.php?a=".$row["id"]."'><button> ATUALIZAR </button> </a><br>";
}
}
?>

</body>
<br>
<h2> Adicionar Respostas: </h2>
<form method="POST" action="insertresposta.php">
        <label for="nome">Insira a Resposta:</label>
        <input name="item" id="name" type="text"> <br><br>
   
        <label for="nome">Insira o numero da Pergunta Vinculada:</label>
        <input name="numquest" id="name" type="text"> <br><br>

        <label for="nome">Alternativa correta (0), incorreta (1):</label>
        <input name="certo" id="name" type="text"> <br><br>

        <button type="submit"> Salvar </button>
    </form>

    <br><button> <a href="index.php">Voltar ao Inicio</a></button>
</html>
