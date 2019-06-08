@extends('layouts.master')
@section('title','cv-page')
@section('content')

    <div class="well text-center text-white mb-5">
        <h2>Post Resume</h2>
        <small>General Resume</small>
    </div>
    <div class="container">
        <div class="col-md8 m-auto">
            <div class="table table-bordered p-3">
                <h5 class="text-center text-white">Content Information</h5>
                    <hr>
                <form action="" class="pt-2">
                <form>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationServer01">First name</label>
                                <input type="text" class="form-control " id="validationServer01" placeholder="First name"  required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationServer02">Last name</label>
                                <input type="text" class="form-control " id="validationServer02" placeholder="Last name"  required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationServerUsername">Date Of Birth</label>
                                <div class="input-group">
                                    <input type="text" class="form-control " id="validationServerUsername" placeholder="Birthday" aria-describedby="inputGroupPrepend3" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationServer03">Address</label>
                                <input type="text" class="form-control" id="validationServer03" placeholder="Address" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationServer04">Phone</label>
                                <input type="text" class="form-control" id="validationServer04" placeholder="Phone" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationServer05">Email</label>
                                <input type="text" class="form-control" id="validationServer05" placeholder="Email" required>
                            </div>
                        </div>
                    </form>
                <h5 class="text-center mt-5 text-white">General Information</h5>
                    <hr>
                <form action="" class="pt-1">
                <form>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationServer01">Position</label>
                                <input type="text" class="form-control" id="validationServer01"  required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationServer02">Language</label>
                                <input type="text" class="form-control" id="validationServer02" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationServer03">Work Experience</label>
                                <input type="text" class="form-control" id="validationServer03" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationServer04">Highest Degree Level</label>
                                <input type="text" class="form-control" id="validationServer04" required>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col-md-6 mb-3">
                                <label for="file">Upload Your CV</label>
                                <input type="file" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02">Upload CV file</label>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="submit" class="form-control btn btn-primary" >
                            </div>
                        </div>
                    </form>
                </form>
                </form>
            </div>
        </div>
    </div>
@endsection

