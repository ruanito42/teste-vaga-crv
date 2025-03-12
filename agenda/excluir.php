<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($con, "DELETE FROM contatos WHERE id = $id");
    header("Location: index.php");
}
?>