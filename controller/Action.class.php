<?php 

//控制器基类
//属性或者方法只会让子类调用，所以属性都为protected;
class Action{
    protected $tpl = null;


    protected function __construct(){
        $this->tpl = TPL::getInstance();
    }


    


}





 ?>