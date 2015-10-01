<?php 

class IndexAction extends Action{
    
    private $test;

    public function __construct(){
        parent::__construct();
        $this->test = new testModel();
    }

    public function upload(){




        $fileupload = new FileUpload('pic',400);
        
        echo $fileupload->getPath();
        
    }

    public function index(){
        echo ROOT_PATH.'/code.jpeg';
        $img = new Image('/code.jpeg');
        $img->thumb(100,200);
        $img->out();
    }

    


    

    



    

}









 ?>