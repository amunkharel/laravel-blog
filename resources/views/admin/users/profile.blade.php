@extends('layouts.app')

@section('content')

@include('includes.errors')
<div class="panel panel-default">
    <div class="panel-heading">
        Edit Your Profile
    </div>
    <div class="panel-body">
        <form action="{{route('user.profile.update')}}" method="post"  enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" name = "name" class="form-control" value="{{$user->name}}">
            </div>

            <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name = "email" class="form-control" value="{{$user->email}}">
            </div>

            <div class="form-group">
                    <label for="name">New Password</label>
                    <input type="password" name = "password" class="form-control">
            </div>

            <div class="form-group">
                    <label for="name">Upload New Avatar</label>
                    <input type="file" name = "avatar" class="form-control">
            </div>

            <div class="form-group">
                    <label for="name">About you</label>
                    <textarea name="about" id="about" cols="6" rows="6" class="form-control" value="{{$user->profile->about}}" ></textarea>
            </div>

            <div class="form-group">
                    <label for="name">Facebook Profile</label>
                    <input type="text" name = "facebook" class="form-control" value="{{$user->profile->facebook}}">
            </div>

            <div class="form-group">
                    <label for="name">Youtube Profile</label>
                    <input type="text" name = "youtube" class="form-control" value="{{$user->profile->youtube}}">
            </div>


            <div class="form-group">
                <button class="btn btn-success" type="submit">
                    Update Profile
                </button>
            </div>

        </form>
    </div>
</div>
@stop