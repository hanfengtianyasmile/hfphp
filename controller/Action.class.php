<?php 

//控制器基类
//属性或者方法只会让子类调用，所以属性都为protected;
class Action{
    protected $tpl = null;
    protected $model = null;
    protected $redirect = null;


    protected function __construct(){
        $this->tpl = TPL::getInstance();
        $this->model = Factory::setModel();
        $this->redirect = Redirect::getInstance();
    }

    public function run(){
        $m = isset($_GET['m']) ? $_GET['m'] : 'index';
        method_exists($this, $m) ? eval('$this->'.$m.'();') : $this->index();
    }





    


}





 ?>