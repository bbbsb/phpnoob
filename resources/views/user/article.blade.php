@extends('layouts.default')
@section('body')
    @if(count($articles) > 0)
        @foreach($articles as $article)
            {{$article['title']}}
            {{$article['content']}}
            {{$article['cover']}}
            {{$article['uid']}}
            {{$article['created_at']}}
            {{$article['updated_at']}}
            <br>
        @endforeach
        {!! $articles->render() !!}
    @else
        no article
    @endif
@endsection