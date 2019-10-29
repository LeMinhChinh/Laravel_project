<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetailProduct;
use App\Models\Product;

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
            $listlaptop = json_decode(json_encode($listlaptop),true);

            // $data['paginate'] = $listPr;
            // $listPr = json_decode(json_encode($listPr),true);

            $data['listlaptop'] = $listlaptop;
            // dd($listlaptop);
            return view('home.product.listlaptop',$data);
        }elseif($idtype ==2){
            $listpc = $product->getAllProductByIdType($idtype);
            $listpc = json_decode(json_encode($listpc),true);

            $data['listpc'] = $listpc;
            // dd($listpc);
            return view('home.product.listpc',$data);
        }

    }
}
