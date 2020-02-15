<?php
namespace app\admin\controller;
 class index extends Menu{
     function index(){
         return $this->fetch('index');
     }
     function header(){
        return $this->fetch('header');
     }
     function section(){
        return $this->fetch('section');
     }
     function menu(){
         return $this->fetch('menu');
     }
 }
?>