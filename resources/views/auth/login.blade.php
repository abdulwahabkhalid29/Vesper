@extends('site.layouts.scaffold')
@push('title')
Login
@endpush
@section('content')
    <main id="main">
        <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
            <h2>Login</h2>
            <ol>
                <li><a href="{{route('index')}}">Home</a></li>
                <li>Login</li>
            </ol>
            </div>
        </div>
        </section>
    </main><!-- End #main -->
  <section class="align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="section-title" data-aos="fade-up">
                    <h2>Login</h2>
                </div>
                <section id="contact" class="contact">
                    <div class="container">
                    <form action="{{route('login')}}" method="post" role="form" >
                        @csrf
                        <div class="form-group mt-4">
                          <input id="email" type="email" placeholder="Enter Your Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                          @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="form-group mt-4">
                          <input id="password" type="password" placeholder="Enter Your Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                          @error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <a href="{{route('register')}}"><p>I don't have an Account Register..!</p></a>
                        <a href="{{route('password.request')}}"><p>Forget Password</p></a>
                        <div class="text-center"><button class="btn btn-primary" type="submit">Submit</button></div>
                      </form>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
               <h4>Email Address:</h4>
                <p>Users typically need to provide a unique identifier, such as a username or email address, during the login process. This is the initial piece of information that the system uses to identify the user.</p>
                <h4>Password:</h4>
                <p>The password is a secret code known only to the user. It adds an extra layer of security by ensuring that even if someone knows the username or email address, they still need the correct password to gain access.</p>
                <h4>Forgot Password Mechanism:</h4>
                <p>In case a user forgets their password, systems often provide a mechanism to reset or recover the password. This may involve sending a reset link to the user's email or using other recovery methods.</p>
            </div>
        </div>
    </div>
  </section>
@endsection
