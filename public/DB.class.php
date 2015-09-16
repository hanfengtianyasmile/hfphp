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
            $this->pdo = new PDO(DB_DNS, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES '.DB_CHARSET));
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }


    //增加
    protected function addDB($tables,Array $data){
        $addFileds = array_keys($data);
        $addValues = array_values($data);

        $addFileds = implode(',',$addFileds);
        $addValues = implode("','", $addValues);

        $sql = "INSERT INTO $tables[0] ($addFileds) VALUES ('$addValues');";

        return $this->execute($sql)->rowCount();
     
    }


    //执行SQL语句
    private function execute($sql){
        try {
            $res = $this->pdo->prepare($sql);
            $res->execute();
        } catch (PDOException $e) {
            exit('SQL语句:'.$sql.'错误，错误信息是:'.$e->getMessage());
        }
        return $res;
    }
    



}










 ?>