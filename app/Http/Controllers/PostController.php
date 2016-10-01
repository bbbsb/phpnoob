<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Cache;
use Redis;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Cache::get('posts', []);
        if(!$posts) exit('not article');
        $html = '<ul>';
        foreach($posts as $k => $v) {
            $html .= "<li><a href='".route('post.show', ['post' => $k])."'>{$v['title']}</a></li>";
        }
        $html .= '</ul>';
        return $html;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url = route('post.store');
        $token = csrf_field();
        $html = <<<ABCD
<form action="{$url}" method="post">
    {$token}
    title:<input type="text" name="title">
    <br>
    content:<textarea name="content" cols=50 rows=5></textarea>
    <button type="submit">submit</botton>
</form>
ABCD;
        return $html;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        $post = [
            'title' => trim($title),
            'content' => trim($content),
        ];

        $posts  = Cache::get('posts',[]); //default -> []
        if(!Cache::get('post_id')) {
            Cache::add('post_id', 1, 60);
        } else {
            Cache::increment('post_id', 1);
        }

        $posts[Cache::get('post_id')] = $post;

        Cache::put('posts', $posts, 60);

        return redirect()->route('post.show', ['post' => Cache::get('post_id')]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Cache::get('posts', []);
        if(!$posts || !$posts[$id]) exit('no article');
        $post = $posts[$id];
        $editUrl = route('post.edit', ['post' => $id]);
        $html = <<<ABCD
<h2>{$post['title']}</h2>
<br/>
<h3>{$post['content']}</h3>
<br/>
<a href="{$editUrl}">edit</a>
ABCD;

        return $html;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Cache::get('posts', []);
        if(!$posts || !$posts[$id]) exit('not article');
        $post = $posts[$id];
        $updateUrl = route('post.update', ['post' => $id]);
        $token = csrf_field();
        $html = <<<ABCD
<form action="{$updateUrl}" method="post">
{$token}
title:<input type="text" name="title" value="{$post['title']}">
<br/>
content:<textarea>{$post['content']}</textarea>
<br/>
<button type="submit">update</button>
</form>
ABCD;

        return $html;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $posts = Cache::get('posts', []);
        if(!$posts || !$posts[$id]) exit('not article');
        $title = trim($request->input('title'));
        $content = trim($request->input('content'));
        $posts[$id]['title'] = $title;
        $posts[$id]['content'] = $content;
        Cache::put('posts', $posts, 60);
        return redirect()->route('post.show', ['post' => Cache::get('post_id')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Cache::get('posts', []);
        if(!$posts || !$posts[$id]) exit('not article');
        unset($posts[$id]);
        Cache::put('posts', $posts, 60);

        return redirect()->route('post.index');
    }
}
