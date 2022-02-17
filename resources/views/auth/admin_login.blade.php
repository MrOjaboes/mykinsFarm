@extends('layouts.auth')

@section('content')
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-danger">

            <div class="card-header text-center">
                <a href="{{ url('/') }}"><img src="/guest/assets/images/Kins_International_Market.png" class="w-100" style="height:100px" alt="logo"></a>
            </div>
            <div class="card-body">
                <div>
                    @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-check-circle"></i></strong> {{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                </div>
                <p class="login-box-msg">Sign in to start your session</p>

               <livewire:admin.login />


                <!-- /.social-auth-links -->


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>


@endsection
