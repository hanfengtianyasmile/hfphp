<?php 

//跳转类



class Redirect{

    //存放实例化的对象
    static private $instance;

 

    //公共静态方法获取实例化的对象
    static public function getInstance(TPL &$tpl = null){
        //判断self::$instance 是否已经被实例化
        if (!self::$instance instanceof self) {
            self::$instance = new self();
            
        }
        return self::$instance;
    }

    //私有克隆，防止被克隆
    private function __clone(){

    }

    //私有构造
    private function __construct(){
       
    }


    //成功跳转
    public function succ($url,$info = ''){
        if (!empty($info)) {
            $this->tpl->assign('message',$info);
            $this->tpl->assign('url',$url);
            $this->tpl->display(SMARTY_FRONT.'public/succ.html');
        } else {
            header('Location:'.$url);
        }
        exit();
    }

    


    



}










 ?>