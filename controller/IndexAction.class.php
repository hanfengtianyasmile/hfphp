<?php 

class IndexAction extends Action{
    

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->tpl->display(SMARTY_FRONT.'index/index.html');
    }

    

}









 ?>