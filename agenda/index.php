<?php
include 'conexao.php';
$result = mysqli_query($con, "SELECT * FROM contatos");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Agenda de Contatos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Agenda de Contatos</h1>
    <a href="adicionar.php">Novo Contato</a>

    <table>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $row['nome'] ?></td>
            <td><?= $row['telefone'] ?></td>
            <td><?= $row['email'] ?></td>
            <td>
                <a href="editar.php?id=<?= $row['id'] ?>">Editar</a>
                <a href="excluir.php?id=<?= $row['id'] ?>" onclick="return confirm('Excluir?')">Excluir</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>