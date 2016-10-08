@extends('layouts.default')
@section('body')
    {{csrf_field()}}
    <div class="form-group">
        <label class="control-label">input</label>
        <input class="form-control" type="text" name="title">
        <span class="help-block"></span>
    </div>
    <div class="form-group">
        <label class="control-label">tag</label>
        <input class="form-control" type="text" name="tag">
    </div>
    <div class="form-group">
        <label class="control-label">cover</label>
        <input class="form-control" type="text" name="cover">
    </div>
    <div class="form-group">
        <label class="control-label">content</label>
        <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" disabled>add article</button>
    </div>
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