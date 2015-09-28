<?php 

class IndexAction extends Action{
    
    private $test;

    public function __construct(){
        parent::__construct();
        $this->test = new testModel();
    }

    public function upload(){




        $fileupload = new FileUpload('pic',400);
        
        echo $fileupload->getPath();
        
    }

    public function index(){
        $_path = $_SERVER["SCRIPT_NAME"];
        echo $_path;
        $_dir = dirname($_path);
        echo $_dir;
        $this->tpl->display(SMARTY_FRONT.'index/index.html');
    }

    


    

    



    

}









 ?>