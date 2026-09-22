<?php
require_once 'Calculadora.php';
require_once 'ObjetoMensagem.php';
$acao = $_GET['acao'] ?? 'inicio';
if ($acao === 'somar') {

    $a = $_GET['a'] ?? 0;
    $b = $_GET['b'] ?? 0;

    $calc = new Calculadora();
    echo "<h1>Resultado da Soma: " . $calc->somar($a, $b) . "</h1>";

} elseif ($acao === 'multiplicar') {

    $a = $_GET['a'] ?? 0;
    $b = $_GET['b'] ?? 0;

    $calc = new Calculadora();
    echo "<h1>Resultado da Multiplicação: " . $calc->multiplicar($a, $b) . "</h1>";

} elseif ($acao === 'criar-objeto') {

    $nome = $_GET['nome'] ?? 'Objeto Padrão';

    $obj = new ObjetoMensagem($nome);
    echo "<h1>" . $obj->criar() . "</h1>";

} elseif ($acao === 'inicio') {

    echo "<h1>Sistema Tradicional Centralizado</h1>";
    echo "<p>Use os parâmetros na URL para testar:</p>";
    echo "<ul>";
    echo "<li>?acao=somar&a=10&b=5</li>";
    echo "<li>?acao=multiplicar&a=4&b=3</li>";
    echo "<li>?acao=criar-objeto&nome=Cadeira</li>";
    echo "</ul>";

} else {

    http_response_code(404);
    echo "<h1>404 - Ação não encontrada!</h1>";
}