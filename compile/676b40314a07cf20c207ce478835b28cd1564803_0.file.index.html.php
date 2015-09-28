<?php /* Smarty version 3.1.27, created on 2015-09-28 18:43:07
         compiled from "E:\www\hfphp\view\index\index\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:15283560919bb7b4061_12902726%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '676b40314a07cf20c207ce478835b28cd1564803' => 
    array (
      0 => 'E:\\www\\hfphp\\view\\index\\index\\index.html',
      1 => 1443436981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15283560919bb7b4061_12902726',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560919bb7e6ce8_34935190',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560919bb7e6ce8_34935190')) {
function content_560919bb7e6ce8_34935190 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15283560919bb7b4061_12902726';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>首页</title>
</head>
<body>
    <form action="?a=index&m=upload" method="post"  enctype="multipart/form-data">
        <input type="file" name="pic" />
        <input type="submit" value="上传" name="send" />
    </form>
    
</body>
</html><?php }
}
?>