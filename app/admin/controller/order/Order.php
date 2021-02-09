<?php

namespace app\admin\controller\order;

use app\admin\controller\Common;

class Order extends common
{

    /* 订单列表 */
    public function index()
    {
        $param = input();
        return view();
    }
}
