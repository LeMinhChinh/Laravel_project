<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductAdminController extends Controller
{
    public function product(Product $product)
    {
        $lstProduct = $product->getAllData();
        $lstProduct = \json_decode(json_encode($lstProduct),true);
        // dd($lstProduct);

        $data['lstProduct'] = $lstProduct;
        return view('admin.product.product',$data);
    }
}
