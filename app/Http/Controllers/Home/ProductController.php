<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetailProduct;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function detail($id,DetailProduct $dtproduct,Request $request, Product $product)
    {
        $detailPr = $dtproduct->getDataProductById($id);
        $detailPr = \json_decode(json_encode($detailPr),true);

        $data['detailPr'] = $detailPr;

        return view('home.product.detail',$data);
    }

    public function listproduct($idtype, Product $product)
    {
        if($idtype == 1){
            $listlaptop = $product->getAllProductByIdType($idtype);
            $data['paginate'] = $listlaptop;
            $listlaptop = json_decode(json_encode($listlaptop),true);
            $data['listlaptop'] = $listlaptop['data'] ?? [];
            $laptop = Category::find($idtype);

            $data['laptop'] = $laptop;

            return view('home.product.listlaptop',$data);
        }elseif($idtype ==2){
            $listpc = $product->getAllProductByIdType($idtype);
            $listpc = json_decode(json_encode($listpc),true);

            $pc = Category::find($idtype);

            $data['pc'] = $pc;
            $data['listpc'] = $listpc;
            // dd($listpc);
            return view('home.product.listpc',$data);
        }

    }
}
