<?php
require_once __DIR__ . '/../config/database.php';

function autenticarUsuario($email, $senha)
{
    global $apiKey;

    $url = 'https://identitytoolkit.googleapis.com/v1/accounts:signInWithPassword?key=' . $apiKey;

    $dados = [
        'email' => $email,
        'password' => $senha,
        'returnSecureToken' => true,
    ];

    $opcoes = [
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/json\r\n",
            'content' => json_encode($dados),
            'ignore_errors' => true,
        ],
    ];

    $resposta = file_get_contents($url, false, stream_context_create($opcoes));
    $resultado = json_decode($resposta, true);

    return isset($resultado['idToken']) ? $resultado : false;
}
