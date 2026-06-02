<?php
require_once ("utils.php");
class ClassesView{
private $entidades;
    function __construct($e) {
        if (!is_dir("view")) {
            mkdir("view", 0777, true);
        }
        $this->entidades = $e;
        $this->criaClasses();
    }
    function criaClasses() {
            $util = new Utils();
            $listaEntidades = array_keys($this->entidades);
            foreach ($listaEntidades as $entidade) {
                $listaAtributos = $this->entidades[$entidade];
                $campos = "";
                foreach ($listaAtributos as $key => $atributo) {
                    $tipoForm = $util->converterTipoPHPForm($atributo["tipo"]);
                    $campos .= "<label for=\"$key\">$key</label>";
                    $campos .= "<input type='" . $tipoForm . " name='" . $key . ">";

                }
                $conteudo = <<<FORM
                <html>
                    <head>
                        <tittle>Cadastro</tittle>
                        <link></link>
                    </head>
                    <body>
                        <form action="" method="">
                            $campos
                            <button>Salvar</button
                        </form>
                    </body
                </html>
                FORM;
                file_put_contents("view/form" . $entidade . ".php", $conteudo);
        }
    }
}
?>
