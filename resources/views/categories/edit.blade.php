@extends('layouts.app')

@section('content')


@include('includes.errors')
<div class="panel panel-default">
    <div class="panel-heading">
        Update Category : {{$category->name}}
    </div>
    <div class="panel-body">
        <form action="{{route('category.update', ['id' => $category->id])}}" method="post" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="name">Name</label>
            <input type="text" name = "name" value="{{$category->name}}" class="form-control">
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="submit">
                    Update Category
                </button>
            </div>

        </form>
    </div>
</div>
@stop