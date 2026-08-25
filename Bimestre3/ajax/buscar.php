<?php

$termo = $_GET['busca'];
if(trim($termo) === ''){
    print "Digite um nome para buscar";
    exit;
}
$usuarios = ["Victor Jesus", "Pietro Moro", "Omar Tehcin"];
$encontrados = array_filter($usuarios, function($nome) use ($termo){
    return stripos($termo, $nome) !== false;
});
if (count($encontrados) > 0) {
    print "<ul>";
    foreach($encontrados as $nome){
        print "<li>" . $nome . "</li>";
    }
    print "</ul>";
}else{
    print "Nenhum resultado encontrado";
}


?>
