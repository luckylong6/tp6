<?php

namespace app\admin\model;

use think\Model;

class Order extends Model
{
	function getOrders() {
		$list = $this->paginate(2)->each(function ($item) {
			$item['num'] = 1;
			return $item;
		});
		return $list;
	}
}
