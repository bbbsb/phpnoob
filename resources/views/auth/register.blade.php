<form action="/auth/register" method="post">
    {{csrf_field()}}
    <div>
        用户名:<input type="text" name="name" id="" value="{{old('name')}}">
    </div>
    <div>
        邮箱:<input type="email" name="email" id="" value="{{old('email')}}">
    </div>
    <div>
        密码:<input type="password" name="password">
    </div>
    <div>
        确认密码:<input type="password" name="password_confirmation">
    </div>
    <div>
        <button type="submit">注册</button>
    </div>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul style="color:red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>