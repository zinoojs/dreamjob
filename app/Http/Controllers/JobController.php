<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function list()
    {
        return view('jobs.jobslist');
    }
}
