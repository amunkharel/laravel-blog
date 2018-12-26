@extends('layouts.app')

@section('content')

@include('includes.errors')
<div class="panel panel-default">
    <div class="panel-heading">
        Create a new user
    </div>
    <div class="panel-body">
        <form action="{{route('user.store')}}" method="post" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="name">User</label>
                <input type="text" name = "name" class="form-control">
            </div>

            <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name = "email" class="form-control">
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="submit">
                    Add User
                </button>
            </div>

        </form>
    </div>
</div>
@stop