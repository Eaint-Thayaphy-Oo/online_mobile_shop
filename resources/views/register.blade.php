@extends('layouts.master')

@section('title', 'Register Page')

@section('content')
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->

                    <form action="{{ route('register') }}" class="md-float-material form-material" method="post">
                        @csrf
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Sign Up</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="name" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Name</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="email" name="email" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Email</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="phone" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Phone</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="address" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Address</label>
                                </div>
                                <div class="form-group form-primary">
                                    {{-- <input type="text" name="gender" class="form-control" required=""> --}}
                                    <select name="gender" class="form-control" required="">
                                        <option value=""></option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Gender</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Password</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="password_confirmation" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Confirm Password</label>
                                </div>
                                {{-- <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary d-">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i
                                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-right f-right">
                                            <a href="#" class="text-right f-w-600"> Forgot Password?</a>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Register</button>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you.</p>
                                    </div>
                                    <p class="text-inverse text-left"><a href="{{ route('auth#loginPage') }}"><b>Sign
                                                In</b></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
@endsection
