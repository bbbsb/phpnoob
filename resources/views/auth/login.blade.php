<form action="/auth/login" method="post">
    {{csrf_field()}}
{{--    <div>
        邮箱:<input type="email" name="email" id="" value="{{old('email')}}">
    </div>--}}
    <div>
       用户名 :<input type="text" name="name" id="" value="{{old('name')}}">
    </div>
    <div>
        密码:<input type="password" name="password" id="password">
    </div>
    <div>
        <input type="checkbox" name="remeber" id="">记住我
    </div>
    <div>
        <button type="submit">登录</button>
    </div>
    @if(count($errors) > 0)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
</form>