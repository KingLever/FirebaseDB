<?php
require_once __DIR__ . '/../model/firebase.php';

function realizarLogin()
{
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $senha === '') {
        return 'Informe um e-mail e uma senha válidos.';
    }

    $resultado = autenticarUsuario($email, $senha);
    if ($resultado === false) {
        return 'Não foi possível realizar o login. Verifique os dados.';
    }

    header('Location: index.php?acao=home');
    exit;
}
