<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function profile(Request $request)
    {
        $user = $request->user();
        //dd($request);
        echo $user['name'].'登录成功!';
    }

    public function test()
    {
        DB::insert('insert into users (name, email, password) values (?, ?, ?)',[
            'fang',
            'ba221o@1baow1w23.com',
            '123'
        ]);
        $users = DB::select('select * from users where ?',[
            '1'
        ]);
        dd($users);
    }

    public function lara()
    {
       // = new User();
        dd(User::popular()->get());
    }


}
