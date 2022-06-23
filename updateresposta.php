<?php


$item = $_POST['item'];
$idform = $_POST['id'];
$item2 = $_POST['item'];

$link = mysqli_connect("localhost", "root", "", "questionario");
$sql = "UPDATE alternativas set texto ='$item' WHERE id = '$idform'";
$result = mysqli_query($link, $sql);

$link = mysqli_connect("localhost", "root", "", "questionario");
$sql1 = "UPDATE alternativas set numero_questao ='$item2' WHERE id = '$idform'";
$result = mysqli_query($link, $sql1);


if ($link->query($sql) === TRUE) {
    header('Location:crudresposta.php');
} else {

};
$link->close();
if ($link->query($sql1) === TRUE) {
    header('Location:crudresposta.php');
} else {

}
$link->close();
?>