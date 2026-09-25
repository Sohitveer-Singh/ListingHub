@extends('layouts.auth')
@section('content')

    <!-- ============================ Login Form Start ================================== -->
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-5 col-lg-7 col-md-9">
                    <div class="authWrap">

                        <div class="authhead">
                            <!-- Logo -->
                            <div class="text-center mb-4">
                                <a href="">
                                    <img class="img-fluid" src="{{asset('assets/img/icon.png')}}" width="55" alt="logo">
                                </a>
                            </div>
                        </div>

                        <div class="authbody d-black mb-4">
                            <div class="card rounded-4 p-sm-5 p-4">
                                <div class="card-body p-0">


                                    <!-- Title -->
                                    <div class="text-center"><h1 class="mb-2 fs-2">Create An Account!</h1></div>

                                    <!-- Form START -->
                                    <form action="{{route('register.store')}}" method="post" class="mt-5 text-start">
                                        @csrf
                                        <div class="form">

                                            <div class="form-group">
                                                <label class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="John Doe">
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="name@example.com">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Enter Password</label>
                                                <div class="position-relative">
                                                    <input type="password" class="form-control" id="password-field"
                                                           name="password"
                                                           placeholder="Password">
                                                    <span
                                                        class="fa-solid fa-eye toggle-password position-absolute top-50 end-0 translate-middle-y me-3"></span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label">Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="form-control" placeholder="*********">
                                            </div>

                                            <div class="form-group mb-4">
                                                <button type="submit" class="btn btn-primary full-width fw-medium">
                                                    Create Account
                                                </button>
                                            </div>
                                        </div>

                                    </form>
                                    <!-- Form END -->
                                </div>

                            </div>
                        </div>

                        <div class="authfooter">
                            <div class="text-center"><p class="bs-text-dark mb-0">Already an account?<a
                                        href="login.html" class="fw-medium text-primary"> Login Here</a></p></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Login Form Start ================================== -->

@endsection
