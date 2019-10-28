<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $table = 'product';

    public function getAllDataByCreateAt()
    {
        $data = DB::table('product AS p')
                    ->select('p.*','tt.id_type')
                    ->join('type_trade AS tt','tt.id','=','p.id_typetrade')
                    ->where('p.status',1)
                    ->orderBy('created_at','DESC')
                    ->take(6)
                    ->get();
        return $data;
    }

    public function getAllDataLaptop()
    {
        $data = DB::table('product AS p')
                    ->select('p.*','tt.id_type')
                    ->join('type_trade AS tt','tt.id','=','p.id_typetrade')
                    ->where('tt.id_type',1)
                    ->take(8)
                    ->get();
        return $data;
    }

    public function getAllDataPC()
    {
        $data = DB::table('product AS p')
                    ->select('p.*','tt.id_type')
                    ->join('type_trade AS tt','tt.id','=','p.id_typetrade')
                    ->where('tt.id_type',2)
                    ->take(8)
                    ->get();
        return $data;
    }
}
