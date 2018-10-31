@extends('layouts.app')

@section('content')


@include('includes.errors')
<div class="panel panel-default">
    <div class="panel-heading">
        Create a new Post
    </div>
    <div class="panel-body">
        <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name = "title" class="form-control">
            </div>

            <div class="form-group">
                    <label for="feature">Featured image</label>
                    <input type="file" name = "featured" class="form-control">
            </div>

            <div class="form-group">
                <label for="category">Select Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
            </div>

            <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Store Post
                        </button>
                    </div>
            </div>

        </form>
    </div>
</div>
@stop