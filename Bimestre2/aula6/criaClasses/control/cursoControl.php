    <?php
    require_once('../model/curso.php');
    class CursoControl {
        private $obj;
        private $dao;
        private $acao;
        public function __construct(){
            $this->obj = new Curso();
            $this->acao = $_REQUEST["acao"];
            $this->executaAcao();
        }
        public function executaAcao(){
        $this->prepararObjeto();
        }
        public function prepararObjeto(){
            $this->obj->setNome($_POST["nome"]);
	$this->obj->setDuracao($_POST["duracao"]);
	
        }
    }
    new CursoControl;
    ?>