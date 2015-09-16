<?php 

class Model extends DB{

    protected $db = null;
    protected $tables = array();
    protected $fields = array();


    
    protected function __construct(){
        $this->db = parent::getInstance();

    }

    protected function addData(Array $data){
        return $this->db->addDB($this->tables,$data);
    }
    












}













 ?>