<?php
$id = $_GET['a'];
$link = mysqli_connect("localhost", "root", "", "questionario");
$sql = "SELECT * FROM questoes WHERE id = $id";
$result = mysqli_query($link, $sql);

if($result->num_rows >0) {
    $data = $result-> fetch_assoc();
$id = $data['id'];
$name = $data['texto'];
}

?>

<html>    
<body style="background-color:lightblue;" >
    <h2 style="color:black;background-color:lightblue;">Adicionar questões ao sistema: </h2>
    <form method="POST" action="updatequestoes.php">
        <label for="nome">Informe a questão correta</label>
        
        <input type="text" name="item" id="name" value='<?php echo $name ?>'>
        <input type="hidden" name="id" id="name" value='<?php echo $id ?>'>
        <button type="submit"> Salvar </button>
    </form>
    <br><button><a href="crudquestoes.php">Voltar</a></button>
</body>
</html>
