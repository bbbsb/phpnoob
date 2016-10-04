@extends('layouts.default')
@section('body')
    {{csrf_field()}}
        title: <input type="text" name="title" id="">
        <br>
        tag: <input type="text" name="tag" id="">
        <br>
        cover: <input type="text" name="cover" id="">
        <br>
        content: <textarea name="content" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="add article" id="submit">
@endsection
@section('after-body')
    <script>
        $('#submit').click(function(){
            $.ajax({
                type:'POST',
                url: '/user/handleCreateArticle',
                data: {
                    _token : "{{csrf_token()}}",
                    title:$('input[name=title]').val(),
                    tag: $('input[name=tag]').val(),
                    cover: $('input[name=cover]').val(),
                    content: $('textarea[name=content]').val()
                },
                success:function(r){
                    if(r.errcode == 0){
                        window.location.href="/user/allArticle";
                    } else {
                        alert(r.msg);
                    }
                },
                error:function(e){
                    alert(JSON.stringify(e));
                }

            });
        });
    </script>
@endsection