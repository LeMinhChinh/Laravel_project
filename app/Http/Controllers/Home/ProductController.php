<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetailProduct;

class ProductController extends Controller
{
    public function detail($id,DetailProduct $dtproduct,Request $request)
    {
        $detailPr = $dtproduct->getDataProductById($id);
        $detailPr = \json_decode(json_encode($detailPr),true);
        // dd($detailPr);

        $data['detailPr'] = $detailPr;

        return view('home.product.detail',$data);
    }
}
