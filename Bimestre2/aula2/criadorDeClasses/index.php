<?php
include ("criadorDeClasses.php");

 function criarClasse(){
    if (!is_dir("model")) {
        mkdir("model" , 0777, true);
    }

    $entidades = buscarTabelas($entidades);
    foreach ($entidades as $e) {
        $listaAtributos = buscarAtributos($entidade);
        $atr = "";
        $metodos = "";

        foreach ($listaAtributos as $atributos) {
            $atr .= "private $" . $atributos . ";\n\t";
            
            $metodos .= "public function get" . ucfirst($atributos) . "() {\n";
            $metodos .= "    return \$this->$atributos;\n}\n\n";
            
            $metodos .= "public function set" . ucfirst($atributos) . "(\$$atributos): self {\n";
            $metodos .= "    \$this->$atributos = \$$atributos;\n    return \$this;\n}\n\n";

        }
        $nomeClasse = ucfirst($entidade);
        $conteudo = <<<CLASS
        <?php
        class $nomeClasse {
        $atr
        $metodos
        CLASS;

        file_put_contents("model/" . $entidade . ".php", $conteudo);
        
    }
 }

 ?>
