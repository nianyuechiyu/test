<?php
namespace app\admin\controller;
//加载tp五的DB类;
use think\Db;
class Site extends Menu{
    // 服务器配置
    function index(){
        return $this->fetch('site'); 
    }

    //网站配置
    function https(){
        return $this->fetch('https');
    }

    //网站配置处理
    function getconfig(){
        $res= Db::name('li_config').select();
        var_dump($res);
    }

    // 系统配置
    function xTconfigure(){
        return $this->fetch('xTconfigure');
    }

    // 文章管理
    function article(){
        return $this->fetch('article');
    }

    // 文章管理目录树
    function art_section(){
        return $this->fetch('art_section');
    }
}
?>