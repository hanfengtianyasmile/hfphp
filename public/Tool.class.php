<?php 


class Tool{

    //密码加密
    static public function pass($pass){
        return md5(crypt($pass,substr($pass,0,2)));
    }



    //alert弹出函数
    static public function alert($str){
        echo "<script type='text/javascript'>alert('$str');</script>";
    }
    


}


















 ?>