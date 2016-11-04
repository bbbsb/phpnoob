@extends('layouts.default')
@section('css')
    <style>
        .single-line {
            border: 1px solid #006666;
            margin: 2px auto;
        }
    </style>
@endsection
@section('body')
    <h3>{{$article->title}}</h3>
    <div class="single-line"></div>
    <p>{!! $article->content !!}</p>
    <p>{{$article->uid}}</p>
    <p>{{$article->cid}}</p>
    <p>{{$article->created_at}}</p>
    <p>{{$article->updated_at}}</p>
@endsection