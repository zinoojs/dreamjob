
@extends('layouts.master')
@section('title','register')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mt-lg-5 table-bordered bg-purple rounded-lg">
                <div class="well well-lg mt-lg-3">
                    <form method="post">
                        @csrf
                        <legend class="text-center text-white">User Register</legend>
                        <hr>
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                        <div class="form-group text-white">
                            <label for="name">Name</label>
                            <input type="text" class="form-control bg-secondary text-white" id="name" name="name">
                        </div>
                        <div class="form-group text-white">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control bg-secondary text-white" id="email" name="email">
                        </div>
                        <div class="form-group text-white">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control bg-secondary text-white" id="password" name="password">
                        </div>
                        <div class="form-group text-white">
                            <label for="comfirmpassword">Comfirm Password:</label>
                            <input type="password" class="form-control bg-secondary text-white" id="comfirmpassword" name="password_confirmation">
                        </div>
                        <button type="submit" class="btn btn-info mb-2">Register</button>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection