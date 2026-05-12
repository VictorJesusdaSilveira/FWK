<?php
require_once("LeitorSQL.php");

$leitor = new LeitorSQL("framework.sql");

print "<h2>Tabelas</h2>";

print_r($leitor->getTabelas());

print "<hr>";

print "<h2>Atributos de tabela aluno:</h2>";

print_r($leitor->getAtributos("aluno"));

?>
