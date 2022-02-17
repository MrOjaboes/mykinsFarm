@extends('layouts.app')
@section('content')
    <x-navbar></x-navbar>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">User Profile</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @if (session()->has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><i class="fas fa-check-circle"></i></strong> {{ session()->get('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if (session()->has('errormessage'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><i class="fas fa-check-circle"></i></strong> {{ session()->get('errormessage') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">

                        <!-- About Me Box -->
                        <div class="card">
                            <div class="card-header" style="background-color:#891e19;color:#fff;">
                                <h3 class="card-title">About Me</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-book mr-1"></i> Total Item</strong>

                                <p class="text-muted">
                                    {{ $order->item_count}}
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>

                                <p class="text-muted">{{ $order->shipping_address}}</p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Contact</strong>

                                <p class="text-muted">
                                   {{$order->shipping_contact}}
                                </p>

                                <hr>
                                <strong><i class="fas fa-pencil-alt mr-1"></i> City</strong>

                                <p class="text-muted">
                                   {{$order->shipping_city}}
                                </p>

                                <hr>
                                <strong><i class="fas fa-pencil-alt mr-1"></i> State</strong>

                                <p class="text-muted">
                                   {{$order->shipping_state}}
                                </p>

                                <hr>
                                <strong><i class="fas fa-pencil-alt mr-1"></i> Total Price</strong>

                                <p class="text-muted">
                                   {{$order->grand_total}}
                                </p>

                                <hr>



                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#details"
                                            data-toggle="tab">Customer Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#settings"
                                            data-toggle="tab">Payment Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#items"
                                            data-toggle="tab">Items</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">

                                    <div class="active tab-pane" id="details">
                                        <form>

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Full Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="name" readonly
                                                        value="{{ $order->shipping_fullname }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Contact</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" name="email" readonly
                                                        value="{{ $order->shipping_contact }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Note</label>
                                                <div class="col-sm-10">
                                                    <textarea name="" class="form-control" cols="30" readonly rows="10">{{ $order->note }}</textarea>
                                                </div>
                                            </div>


                                        </form>
                                    </div>
                                    <div class="tab-pane" id="settings">
                                        <form class="form-horizontal" action="{{ route('update.payment',$order->id) }}" method="POST">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Payment Method </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" readonly name="payment_method"
                                                        value="{{$order->payment_method }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Payment Status</label>
                                                <div class="col-sm-10">
                                                    @if ($order->is_paid == 0)
                                                    <select name="is_paid" id="" class="form-control">
                                                        <option value="0">pay</option>
                                                        <option value="1">Mark Payment to complete Transaction</option>
                                                    </select>
                                                    @else
                                                    <span class="btn btn-success"> <strong><i class="fas fa-check-circle"></i></strong> Paid</span>
                                                    @endif


                                                </div>
                                            </div>
                                            @if ($order->status == "completed")
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Shippment Status</label>
                                                <div class="col-sm-10">
                                                    <input type="text" readonly value="{{$order->status }}" class="form-control" id="">
                                                </div>
                                            </div>
                                                @else
                                                <div class="form-group row">
                                                    <label for="inputName2" class="col-sm-2 col-form-label">Shippment Status</label>
                                                    <div class="col-sm-10">
                                                        <select name="status" id="" class="form-control">
                                                            <option value="{{$order->status }}">{{$order->status }}</option>
                                                            <option value="pending">Pending</option>
                                                            <option value="processing">Processing</option>
                                                            <option value="completed">Completed</option>
                                                            <option value="decline">Decline</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="offset-sm-2 col-sm-10">
                                                        <button type="submit" class="btn btn-success">Update Details</button>
                                                    </div>
                                                </div>
                                            @endif
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="items">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Unit Price</th>
                                                    <th>Qty</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($items as $item)
                                                <tr>
                                                    <td>{{App\Http\Controllers\HomeController::GetProductById($item->product_id)}}</td>
                                                    <td>${{$item->price}}</td>
                                                    <td>{{$item->quantity}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
