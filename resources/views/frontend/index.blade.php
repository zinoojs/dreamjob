@extends('layouts.master')
@section('title','job-page')
@section('content')


    <div class="container">
        <div class="header">
            <h1 class="text-center">Find Your Dream Jobs With Future</h1>
        </div>
        <div class="well mt-3 p-4 bg-info rounded-lg">
            <div class="input-group w-100 p-3">
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Jobs Category</option>
                    <option value="1">Office Staff</option>
                    <option value="2">Accountant</option>
                    <option value="3">Graphic Designer</option>
                </select>

                <select class="custom-select ml-4" id="inputGroupSelect01">
                    <option selected>Township</option>
                    <option value="1">Latha</option>
                    <option value="2">Pabedan</option>
                    <option value="3">Hledan</option>
                </select>

                <select class="custom-select ml-4" id="inputGroupSelect01">
                    <option selected>Freelance</option>
                    <option value="1">Part Time</option>
                    <option value="2">Full Time</option>
                </select>
                <input type="submit" class="btn btn-primary ml-3" value="Find Job">
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="text-center">Popular Jobs</h2>
        <hr>
        <div class="well mt-3 mb-4">
            <div class="card float-left mr-5" style="width: 14rem;">
                <div class="card-body bg-light">
                    <h5 class="card-title text-center">PHP Developer</h5>
                    <hr>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link btn btn-primary">Details</a>
                    <a href="#" class="card-link btn btn-primary ml-3">To Study</a>
                </div>
            </div>
            <div class="card float-left mr-5" style="width: 14rem;">
                <div class="card-body bg-light">
                    <h5 class="card-title text-center">Accountant</h5>
                    <hr>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link btn btn-primary">Details</a>
                    <a href="#" class="card-link btn btn-primary ml-3">To Study</a>
                </div>
            </div>
            <div class="card" style="width: 14rem;">
                <div class="card-body bg-light">
                    <h5 class="card-title text-center">Python Developer</h5>
                    <hr>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link btn btn-primary">Details</a>
                    <a href="#" class="card-link btn btn-primary ml-3">To Study</a>
                </div>
            </div>
        </div>
        <hr>
    </div>
@endsection
