<?php 

//根据url地址栏中的a的GET值,实例化对象
class Factory{
    static private $obj = null;

    static public function setAction(){
        $a = self::getA();
        if (!file_exists(ROOT_PATH.'/controller/'.$a.'Action.class.php'))  $a = 'Index';
        //前面已经有了自动加载类，可以直接实例化
        eval('self::$obj = new '.ucfirst($a).'Action');
        return self::$obj;
    }


    static public function getA(){
        if (isset($_GET['a']) && !empty($_GET['a'])) {
            return $_GET['a'];
        }
        return 'Index';
    }

    







}











 ?>