<?php
$item = $_POST['item'];

$link = mysqli_connect("localhost", "root", "", "questionario");

$sql = "INSERT INTO questoes (texto) VALUES ('$item')";

if ($link->query($sql) === TRUE) {
    header('Location:crudquestoes.php');
} else {
    echo "Error: " . $sql . "<br>" . $sql->error;
}



?>