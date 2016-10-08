<form action="/password/reset" method="post">
    {{csrf_field()}}
    <input type="hidden" name="token" value="{{$tokoen}}">
    <div>
        邮箱:<input type="text" name="email" value="{{old('email')}}">
    </div>
    <div>
        新密码:<input type="password" name="password" id="">
    </div>
    <div>
        确认密码:<input type="hidden" name="password_confirmation">
    </div>
    <div>
        <button type="submit">
            设置新密码
        </button>
    </div>
</form>