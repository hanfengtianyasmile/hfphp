<?php 
    
    //开启session
    session_start();

    //错误级别,全部显示
    error_reporting(E_ALL);

    //创建一个实际路径
    define('ROOT_PATH',substr(dirname(__FILE__),0,-8));

    //设置编码
    header('Content-Type:text/html;charset=utf-8');

    //设置时区
    date_default_timezone_set('Asia/Shanghai');

    //引入系统配置文件
    require ROOT_PATH.'/configs/profile.inc.php';

    //引入smarty
    require ROOT_PATH.'/smarty/Smarty.class.php';

    //自动加载类
    function __autoload($className){
        if (substr($className,-6) == 'Action') {
            require ROOT_PATH.'/controller/'.$className.'.class.php';
        } elseif (substr($className,-5) == 'Model'){
            require ROOT_PATH.'/model/'.$className.'.class.php';
        } elseif (substr($className,-6) == 'Check'){
            require ROOT_PATH.'/check/'.$className.'.class.php';
        } else {
            require ROOT_PATH.'/public/'.$className.'.class.php';
        }

    }
    








 ?>