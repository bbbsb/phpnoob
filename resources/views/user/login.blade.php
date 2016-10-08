@extends('layouts.default')
@section('body')
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form action="" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label class="control-label">邮箱</label>
                <input class="form-control" type="email" name="email" id="" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <label class="control-label">密码</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember">记住我
                </label>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">登录</button>
            </div>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <button class="close" type="button" data-dismiss="alert">&times;</button>
                        {{$error}}
                    @endforeach
                </div>
            @endif
        </form>
    </div>
    <div class="col-md-2"></div>
@endsection