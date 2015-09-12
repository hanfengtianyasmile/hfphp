<?php 

//直接对数据库操作，并且采取单利模式
//只有Model类才能调用DB中的方法，防止被污染


class DB{

    //存放实例化的对象
    static private $instance;

    //PDO对象
    private $pdo = null;

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

    //私有构造
    private function __construct(){
        try {
            $this->_pdo = new PDO(DB_DNS, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES '.DB_CHARSET));
            $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    



}










 ?>