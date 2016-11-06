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
        $categories = Category::all();
        return view('article.create')->with([
            'categories' => $categories
        ]);
    }
    public function updateArticle($id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::all();
        return view('article.update', [
            'article' => $article,
            'categories' => $categories,
        ]);
    }


    public function handleCreateArticle(Request $request)
    {
        //tag
        $tag = trim($request->get('tag'));
        $tag = str_replace('/\s+/', ' ', $tag);
        //category id
        $cid = trim($request->get('cid'));
        if(!Category::find($cid)) {
            return response()->json([
                'errcode' => 1,
                'msg' => 'category id not exist',
            ]);
        }
        //check title
        if(Article::where('title', trim($request->get('title')))->first()) {
            return response()->json([
                'errcode' => 1,
                'msg' => 'title exist',
            ]);
        }
        //create new article
        $post = new Article();
        $post->tag = $tag;
        $post->content = trim($request->get('content'));
        $post->title = trim($request->get('title'));
        $post->cover = trim($request->get('cover'));
        $post->uid = $request->user()->id;
        $post->cid = $cid;

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

    public function handleUpdateArticle(Request $request)
    {

        $id = trim($request->input('id'));
        $cid = trim($request->input('cid'));
        $content = trim($request->input('content'));
        $tag = trim($request->input('tag'));
        $cover = trim($request->input('cover'));
        $title = trim($request->input('title'));


        $post = Article::find($id);

        if(!$post) {
            return response()->json([
                'errcode' => 1,
                'msg' => 'article not exist',
            ]);
        }

        if(!Category::find($cid)) {
            return response()->json([
                'errcode' => 1,
                'msg' => 'category id not exist',
            ]);
        }

        $post->cid = $cid;
        $post->content = $content;
        $post->tag = $tag;
        $post->cover = $cover;
        $post->title = $title;

        if($post->save()) {
            return response()->json([
                'errcode' => 0,
                'msg' => 'success',
            ]);
        } else {
            return response()->json([
                'errcode' => 1,
                'msg' => 'fail'
            ]);
        }


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
        if(!$pidExist && $input['pid']) {
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
