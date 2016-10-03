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
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $user = $request->user();
        echo $user['name'].'登录成功!';
    }

    public function createArticle()
    {
        return view('user.article');
    }

    public function handleCreateArticle(Request $request)
    {
        return 456;
    }


}
