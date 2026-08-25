<?php

$termo = $_GET['busca'];
if(trim($termo) === ''){
    print "Digite um nome para buscar";
    exit;
}
$usuarios = ["Victor Jesus", "Pietro Moro", "Omar Tehcin"];
$encontrados = array_filter($usuarios, function($nome) use ($termo){
    return stripos($termo, $nome) !== false;
})


?>
