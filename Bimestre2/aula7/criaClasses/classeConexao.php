<?php

class ClasseConexao{
    private $caminho = "sistema/model/";
    
    public function __construct($banco , $host){
        $this->criaClasse($banco, $host);
    }

    public function criaClasse($banco, $host){
        $conteudo = <<<CLASS
<?php
class Conexao{
    public static function conectar():PDO{
        try{
            \$host = "$host";
            \$banco = "$banco";
            \$usuario = "root";
            \$senha = "bancodedados";
            \$pdo = new PDO("mysql:host={$host};dbname={$banco};charset=utf8", \$usuario, \$senha);
            return \$pdo;
        }catch(PDOException \$e){
            print \$e->getMessage();
        }
    }

}
?>
CLASS;
    file_put_contents("{$this->caminho}conexao.php", $conteudo);
    }

}

?>