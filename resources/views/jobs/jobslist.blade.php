@extends('layouts.master')
@section('title','job-cat')
@section('content')
    <style>
        body{
            background: white;
        }
        .joblist .row ul a{
            text-decoration: none;

        }
    </style>
    <div class="text-center mb-3">
        <h1 class="text-primary">Job Category</h1>
    </div>
    <div class="joblist">
        <div class="row">
            <div class="col-md-10 m-auto" >
                <ul>
                    <span class="mr-2">&#8226;</span><a href="{{url('/users/job/details')}}" class="mr-5">Sales/Business Development (<span>22</span>)</a>
                    <span class="mr-2 ml-5">&#8226;</span><a href="#" class="mr-5 ">Marketing/Media/Creative (<span>22</span>)</a>
                    <span class="mr-2 ml-5">&#8226;</span><a href="#" class="">Accounting/Finance (<span>22</span>)</a>
                </ul>
                <hr>
                <ul>
                    <span class="mr-2">&#8226;</span><a href="#" class="mr-5">Sales/Business Development (<span>22</span>)</a>
                    <span class="mr-2 ml-5">&#8226;</span><a href="#" class="mr-5 ">Marketing/Media/Creative (<span>22</span>)</a>
                    <span class="mr-2 ml-5">&#8226;</span><a href="#" class="">Accounting/Finance (<span>22</span>)</a>
                </ul>
                <hr>
                <ul>
                    <span class="mr-2">&#8226;</span><a href="#" class="mr-5">Sales/Business Development (<span>22</span>)</a>
                    <span class="mr-2 ml-5">&#8226;</span><a href="#" class="mr-5 ">Marketing/Media/Creative (<span>22</span>)</a>
                    <span class="mr-2 ml-5">&#8226;</span><a href="#" class="">Accounting/Finance (<span>22</span>)</a>
                </ul>
                <hr>
                <ul>
                    <span class="mr-2">&#8226;</span><a href="#" class="mr-5">Sales/Business Development (<span>22</span>)</a>
                    <span class="mr-2 ml-5">&#8226;</span><a href="#" class="mr-5 ">Marketing/Media/Creative (<span>22</span>)</a>
                    <span class="mr-2 ml-5">&#8226;</span><a href="#" class="">Accounting/Finance (<span>22</span>)</a>
                </ul>
                <hr>
                <ul>
                    <span class="mr-2">&#8226;</span><a href="#" class="mr-5">Sales/Business Development (<span>22</span>)</a>
                    <span class="mr-2 ml-5">&#8226;</span><a href="#" class="mr-5 ">Marketing/Media/Creative (<span>22</span>)</a>
                    <span class="mr-2 ml-5">&#8226;</span><a href="#" class="">Accounting/Finance (<span>22</span>)</a>
                </ul>
                <hr>
                <ul>
                    <span class="mr-2">&#8226;</span><a href="#" class="mr-5">Sales/Business Development (<span>22</span>)</a>
                    <span class="mr-2 ml-5">&#8226;</span><a href="#" class="mr-5 ">Marketing/Media/Creative (<span>22</span>)</a>
                    <span class="mr-2 ml-5">&#8226;</span><a href="#" class="">Accounting/Finance (<span>22</span>)</a>
                </ul>
                <hr>



            </div>
        </div>
    </div>
@endsection