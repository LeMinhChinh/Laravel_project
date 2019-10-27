<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Category;
use App\Models\Trademark;

class HomeController extends Controller
{
    public function home(Request $request, Home $home, Category $cate, Trademark $trade)
    {
        $data = [];
        $lstHotProduct = $home->getAllDataByCreateAt();
        $lstHotProduct = json_decode(json_encode($lstHotProduct),true);

        $lstCate = $cate->getAllDataCate();
        $lstCate = json_decode(json_encode($lstCate),true);

        $lstName = $cate->getDataName();
        $lstName = json_decode(json_encode($lstName),true);

        $data['lstHotProduct'] = $lstHotProduct;
        $data['lstCate'] = $lstCate;
        $data['lstName'] = $lstName;

        return view('home.home',$data);
    }
}
