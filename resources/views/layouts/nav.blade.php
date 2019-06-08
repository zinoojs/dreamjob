
    <nav class="navbar navbar-expand-lg navbar-light bg-purple mt-lg-3">
        <a class="navbar-brand ml-5 mr-5 text-white" href="{{url('/users/job')}}"><span>Future</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-5 text-center">
                <li class="nav-item active ml-5">
                    <a class="nav-link text-white" href="{{url('/users/job')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown ml-5">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Compaines
                    </a>
                    <div class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item text-info" href="#">Apple</a>
                        <a class="dropdown-item text-info" href="#">Ebay</a>
                        <a class="dropdown-item text-info" href="#">Alibaba</a>
                        <a class="dropdown-item text-info" href="{{url('/users/job/companylist')}}">See Mores &#10144;</a>
                    </div>
                </li>
                <li class="nav-item dropdown ml-5">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Jobs List
                    </a>
                    <div class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item text-info" href="#">Accountant</a>
                        <a class="dropdown-item text-info" href="#">Web Developer</a>
                        <a class="dropdown-item text-info" href="#">Designer</a>
                        <a class="dropdown-item text-info" href="{{url('/users/job/list')}}">See Mores &#10144;</a>
                    </div>
                </li>
                <li class="nav-item dropdown ml-5">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Candidates
                    </a>
                    <div class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item text-info" href="{{url('/users/job/cv')}}">Post A Resume</a>
                        <a class="dropdown-item text-info" href="#">Job List</a>
                        <a class="dropdown-item text-info" href="#">Candidate Dashboard</a>
                    </div>
                </li>
                <li class="nav-item dropdown ml-5">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item text-info" href="#">Help Taps</a>
                        <a class="dropdown-item text-info" href="#">Pricing Plans</a>
                        <a class="dropdown-item text-info" href="#">Contant Us</a>
                    </div>
                </li>
                <li class="nav-item dropdown ml-5">
                    @if(Auth::check())
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>{{ Auth::user()->name }}</b>
                        </a>
                    @else
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Member</b>
                        </a>
                    @endif
                    <div class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdownMenuLink">
                        @if(Auth::check())
                            <a class="dropdown-item text-info" href="{{url('/users/logout')}}">Logout</a>
                        @else
                            <a class="dropdown-item text-info" href="{{url('/users/login')}}">Sign In</a>
                            <a class="dropdown-item text-info" href="{{url('/users/register')}}">Register</a>
                        @endif


                    </div>
                </li>
            </ul>
        </div>
    </nav>
