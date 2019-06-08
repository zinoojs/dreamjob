@extends('layouts.master')
@section('title','create role')
@section('content')
    <div class="container col-md-8 m-auto">
        <form class="table-bordered mt-5 bg-white">
        	<div class="form-group p-5">
        		<legend>Insert A Role</legend>
        		<hr>
        		<label for="name">Name</label>
        		<input type="text" name="name" id="name" class="form-control" placeholder="Role Name">
        		<br>
        		<button class="btn btn-primary">Insert</button>

        	</div>
        </form>
    </div>
@endsection