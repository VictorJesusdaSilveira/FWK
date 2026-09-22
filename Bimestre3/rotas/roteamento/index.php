<?php

require_once("Calculadora.php");
require_once("ObjetoMensagem.php");

$url = $_GET["url"];

switch ($url) {
    case "somar":
        $calc = new Calculadora();
        $a = $_GET["a"] ?? 0;
        $b = $_GET["b"] ?? 0;
        print "Resultado da soma: " . $calc->somar($a, $b);
        break;

    case "subtrair":
        $calc = new Calculadora();
        $a = $_GET["a"] ?? 0;
        $b = $_GET["b"] ?? 0;
        print "Resultado da subtração: " . $calc->subtrair($a, $b);
        break;

    case "multiplicar":
        $calc = new Calculadora();
        $a = $_GET["a"] ?? 0;
        $b = $_GET["b"] ?? 0;
        print "Resultado da multiplicação: " . $calc->multiplicar($a, $b);
        break;

    case "dividir":
        $calc = new Calculadora();
        $a = $_GET["a"] ?? 0;
        $b = $_GET["b"] ?? 0;
        print "Resultado da divisão: " . $calc->dividir($a, $b);
        break;
    
    case "criar-objeto":
        $nome = $_GET["nome"] ?? "Objeto padrão";
        $obj = new ObjetoMensagem($nome);
        print "<h1>" . $obj->criar() . "</h1>";
        break;
}
