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
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="{{ $showEdit ? 'updateCat' : 'storeCat' }}">
                        <div class="form-group">
                            <input type="text" wire:model="state.title" placeholder="Enter Category Title and hit Enter" class="form-control">
                        </div>
                        {{-- <div class="form-group">
                            <button class="btn btn-outline-success float-end" type="submit">Add Category</button>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> </h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-condensed table-hover">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Date Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($categories as $cat)
                          <tr>
                            <td>{{$cat->title}}</td>
                            <td>{{$cat->created_at}}</td>
                            <td>
                                <a href="" wire:click.prevent="edit({{ $cat }})" class="btn btn-outline-success">Edit</a>
                                <a href="" wire:click.prevent="delete({{ $cat->id }})" class="btn btn-outline-danger">Delete</a></td>
                        </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- /.card-body -->
            </div>
            {{$categories->links()}}
            <!-- /.card -->
        </div>
    </div>
</div>
