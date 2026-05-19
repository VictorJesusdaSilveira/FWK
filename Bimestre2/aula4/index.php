<?php
include ("LeitorSQL.php");

 function criarClasse(){
    if (!is_dir("model")) {
        mkdir("model" , 0777, true);
    }

    $objSQL= new LeitorSQL("framework.sql");

    $entidades = $objSQL->getTabelas();
    foreach ($entidades as $e) {
        $listaAtributos = $objSQL->getAtributos($e);
        $atr = "";
        $metodos = "";

        foreach ($listaAtributos as $key => $atributos) {
            $tipoPHP = $objSQL->converterTipoPHP($atributos["tipo"]);
            $atr .= "private " . $tipoPHP . " $" . $key . ";\n\t";
            
            $metodos .= "public function get" . ucfirst($key) . "() : " . $tipoPHP . "{\n";
            $metodos .= "    return \$this->$key;\n}\n\n";
            
            $metodos .= "public function set" . ucfirst($key) . "(\$$key): self {\n";
            $metodos .= "    \$this->$key = \$$key;\n    return \$this;\n}\n\n";

        }
        $nomeClasse = ucfirst($e);
        $conteudo = <<<CLASS
        <?php
        class $nomeClasse {
            $atr
        $metodos
        }
        CLASS;

        file_put_contents("model/" . $e . ".php", $conteudo);
        
    }
 }

 criarClasse();

 ?>
