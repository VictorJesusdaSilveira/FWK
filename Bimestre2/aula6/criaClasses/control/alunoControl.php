    <?php
    require_once('../model/aluno.php');
    class AlunoControl {
        private $obj;
        private $dao;
        private $acao;
        public function __construct(){
            $this->obj = new Aluno();
            $this->acao = $_REQUEST["acao"];
            $this->executaAcao();
        }
        public function executaAcao(){
        $this->prepararObjeto();
        }
        public function prepararObjeto(){
            $this->obj->setNome($_POST["nome"]);
	$this->obj->setNascimento($_POST["nascimento"]);
	$this->obj->setCurso($_POST["curso"]);
	
        }
    }
    new AlunoControl;
    ?>