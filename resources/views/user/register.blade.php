@extends('layouts.default')
@section('css')
    <style>
        .register {
            width:400px;
            margin: 100px auto;
        }
    </style>
@endsection
@section('body')
    <div class="register">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name" class="control-label">用户名</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">邮箱</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">密码</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="control-label">确认密码</label>
                    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">注册</button>
                </div>
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                           <button class="close" type="button" data-dismiss="alert">&times;</button>
                           {{$error}}
                        @endforeach
                    </div>
                @endif
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection