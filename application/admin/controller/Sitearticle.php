<?php
namespace app\admin\controller;
class Sitearticle extends Menu{
        // 文章管理功能显示区
        function art_right(){
            return $this->fetch('art_right');
        }
    
        // 文章管理——添加文章
        function add_article(){
            return $this->fetch('add_article');
        }
    
        // 文章管理——文章修改
        function update_article(){
            return $this->fetch('update_article');
        }
    
        // 文章管理——文章推荐管理
        function TJ_article(){
            return $this->fetch('TJ_article');
        }   
        
        // 文章管理——删除文章
        function drop_article(){
            return $this->fetch('drop_article');
        } 
}
?>