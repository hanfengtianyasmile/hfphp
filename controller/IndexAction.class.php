<?php 

class IndexAction extends Action{
    
    private $test;

    public function __construct(){
        parent::__construct();
        $this->test = new testModel();
    }

    public function index(){
        
        
        $fields = array('id','name');
        var_dump($this->test->select($fields));
        // $this->tpl->display(SMARTY_FRONT.'index/index.html');
    }


    

    



    

}









 ?>