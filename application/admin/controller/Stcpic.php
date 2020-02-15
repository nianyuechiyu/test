<?php
namespace app\admin\controller;
define('ROOTPATH', __DIR__.'/../../../');
use \think\Db;
 class stcpic extends Menu{
     function __construct(){
         parent::__construct();
        //  $res= Db::name('li_config')->select();
        //  var_dump($res);
     }

     function getimg(){
        //接收多媒体数据
        $img = $this->request->file('file');
        //dump($img);  
        $upload_path = str_replace('\\', '/', ROOTPATH . 'public/static/imgtpl');
        // echo $upload_path;
        $save_path   = '/imgtpl/';
        $info = $img->move($upload_path);   
        if( $info ){
         $filename = str_replace('\\', '/', $save_path .  $info->getSaveName()); 
         echo "<script>parent.layer.msg('上传成功',{icon:1, time:3000}); parent.showImg('{$filename}');</script>"; 
        } 
     }
    
     

 }
?>