@extends('layouts.default')
@section('body')
    <table class="table">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>pid name</td>
            <td>action</td>
        </tr>
        @if(count($categories) > 0)
            @foreach($categories as $category)
            <tr>
                <td>{{$category['id']}}</td>
                <td>{{$category['name']}}</td>
                <td>{{$category['pname']}}</td>
                <td>
                    <a href="#" class="btn btn-default">detail</a>
                    <a href="#" class="btn btn-danger">delete</a>
                </td>
            </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4">
                    no category
                </td>
            </tr>
        @endif
    </table>
    <a href="{{url('user/createCategory')}}" class="btn btn-primary">add new category</a>
@endsection