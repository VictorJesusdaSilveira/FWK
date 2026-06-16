    <?php
    require_once('../model/professor.php');
    class ProfessorControl {
        private $obj;
        private $dao;
        private $acao;
        public function __construct(){
            $this->obj = new Professor();
            $this->acao = $_REQUEST["acao"];
            $this->executaAcao();
        }
        public function executaAcao(){
        $this->prepararObjeto();
        }
        public function prepararObjeto(){
            $this->obj->setNome($_POST["nome"]);
	$this->obj->setTitulacao($_POST["titulacao"]);
	
        }
    }
    new ProfessorControl;
    ?>