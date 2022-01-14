<?php

namespace App\Http\Controllers\BackEnd\Shop;

use App\Http\Controllers\BackEnd\BaseShopController;
use Illuminate\Http\Request;

class ShopController extends BaseShopController
{
    public function index()
    {
        $count = [
            'products'     => 0,
            'categories'   => 0,
            'orders'       => 0,
        ];

        return view('backend.shop.index', compact('count'));
    }
}
