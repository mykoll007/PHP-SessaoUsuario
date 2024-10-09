<?php
require_once '../DatabaseRepository.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    DatabaseRepository::insertContact($nome, $telefone, $email);
    header('Location: list_contact.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Contato</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Adicionar Contato</h1>

    <form action="add_contact.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        
        <button type="submit">Adicionar</button>
    </form>

    <a href="list_contact.php">Voltar para a lista de contatos</a>
</body>
</html>
