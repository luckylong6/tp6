<?php

namespace app\admin\controller\oncecard;

use app\admin\controller\Common;
use think\cache\driver\Redis;

use app\admin\model\Order;

use think\facade\View;

class Sell  extends Common
{

    /* 订单列表 */
    public function index()
    {
        $param = input();
        $redis = new Redis();
        $redis->set('test_str', "aaaa");
        $order = new Order();
        $list = $order->getOrders();
        View::assign('list', $list);
        return view();
    }

    /* 订单数据 */
	public function add() {

	}
}
