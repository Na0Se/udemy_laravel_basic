<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
        //1対多 親から子
        $shops = Area::find(1)->shops;

        dd($shops);

    }
}
