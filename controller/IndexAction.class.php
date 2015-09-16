<?php 

class IndexAction extends Action{
    

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $test = new testModel();
        $data['name'] = 'li';
        $data['password'] = Tool::pass('1234');
        echo $test->add($data);
        // $this->tpl->display(SMARTY_FRONT.'index/index.html');
    }

    

    



    

}









 ?>