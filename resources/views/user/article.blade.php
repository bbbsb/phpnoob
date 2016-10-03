@extends('layouts.default')
@section('body')
    <form action="{{url('user.handleCreateArticle')}}" method="post">
        title: <input type="text" name="title" id="">
        <br>
        tags: <input type="text" name="tags" id="">
        <br>
        cover: <input type="text" name="cover" id="">
        <br>
        content: <textarea name="content" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="add article">
    </form>
@endsection
@section('after-body')
    <script>
        $.ajax({
            type:'POST',
            url: '/user/handleCreateArticle',
            header:{
              'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
            },
            data: {},
            success:function(r){
                alert('success'+r);
            },
            error:function(e){
                alert('error'+e);
            }

        })
    </script>
@endsection