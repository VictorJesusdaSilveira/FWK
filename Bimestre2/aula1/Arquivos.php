<?php

class Arquivos{
    public $arquivo = "Pessoa.php";
    public $diretorio = "pasta/";


    public function criarArquivo(){
        $nome = "";
        $idade = "";
        $cpf = "";
        $atributos = ["Nome", "Idade", "CPF"];
        $gets = "";
        $sets = "";
        $atr = "";

        foreach ($atributos as $a) {
            $atr .= "public $" . $a . ";\n\t";
            $gets .= "function get" . ucfirst($a) . "() {} \n \t";
            $sets .= "function set" . ucfirst($a) . "() {} \n \t";
        }

        $conteudo = 
        <<<CLASS
        <?php
            class Pessoa {
              $atr;
              $set;
              $get;
            }    

            
        CLASS;
           /* <html>
                <head><tittle>$titulo</tittle></head>
                 <body> 
                    <h1>Título da página</h1>
                    <a href=$url>Acessar página do IFPR</a>
                </body>
            </html>
        HTML;*/
        file_put_contents($this->diretorio . $this->arquivo, $conteudo);
        print "Arquivo criado com sucesso!";
    }

    function criarDiretorio(){
        if(!is_dir($this->diretorio)){
            mkdir($this->diretorio, 0777, true);
        }
    }

    function lerArquivo(){
        $conteudo = file_get_contents($this->diretorio . $this->arquivo);
        print "Conteúdo do arquivo: " . $conteudo;
        print "<hr>" . $conteudo;
    }


}

$arquivo1 = new Arquivos();
$arquivo1->criarDiretorio();
$arquivo1->criarArquivo();
$arquivo1->lerArquivo();
//print __DIR__;




?>
