<form action="/password/email" method="post">
    {{csrf_field()}}
    <div>
        邮箱:<input type="text" name="email" value="{{old('email')}}">
    </div>
    <div>
        <button type="submit">
            发送密码重置链接
        </button>
    </div>
    @if(count($errors) > 0)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
</form>