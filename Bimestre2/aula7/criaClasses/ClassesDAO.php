<?php
require_once ("utils.php");
class ClassesDAO{
private $entidades;
private $caminho = "sistema/dao/";
    function __construct($e) {
        if (!is_dir($this->caminho)) {
              mkdir($this->caminho, 0777, true);
        }
        $this->entidades = $e;
        $this->criaClasse();
    }
    function criaClasse() {
            $util = new Utils();
            $listaEntidades = array_keys($this->entidades);
            foreach ($listaEntidades as $entidade) {
                $listaAtributos = $this->entidades[$entidade];
                $bindings = "";
                $atributos = "";
                $placeholders = "";
                $i = 1;
                foreach ($listaAtributos as $key => $atributo) {
                    if(!$atributo["primary"]){
                        $bindings .= "\$stmt->bindingValue($i, \$obj->get" . ucfirst($key) . "()); \n\t\t";
                        $atributos .= $key . ",";
                        $placeholders .= "?,";
                        $i++;
                    }
                    
               }
                $atributos = substr($atributos, 0, -1);
                $placeholders = substr($placeholders, 0, -1);

                $nomeClasse=ucfirst($entidade);
                $conteudo = <<<CLASS
                <?php
                require_once("../model/{$entidade}.php");
                require_once("../dao]conexao.php");
                class {$nomeClasse}DAO
                {
                    private PDO \$conexao;
                    public function __construct()
                    {
                        \$this->conexao = Conexao::getConectar();
                    }
                    public function inserir($nomeClasse \$objeto): bool
                    {
                        try {
                            \$sql="insert into {$entidade} ($atributos) values ($placeholders)";
                            \$stmt=\$this->conexao->prepare(\$sql);
                            $bindings
                            \$stmt->execute();
                            
                        }catch(PDOException \$e){
                            print \$e->getMessage();
                    }
                    public function alterar($nomeClasse \$objeto): bool
                    {
                        // Implementar
                    }
                    public function excluir(int \$id): bool
                    {
                        // Implementar
                    }
                    public function buscarPorId(int \$id): ?$nomeClasse
                    {
                        // Implementar
                    }
                    public function listar(): array
                    {
                        // Implementar
                    }
                    private function montarObjeto(array \$dados): $nomeClasse
                    {
                        // Implementar
                    }
                }
                ?>
                CLASS;
                file_put_contents("{$this->caminho}{$entidade}DAO.php", $conteudo);
        }
    }
}
?>