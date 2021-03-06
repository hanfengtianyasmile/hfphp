<?php 

//单例模式、继承并且配置smarty
//TPL继承smarty
final class TPL extends Smarty{

    //存放实例化的对象
    static private $instance;

    //公共静态方法获取实例化的对象
    static public function getInstance(){
        //判断self::$instance 是否已经被实例化
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    //私有克隆，防止被克隆
    private function __clone(){

    }

    //原smarty中构造方法为pubic,只好改为protected,保证可以被TPL中构造方法调用，但是在TPL中也只能是protected或者public、、、、好像单例模式不能很好地体现出来了。
    protected function __construct(){
        parent::__construct();
        $this->setConfigs();
    }

    //配置smarty
    private function setConfigs(){
        $this->template_dir = SMARTY_TEMPLATE_DIR;
        $this->compile_dir = SMARTY_COMPILE_DIR;
        $this->config_dir = SMARTY_CONFIG_DIR;
        $this->cache_dir = SMARTY_CACHE_DIR;
        $this->caching = SMARTY_CACHING;
        $this->cache_lifetime = SMARTY_CACHE_LIFETIME;
        $this->left_delimiter = SMARTY_LEFT_DELIMITER;
        $this->right_delimiter = SMARTY_RIGHT_DELIMITER;
    }



}




 ?>