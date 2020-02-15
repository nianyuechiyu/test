<?php
   //创建命名空间
   namespace app\index\controller;
   //引入TP系统预定义类Controller
   use \think\Controller;
   //引入TP系统预定义类Db
   use \think\Db;
   class User extends Controller{
       //登录模板
       function login(){
           return $this->fetch('login');
       }

       //注册模板
       function register(){
           return $this->fetch('register');
       }
   }
?>