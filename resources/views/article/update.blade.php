@extends('layouts.default')
@section('body')
    {{csrf_field()}}
    <div class="form-group">
        <label for="title" class="control-label">title</label>
        <input class="form-control" type="text" name="title" id="title" value="{{$article->title}}" required>
        <span class="help-block"></span>
    </div>
    <div class="form-group">
        <label for="tag" class="control-label">tag</label>
        <input class="form-control" type="text" name="tag" id="tag" value="{{$article->tag}}">
    </div>
    <div class="form-group">
        <label for="cover" class="control-label">cover</label>
        <input class="form-control" type="text" name="cover" id="cover" value="{{$article->cover}}">
    </div>
    <div class="form-group">
        <label for="category" class="control-label">category</label>
        <select name="category" id="category" class="form-control">
            @foreach($categories as $category)
                <option value="{{$category->id}}" @if($category->id == $article->cid) selected="selected" @endif>{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="content" class="control-label">content</label>
        <div id="container"></div>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" id="submit">update article</button>
    </div>
@endsection

@section('after-body-js')
    <script src="{{asset('thirdparty/ueditor/ueditor.config.js')}}"></script>
    <script src="{{asset('thirdparty/ueditor/ueditor.all.js')}}"></script>
    <script>
        var ue = UE.getEditor('container');
        var cnt = '{!! $article->content !!}';
        ue.ready(function(){
            ue.setContent(cnt);
        });
    </script>
@endsection
@section('after-body')
    <script>
        $('#submit').click(function(){
            $.ajax({
                type:'POST',
                url: '/user/handleUpdateArticle',
                data: {
                    _token : "{{csrf_token()}}",
                    id: "{{$article->id}}",
                    title:$('input[name=title]').val(),
                    tag: $('input[name=tag]').val(),
                    cover: $('input[name=cover]').val(),
                    content: ue.getContent(), //ue.getPlainTxt()  ue.getContentTxt() ue.getAllHtml() ue.getContent()
                    cid: $('#category').val()
                },
                success:function(r){
                    console.log(r);
                    if(r.errcode == 0){
                        window.location.href="/user/allArticle";
                    } else {
                        alert(r.msg);
                    }
                },
                error:function(e){
                    console.log(e);
                    alert('Error!'+JSON.stringify(e));
                }

            });
        });
    </script>
@endsection