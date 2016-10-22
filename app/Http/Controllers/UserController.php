<?php

namespace App\Http\Controllers;

use App\Models\Article;
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
        return view('user.index');
    }

    public function createArticle()
    {
        return view('user.createArticle');
    }

    public function handleCreateArticle(Request $request)
    {
        $tag = $request->get('tag');
        $tag = trim($tag);
        $tag = str_replace('/\s+/', ' ', $tag);
        $post = new Article();
        $post->tag = $tag;
        $post->content = trim($request->get('content'));
        $post->title = trim($request->get('title'));
        $post->cover = trim($request->get('cover'));
        $post->uid = $request->user()->id;

        if($post->save()) {
            return response()->json([
                'errcode' => 0,
                'msg' => 'success',
            ]);
        } else {
            return response()->json([
                'errcode' => 1,
                'msg' => 'fail',
            ]);
        }
        //return response()->json($request->all());
    }

    public function allArticle()
    {
        $articles = Article::paginate(2);
        return view('user.article', [
            'articles' => $articles,
        ]);
    }

    public function handleDeleteArticle(Request $request)
    {

    }


}
