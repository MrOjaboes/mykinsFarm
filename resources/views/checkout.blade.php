@extends('layouts.auth')

@section('content')
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-danger">

            <div class="card-body">

                <form method="POST" action="{{ route('checkout') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="shipping_fullname" placeholder="Name">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" name="shipping_address" class="form-control" placeholder="Address">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="shipping_contact" class="form-control" placeholder="Address">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="shipping_state" class="form-control" placeholder="Address">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="shipping_city" class="form-control" placeholder="Address">
                    </div>

                    <div class="row">
                        <div class="col-8">

                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>


@endsection
