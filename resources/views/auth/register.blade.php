@extends('site.layouts.scaffold')
@push('title')
Register
@endpush
@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    a{
        text-decoration: none;
    }
</style>
@endpush
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

          <div class="d-flex justify-content-between mt-4 align-items-center">
          <h2>Registers</h2>
          <ol>
              <li><a href="{{route('index')}}">Home</a></li>
              <li>Registers</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
</main><!-- End #main -->
<section class="d-flex align-items-center">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Account Register</h2>
        </div>
        <div class="text-center mt-5"><button class="getstarted scrollto btn shadow-lg text-light"data-bs-toggle="modal" data-bs-target="#AuthorModal"  style="width:300px; height:50px; background-color:#3498DB;">Author Register</button></div>
        <div class="text-center mt-5"><button class="getstarted scrollto btn shadow-lg text-light"data-bs-toggle="modal" data-bs-target="#ReaderModal"  style="width:300px; height:50px; background-color:#3498DB;">Reader Register</button></div>
</div>
</section>



<!-- Author Modal -->
<div class="modal fade" id="AuthorModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Register</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <section id="contact" class="contact">
                <div class="container">
                    <form action="{{route('register')}}" method="POST" >
                    @csrf
                    <input type="hidden" name="role_id" value="2">
                        <div class="form-group">
                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                            @error('first_name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="form-group mt-4">
                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name"placeholder="Last Name" autofocus>
                            @error('last_name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="form-group mt-4">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="form-group mt-4">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password" required autocomplete="new-password">
                            @error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="form-group mt-4">
                            <input id="confirm-password" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"required autocomplete="new-password">
                        </div>
                        <div class="login_submit">
                            <label for="remember">
                            <input id="remember" type="checkbox">Show Password</label><br><br>
                        </div>
                            <button class="btn btn-primary mt-4" type="submit">Send Message</button>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>


{{-- Reader Modal --}}
<div class="modal fade" id="ReaderModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Register</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <section id="contact" class="contact">
                <div class="container">
                    <form action="{{route('register')}}" method="POST" >
                    @csrf
                    <input type="hidden" name="role_id" value="3">
                        <div class="form-group">
                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                            @error('first_name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="form-group mt-4">
                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name"placeholder="Last Name" autofocus>
                            @error('last_name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="form-group mt-4">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="form-group mt-4">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password" required autocomplete="new-password">
                            @error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="form-group mt-4">
                            <input id="confirm-password" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"required autocomplete="new-password">
                        </div>
                        <div class="login_submit">
                            <label for="remember">
                            <input id="remember" type="checkbox">Show Password</label><br><br>
                        </div>
                            <button class="btn btn-primary mt-4" type="submit">Send Message</button>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection
@push('script')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
@endpush
