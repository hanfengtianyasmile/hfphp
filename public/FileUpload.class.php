<?php 

//上传文件类

class FileUpload{

    private $error;         //错误代码
    private $maxsize;     //表单最大值
    private $type;          //类型
    private $typeArr = array('image/jpeg','image/pjpeg','image/png','image/x-png','image/gif');             //类型合集
    private $path;          //目录路径
    private $today;        //今天
    private $name;        //文件名
    private $linkpath;     //链接路径
    private $linktotay;   //今天的目录

    private $flag = true;         //用来判断文件上传是否出错

    //构造方法，初始化
    public function __construct($file,$maxsize){
        $this->error = $_FILES[$file]['error'];
        $this->maxsize = $maxsize/1024;
        $this->type = $_FILES[$file]['type'];
        $this->path = ROOT_PATH.'/'.UPDIR;
        $this->totay = date('Ymd').'/';
        $this->linktotay = $this->path.$this->totay;
        $this->name = $_FILES[$file]['name'];
        $this->tmp = $_FILES[$file]['tmp_name'];
        $this->checkError();
        $this->checkType();
        $this->checkPath();
        $this->moveUpload();

    }

    //移动文件
    private function moveUpload(){
        if ($this->flag) {
            if (is_uploaded_file($this->tmp)) {
                if (!move_uploaded_file($this->tmp, $this->setNewLink())) {
                    Tool::alert('警告：上传失败！');
                } 
            } else {
                Tool::alert('警告：临时文件不存在！');
            }
        }
        
    }


    //设置新文件名称
    private function setNewLink(){
        if ($this->flag) {
            $nameArr = explode('.',$this->name);
            $postFix = $nameArr[count($nameArr)-1];
            $newName = date('YmdHis').mt_rand(100,1000).'.'.$postFix;
            $this->linkpath = UPDIR.$this->totay.$newName;
            return $this->linktotay.$newName;
        }
        



    }

    //检验目录
    private function checkPath(){
        if ($this->flag) {
            if (!is_dir($this->path) || !is_writable($this->path)) {
                if(!mkdir($this->path)){
                    Tool::alert('警告：主目录创建失败！');
                    $this->flag = false;
                }
            }

            if (!is_dir($this->linktotay) || !is_writable($this->linktotay)) {
                if (!mkdir($this->linktotay)) {
                    Tool::alert('警告，子目录创建失败！');
                    $this->flag = false;
                }
            }
        }
        
    }



    //验证错误
    private function checkError(){
        if (!empty($this->error)) {
            switch ($this->error) {
                case 1:
                    Tool::alert('警告：上传值超过了服务器限定最大值!');
                    $this->flag = false;
                    break;

                case 2:
                    Tool::alert('警告：上传值超过了'.$this->maxsize.'!');
                    $this->flag = false;
                    break;

                case 3:
                    Tool::alert('警告：只有部分文件被上传！');
                    $this->flag = false;
                    break;

                case 4:
                    Tool::alert('警告：没有任何文件被上传！');
                    $this->flag = false;
                    break;
                default:
                    Tool::alert("警告：未知错误！");
                    $this->flag = false;
            }
        }
    }

    //验证类型
    private function checkType(){
        if (!in_array($this->type,$this->typeArr)) {
            Tool::alert('警告，不合法的上传类型');
            $this->flag = false;
        }
    }


    //返回路径
    public function getPath() {
        if ($this->flag) {
            $path = $_SERVER["SCRIPT_NAME"];
            $dir = dirname(dirname($path));
            if ($dir == '\\') $dir = '/';
            $this->linkpath = $dir.$this->linkpath;
            return $this->linkpath;
        } else {
            return '文件未正确上传，无法获得返回路径！';
        }
        
    }






}



























 ?>