@extends('layouts.default')
@section('body')
    {{csrf_field()}}
    <div class="form-group">
        <label for="title" class="control-label">title</label>
        <input class="form-control" type="text" name="title" id="title" required>
        <span class="help-block"></span>
    </div>
    <div class="form-group">
        <label for="tag" class="control-label">tag</label>
        <input class="form-control" type="text" name="tag" id="tag">
    </div>
    <div class="form-group">
        <label for="cover" class="control-label">cover</label>
        <input class="form-control" type="text" name="cover" id="cover">
    </div>
    <div class="form-group">
        <label for="content" class="control-label">content</label>
        <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" id="submit">add article</button>
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