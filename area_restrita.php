<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}

// Exibir informações da área restrita
echo "Bem-vindo, " . $_SESSION['nome'] . "!<br>";
echo "<a href='logout.php'>Sair</a>";
?>
