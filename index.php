<?php
$acao = $_POST['acao'] ?? $_GET['acao'] ?? 'login';

if ($acao === 'login' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'controller/autenticadoController.php';
    $erro = realizarLogin();
    require 'view/login.php';

} elseif ($acao === 'home') {
    require 'view/home.php';

} elseif ($acao === 'sair') {
    header('Location: index.php');
    exit;

} elseif ($acao === 'cadastrar'
        && $_SERVER['REQUEST_METHOD'] === 'GET') {
    require 'view/cadastrar.php';


} else {
    $erro = '';
    require 'view/login.php';
}
