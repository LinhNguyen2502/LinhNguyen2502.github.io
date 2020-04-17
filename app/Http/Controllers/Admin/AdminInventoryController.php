<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminInventoryController extends Controller
{
	/**
	 * Nhập kho
	 */
    public function getWarehousing()
	{
		$inventoryImport = Product::whereMonth('created_at',date('m'))
			->select(\DB::raw('sum(pro_number) as quantity'),\DB::raw('sum(pro_price) as money'), \DB::raw('DATE(created_at) day'))
			->groupBy('day')
			->get()->toArray();

		$viewData = [
			'inventoryImport' => $inventoryImport,
		];

		return view('admin.inventory.import', $viewData);
	}

	/**
	 * Xuất kho
	 */
	public function getOutOfStock()
	{
		$inventoryExport = Order::whereMonth('created_at',date('m'))
			->select(\DB::raw('sum(od_qty) as quantity'),\DB::raw('sum(od_price) as money'), \DB::raw('DATE(created_at) day'))
			->groupBy('day')
			->get()->toArray();

		$viewData = [
			'inventoryExport' => $inventoryExport,
		];

		return view('admin.inventory.export', $viewData);
	}
}
