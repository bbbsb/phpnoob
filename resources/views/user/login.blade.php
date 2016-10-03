<form action="" method="post">
    {{csrf_field()}}
    <div>
        邮箱:<input type="email" name="email" id="" value="{{old('email')}}">
    </div>
    <div>
        密码:<input type="password" name="password" id="password">
    </div>
    <div>
        <input type="checkbox" name="remember" id="">记住我
    </div>
    <div>
        <button type="submit">登录</button>
    </div>
    @if(count($errors) > 0)
        <ul>
            @foreach($errors->all() as $error)
                <li style="color:red;">{{$error}}</li>
            @endforeach
        </ul>
    @endif
</form>