
<?php
$id = $_GET['a'];

$link = mysqli_connect("localhost", "root", "", "questionario");

$sql = "DELETE FROM questoes  WHERE id = '$id'";

if ($link->query($sql) === TRUE) {
    header('Location:crudquestoes.php');
} else {
    echo "Error: " . $sql . "<br>" . $sql->error;
}



?>