<?php
namespace app\admin\controller;
use \think\Controller;
class Menu extends Controller{
    function __construct(){
        parent::__construct();
        $this->assign('menu',$this->getmenu());
    }
    private function getmenu(){
        return [
            [
              'h3'=>'系统配置',
              'name' =>'xt',
              'child'=>[
                 
                  0 =>['name'=>'服务器配置','href'=>'http://ligame.com/admin/site'],
                  1 =>['name'=>'网站配置','href'=>'http://ligame.com/admin/site/https'],
                  2 =>['name'=>'系统配置','href'=>'http://ligame.com/admin/site/xTconfigure'],
                  3 =>['name'=>'管理员管理','href'=>'http://ligame.com/admin/site/admin_c'],
                  4 =>['name'=>'清除缓存','href'=>'http://ligame.com/admin/site/cache'],
              ]
            ],

            [
                'h3'=>'数据管理',
                'name' =>'data',
                'child'=>[
                    0 =>['name'=>'文章管理','href'=>'http://ligame.com/admin/site/article'],
                    1 =>['name'=>'分类管理','href'=>'http://ligame.com/admin/site/cont_wz'],
                    2 =>['name'=>'编辑','href'=>'http://ligame.com/admin/site/bianji'],
                ]
              ],

            [
                'h3'=>'会员管理',
                'name' =>'user',
                'child'=>[
                    0 =>['name'=>'权力分配','href'=>'http://ligame.com/admin/site/fenpei_user'],
                    1 =>['name'=>'移除会员','href'=>'http://ligame.com/admin/site/delete_user'],
                ]
              ],
        ];
    }
}
?>