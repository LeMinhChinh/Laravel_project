<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    protected $table = 'account';

    public function checkUserLogin($user, $pass)
    {
        $data = [];
        $info = User::select('*')
                    ->where([
                        'email' => $user,
                        'password' => md5($pass),
                        'status' => 1
                    ])
                    ->first();
        if($info){
            $data = $info->toArray();
        }
        return $data;
    }

    public function registerUser($data)
    {
        DB::table('account')->insert($data);
        $id = DB::getPdo()->lastInsertId();
        return $id;
    }
}
