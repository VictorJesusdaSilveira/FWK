<?php
require_once ("utils.php");
class ClassesModel{
private $entidades;
    function __construct($e) {
        if (!is_dir("model")) {
            mkdir("model", 0777, true);
        }
        $this->entidades = $e;
        $this->criaFormulario();
    }
    function criaFormulario() {
            $util = new Utils();
            $listaEntidades = array_keys($this->entidades);
            foreach ($listaEntidades as $entidade) {
                $listaAtributos = $this->entidades[$entidade];
                $attr = "";
                $metodos = "";
                $magico = "";
                foreach ($listaAtributos as $key => $atributo) {
                    $tipoPHP = $util->converterTipoPHP($atributo["tipo"]);
                    $attr .= "   private " . $tipoPHP . " $" . $key . ";\n";
                    $metodos .= "function get" . ucfirst($key) . "() : " . $tipoPHP . "{\n";
                    $metodos .= "return \$this->" . $key . ";\n }\n";
                    $metodos .= "function set" . ucfirst($key) . "(\$arg){\n";
                    $metodos .= " \$this->" . $key . "=\$arg;\n }\n";
                    $magico .= "echo \"$key :\".\$this->$key;\n";

                }
                $nomeClasse = ucfirst($entidade);
                $conteudo = <<<CLASS
                <?php
                    class $nomeClasse {
                        $attr
                        $metodos
                        function toString(){
                            $magico
                    }
                        }
                CLASS;
                file_put_contents("model/" . $entidade . ".php", $conteudo);
        }
    }
}
?>
