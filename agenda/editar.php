<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($con, "SELECT * FROM contatos WHERE id = $id");
    $contato = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = filter_var($_POST['nome'], FILTER_SANITIZE_SPECIAL_CHARS);
    $telefone = filter_var($_POST['telefone'], FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    mysqli_query($con, "UPDATE contatos SET nome='$nome', telefone='$telefone', email='$email' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Contato</title>
    <script src="js/validacao.js"></script>
</head>
<body>
    <h1>Editar Contato</h1>
    <form method="POST" onsubmit="return validarForm()">
        <input type="text" name="nome" id="nome" value="<?= $contato['nome'] ?>">
        <input type="text" name="telefone" id="telefone" value="<?= $contato['telefone'] ?>">
        <input type="email" name="email" id="email" value="<?= $contato['email'] ?>">
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>