<?php

//Criação de etiquetas
#[Attribute(Attribute::TARGET_CLASS)]

class Tabela{
    public function __construct(public string $nome){

    }
}

#[Attribute(Attribute::TARGET_PROPERTY)]

class Coluna{
    public function __construct(public ?string $nome) {

    }
}

#[Tabela(nome : "usuarios")]

class Usuario{
    #[Coluna]
    public ?int $id;
    #[Coluna]
    public string $nome;
    #[Coluna]
    public string $email;
}

function pegarNomeTabela(object $objeto):string{
    $espelho = new ReflectionClass($objeto);
    $etiquetas = $espelho->getAttributes(Tabela::class);
    $etiquetaTabela = $etiquetas[0]->newInstance();
    return $etiquetaTabela->nome;
}

$usuario = new Usuario();
$tabela = pegarNomeTabela($usuario);
print "A tabela do Objeto é: " . $tabela;

function pegarDadosDasColunas(object $objeto):array{
    $espelho = new ReflectionClass($objeto);
    $dados = array();
    foreach ($espelho->getProperties() as $propriedade) {
        $etiquetas = $propriedade->getAttributes(Coluna::class);
        if(empty($etiquetas)){
            continue;
        }
        $nomeColuna = $propriedade->getName();
        $valor = $propriedade->getValue($objeto);    
        $dados[$nomeColuna] = $valor;
    }
    return $dados;
}

$usuario->nome = "Asdrubaldo";
$usuario->email = "As@gmail.com";
$colunasValores = pegarDadosDasColunas($usuario);
print "<pre>";
print_r($colunasValores);
print "</pre>";

function gerarSQL(object $objeto):array{
    $tabela = pegarNomeTabela($objeto);
    $dados = pegarDadosDasColunas($objeto);
    $dadosFiltrados = array_filter($dados, fn($v) => $v !== null);
    $colunas = array_keys($dadosFiltrados);
    $stringColunas = implode(", ", $colunas);
    $placeholders = ":" . implode(", :", $colunas);
    $sql = "INSERT INTO {$tabela} ({$stringColunas}) VALUES ({$placeholders})";
    return ["sql "=>$sql, "colunas"=>$dadosFiltrados];
}

?>
