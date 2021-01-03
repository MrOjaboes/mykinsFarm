<div>
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
        </div>
    </div>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><a href="{{route('add-product')}}" class="btn btn-outline-success">Add Product</a></h3>
              <div class="card-tools">
                 
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                     <th>Title</th>
                    <th>Date Added</th>
                    <th>Price</th>
                    <th>Caption</th>
                    <th>Category</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($products as $product)
                 <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->created_at}}</td>
                    <td># {{$product->price}}</td>
                    <td><img id="img" src="{{ asset('/storage/products/' .$product->photo) }}"
                        width="100px" class="img-circle" alt="">
                </td>
                    <td>{{$product->category->title}}</td>
                <td><a href="{{route('product-details',$product->id)}}" class="btn btn-outline-info">Details</a>
                 <a href="{{route('product-edit',$product->id)}}" class="btn btn-outline-success">Edit</a>
                  <a href="" wire:click.prevent="delete({{ $product->id }})" class="btn btn-outline-danger">Delete</a></td>
                  </tr>
                 @endforeach

                </tbody>
              </table>
            </div>

            <!-- /.card-body -->
          </div>
          ffff
          <!-- /.card -->
        </div>
      </div>
</div>
