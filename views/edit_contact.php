<?php
require_once '../DatabaseRepository.php';
$id = $_GET['id'];
$contact = DatabaseRepository::getContactById($id);


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    DatabaseRepository::updateContact($id, $nome, $telefone , $email);
    header('Location: list_contact.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contato</title>
</head>
<body>
    <h1>Adicionar Contato</h1>

    <form action="edit_contact.php?id=<?= $contact['id'];?>" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?= $contact['nome'];?>"  required>
        <br>
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="<?= $contact['telefone'];?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $contact['email'];?>" required>
        <br>
        
        <button type="submit">Editar</button>
    </form>

    <a href="list_contact.php">Voltar para a lista de contatos</a>
</body>
</html>