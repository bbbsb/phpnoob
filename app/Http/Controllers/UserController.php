<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

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
        return view('article.create');
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
        $articles = Article::orderBy('id', 'DESC')->paginate(2);
        return view('article.index', [
            'articles' => $articles,
        ]);
    }

    public function handleDeleteArticle(Request $request)
    {

    }

    public function createCategory()
    {
        $categories = Category::all();
        return view('category.create')->with('categories', $categories);
    }

    public function handleCreateCategory(Request $request)
    {
        $input = array_map('trim', $request->input());
        $cate = new Category();
        $cate->name = $input['name'];
        $cate->pid = $input['pid'];
        $nameExist = Category::where('name', $input['name'])->count();
        $pidExist = Category::find($input['pid']);
        if($nameExist) {
            return back()->withInput()->withErrors('category name exist');
        }
        if(!$pidExist) {
            return back()->withInput()->withErrors('category id is not exist');
        }
        if($cate->save()) {
            return Redirect::to('user/allCategory');
        }

    }

    public function allCategory()
    {
        $categories = Category::all();
        $c_array = $categories->toArray();
        $categories = array_map(function($c) {
            $cate = Category::find($c['pid']);
            $c['pname'] = $cate['name'] ? : 'primary category';
            return $c;
        }, $c_array);
        return view('category.index')->with('categories', $categories);
    }

    public function tags()
    {

    }
}
