<form action="/auth/login" method="post">
    <div>
        邮箱:<input type="email" name="email" id="" value="{{old('email')}}">
    </div>
    <div>
        密码:<input type="hidden" name="password" id="password">
    </div>
    <div>
        <input type="checkbox" name="remeber" id="">记住我
    </div>
    <div>
        <button type="submit">登录</button>
    </div>
</form>