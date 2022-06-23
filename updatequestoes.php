<?php


$item = $_POST['item'];
$idform = $_POST['id'];

$link = mysqli_connect("localhost", "root", "", "questionario");
$sql = "UPDATE questoes set texto ='$item' WHERE id = '$idform'";
$result = mysqli_query($link, $sql);




if ($link->query($sql) === TRUE) {
    header('Location:crudquestoes.php');
} else {

}
$link->close();
?>