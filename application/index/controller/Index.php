<?php
   //创建命名空间
   namespace app\index\controller;
   //引入TP系统预定义类Controller
   use \think\Controller;
   //引入TP系统预定义类Db
   use \think\Db;
   class Index extends Controller{
       //显示主页模板
       function index(){
           return $this->fetch('index');
       }

   }
?>