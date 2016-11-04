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
        <label for="category" class="control-label">category</label>
        <select name="category" id="category" class="form-control">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="content" class="control-label">content</label>
        <div id="container"></div>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" id="submit">add article</button>
    </div>
@endsection

@section('after-body-js')
    <script src="{{asset('thirdparty/ueditor/ueditor.config.js')}}"></script>
    <script src="{{asset('thirdparty/ueditor/ueditor.all.js')}}"></script>
    <script>
        var ue = UE.getEditor('container');
    </script>
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
                    content: ue.getContent(), //ue.getPlainTxt()  ue.getContentTxt() ue.getAllHtml() ue.getContent()
                    cid: $('#category').val()
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