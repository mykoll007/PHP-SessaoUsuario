<?php
require_once 'DatabaseRepository.php';

$id = $_GET['id'];
DatabaseRepository::deleteContact($id);
header('Location: list_contact.php');
exit;



?>