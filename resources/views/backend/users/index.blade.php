
@extends('layouts.master')
@section('title','register')
@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="container">
                <nav class="nav flex-column mt-2">
                    <div class="pic text-center ml-2 mb-4">
                        <img src="{{asset('img/userpic.png')}}" alt="" width="200px">
                    </div>
                    <div class="text-center text-success">
                        <p>Online User(<b>{{ Auth::user()->name }}</b>)</p>
                    </div>
                    <div class="list-group mb-0 mr-3">
                        <nav>
                            <ul class="mcd-menu text-center">
                                <li class="list-group-item active p-1">
                                    <a href="" class="text-white">
                                        <strong>Home</strong>
                                    </a>
                                </li>
                                <li class="list-group-item p-1">
                                    <a href="">
                                        <strong>Blog</strong>
                                    </a>
                                </li>
                                <li class="list-group-item p-1">
                                    <a href="">
                                        <strong>About us</strong>
                                    </a>
                                </li>
                                <li class="list-group-item p-1">
                                    <a href="">
                                        <strong>Portfolio</strong></a>
                                </li>
                                <li class="list-group-item p-1">
                                    <a href="">
                                        <strong>Contacts</strong>
                                    </a>
                                </li>
                            </ul>
                        </nav>
{{--                        <div class="text-center mt-0 mr-4">--}}
{{--                            <ul>--}}
{{--                                <!-- Authentication Links -->--}}
{{--                                @guest--}}
{{--                                    <p class="nav-item">--}}
{{--                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                    </p>--}}
{{--                                    @if (Route::has('register'))--}}
{{--                                        <p class="nav-item">--}}
{{--                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                        </p>--}}
{{--                                    @endif--}}
{{--                                @else--}}
{{--                                    <ul>--}}
{{--                                        <li class="list-group-item">--}}
{{--                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                                {{ Auth::user()->name }}<span class="caret"></span>--}}
{{--                                            </a>--}}
{{--                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                                   onclick="event.preventDefault();--}}
{{--																	 document.getElementById('logout-form').submit();">--}}
{{--                                                    {{ __('Logout') }}--}}
{{--                                                </a>--}}
{{--                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                                    @csrf--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                @endguest--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </div>
                </nav>
            </div>
        </div>
        <div class="col-md-9">
            <div class="container">
                <h2 class="text-center mt-lg-5 ml-lg-4"><b>User List</b></h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Modify</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}} </td>
                            <td><a href="{{ url('edit/'.$user->id)}}" class="btn btn-primary">Edit</a> &nbsp;<a href="{{url('delete/'.$user->id)}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{ url('user/create') }}" class="btn btn-primary">Add User</a>
            </div>

        </div>
    </div>
@endsection