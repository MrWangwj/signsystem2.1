<?php
// +----------------------------------------------------------------------
// | snake
// +----------------------------------------------------------------------
// | Copyright (c) 2016~2022 http://baiyf.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: NickBai <1902822973@qq.com>
// +----------------------------------------------------------------------
namespace app\admin\controller;

use Admin\Model\AdminModel;
use app\admin\model\Admin;
use app\admin\model\Node;
use app\menu\model\Menu;
use Think\Model;

class Index extends Base
{
    public function index()
    {
        $menulist = db('menu')
            ->select();
        $this->assign('menulist',$menulist);
        return $this->fetch('/index');
    }

    /**
     * 后台默认首页
     * @return mixed
     */
    public function indexPage()
    {
        return $this->fetch('index');
    }


}
