<html>
<head>
<title>Gerenciador de Questões</title>
</head>
<body>
<button> <a href="index.php">Página Inicial </a> </button>
<button> <a href="crudquestoes.php">Gerenciamento de questoes </a> </button>
<button> <a href="crudresposta.php">Gerenciamento de Respostas </a> </button>
<button> <a href="gabarito.php">Gabarito </a> </button>
<body style="background-color:lightblue;" >
<h2> Gerenciador de Questões </h2>
<?php
$link = mysqli_connect("localhost", "root", "", "questionario");
$sql = "SELECT * FROM questoes ORDER BY id";
$result = mysqli_query($link, $sql);
if ($result) {
while ($row = mysqli_fetch_assoc($result)) {
echo  $row["texto"]." <a href=\"deletequestoes.php?a=".$row["id"]."\"><button> REMOVE </button></a>" . "<a href='updateformquestoes.php?a=".$row["id"]."'><button> ATUALIZAR </button> </a><br>";
}
}
?>

</body>
<br>
<h2> Adicionar Questões: </h2>
<form method="POST" action="insertpergunta.php">
        <label for="nome">Insira o numero da Questão e o texto da questão: (Ex: 21 - Informe ...)</label>
        <input name="item" id="texto" type="text"> <br><br>
        <button type="submit"> Salvar </button>
    </form>
    <br><button> <a href="index.php">Voltar ao Inicio</a></button>
</html>
