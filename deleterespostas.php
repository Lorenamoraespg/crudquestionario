
<?php
$id = $_GET['a'];

$link = mysqli_connect("localhost", "root", "", "questionario");

$sql = "DELETE FROM alternativas  WHERE id = '$id'";

if ($link->query($sql) === TRUE) {
    header('Location:crudresposta.php');
} else {
    echo "Error: " . $sql . "<br>" . $sql->error;
}



?>