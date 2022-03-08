@extends('layouts.app')
@section('content')
<x-navbar></x-navbar>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard / Edit Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('products') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->

                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Edit Product</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('product-edit',$product->id)}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Title</label>
                                        <input type="text" class="form-control" value="{{$product->name}}"
                                            name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Price</label>
                                        <input type="number" class="form-control" value="{{$product->price}}"
                                            name="price">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Naira Eqv.</label>
                                        <input type="number" class="form-control" value="{{$product->naira_price}}"
                                            name="naira_price">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Quantity</label>
                                        <input type="text" class="form-control" value="{{$product->quantity}}"
                                            name="quantity">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Caption</label>
                                        <div class="custom-file">
                                            <input type="file" class="form-control" name="photo">
                                           </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Product Category</label>
                                      <select name="category_id" class="form-control" id="">
                                        <option value="{{$product->category_id}}">{{$product->category->title}}</option>
                                          @foreach ($categories as $cat)
                                                  <option value="{{$cat->id}}">{{$cat->title}}</option>
                                          @endforeach
                                      </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Product Description</label>
                                        <textarea name="description" value="{{$product->description}}" class="form-control">{{$product->description}}</textarea>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Update Product</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->



                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-2">
                        <div class="card card-success">
                            <div class="card-body">
                                <img src="{{ asset('/storage/products/' .$product->photo) }}" class="img-thumbnail" alt="">
                            </div>
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
