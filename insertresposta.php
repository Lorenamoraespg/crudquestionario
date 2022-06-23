<?php
$item = $_POST['item'];
$numeroq = $_POST['numquest'];
$valorresp = $_POST['certo'];

$link = mysqli_connect("localhost", "root", "", "questionario");

$sql = "INSERT INTO alternativas (texto, numero_questao, certo)
VALUES ( '{$item}',
         '{$numeroq}',
         '{$valorresp}')";

if ($link->query($sql) === TRUE) {
    header('Location:crudresposta.php');
} else {
    echo "Error: " . $sql . "<br>" . $sql->error;
}



?>