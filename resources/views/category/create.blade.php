@extends('layouts.default')
@section('body')
    <form role="form" action="{{url('user/createCategory')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="pid">Pid</label>
            <select name="pid" id="pid" class="form-control">
                <option value="0">primary category</option>
                <option value="0">primary category</option>
                <option value="0">primary category</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-primary btn-block">
        </div>
    </form>
@endsection