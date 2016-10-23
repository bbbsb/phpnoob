@extends('layouts.default')
@section('body')
    <form role="form" action="{{url('user/createCategory')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label for="pid">Pid</label>
            <select name="pid" id="pid" class="form-control">
                <option value="0" @if(old('pid') ==0) selected @endif >primary category</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}" @if(old('pid') == $category->id) selected @endif >{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{$error}}
                @endforeach
            </div>
        @endif
        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-primary btn-block">
        </div>
    </form>
@endsection