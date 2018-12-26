@extends('layouts.app')

@section('content')

@include('includes.errors')
<div class="panel panel-default">
    <div class="panel-heading">
        Create a new tag
    </div>
    <div class="panel-body">
        <form action="{{route('tag.store')}}" method="post" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="name">Tag</label>
                <input type="text" name = "tag" class="form-control">
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="submit">
                    Store tag
                </button>
            </div>

        </form>
    </div>
</div>
@stop