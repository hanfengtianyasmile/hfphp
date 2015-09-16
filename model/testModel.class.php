<?php 

/**
* 测试
*/
class testModel extends Model{
    
    public function __construct(){
        parent::__construct();
        $this->tables = array(DB_FREFIX.'test');   //填写表名
        $this->fields = array('id','name','password');  //填写字段名
    }




    public function add($data){
        return parent::addData($data);
    }

    public function update($where,$data){
        return parent::update($where,$data);
    }

    public function select($fields){
        return parent::select($fields);
    }


    
}





 ?>