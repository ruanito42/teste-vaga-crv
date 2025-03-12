<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = filter_var($_POST['nome'], FILTER_SANITIZE_SPECIAL_CHARS);
    $telefone = filter_var($_POST['telefone'], FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    mysqli_query($con, "INSERT INTO contatos (nome, telefone, email) VALUES ('$nome', '$telefone', '$email')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Contato</title>
    <script src="js/validacao.js"></script>
</head>
<body>
    <h1>Novo Contato</h1>
    <form method="POST" onsubmit="return validarForm()">
        <input type="text" name="nome" id="nome" placeholder="Nome">
        <input type="text" name="telefone" id="telefone" placeholder="Telefone">
        <input type="email" name="email" id="email" placeholder="Email">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>