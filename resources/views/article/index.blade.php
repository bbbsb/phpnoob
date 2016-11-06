@extends('layouts.default')
@section('body')
    <table class="table">
        <tr>
            <td>Title</td>
            <td>Content</td>
            <td>Cover</td>
            <td>Uid</td>
            <td>Category id</td>
            <td>Create Time</td>
            <td>Update Time</td>
            <td>Action</td>
        </tr>
    @if(count($articles) > 0)
        @foreach($articles as $article)
            <tr>
                <td>{{$article['title']}}</td>
                <td>{!! $article['content'] !!}</td>
                <td>{{$article['cover']}}</td>
                <td>{{$article['uid']}}</td>
                <td>{{$article['cid']}}</td>
                <td>{{$article['created_at']}}</td>
                <td>{{$article['updated_at']}}</td>
                <td>
                    <a href="{{url('/show/'.$article['id'])}}" class="btn btn-default">Detail</a>
                    <a href="{{url('/user/updateArticle/'.$article['id'])}}" class="btn btn-info">Update</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="7">
                {!! $articles->render() !!}
            </td>
        </tr>
    @else
        <tr>
            <td colspan="7">
                <p>no article</p>
            </td>
        </tr>
    @endif
    </table>
    <a href="{{url('/user/createArticle')}}" class="btn btn-primary">Add new article</a>
@endsection