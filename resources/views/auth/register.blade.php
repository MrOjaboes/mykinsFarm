@extends('layouts.auth')

@section('content')

<div class="register-box">
    <div class="card card-outline card-danger">
      <div class="card-header text-center">
        <a href="{{url('/')}}" class="h1"><b>Kins</b> International</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="name" placeholder="Full name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              {{-- <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                 I agree to the <a href="#">terms</a>
                </label>
              </div> --}}
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-block" style="background-color:#891e19;color:white">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>


        <a href="{{url('login')}}" class="text-center" style="color:#891e19;">I already have an account</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>


@endsection
