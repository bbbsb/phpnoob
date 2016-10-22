@extends('layouts.default')
@section('css')
    <style>
        .left {
            margin-left: 20px;
            width: 30%;
        }
        .right {
            margin-right: 20px;
        }
    </style>
@endsection
@section('body')
    <div class="left">
        <ul class="nav">
            <li><a href="{{url('/user/allArticle')}}">Articles List</a></li>
            <li><a href="#">Articles List</a></li>
            <li><a href="#">Articles List</a></li>
            <li><a href="#">Articles List</a></li>
            <li><a href="#">Articles List</a></li>
            <li><a href="#">Articles List</a></li>
            <li><a href="#">Articles List</a></li>
        </ul>
    </div>
    <div class="right">

    </div>
@endsection