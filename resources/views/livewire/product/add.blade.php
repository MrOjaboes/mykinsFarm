
    <form wire:submit.prevent="addProduct" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Product Title</label>
                <input type="text" class="form-control" wire:model="state.name"
                    placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Product Price</label>
                <input type="number" class="form-control" wire:model="state.price"
                    placeholder="Price">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Product Caption</label>
                     <input type="file" class="form-control" wire:model="photo">
               </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Product Category</label>
              <select wire:model="state.category_id" class="form-control" id="">
                <option value="">----Select Category----</option>
                  @foreach ($categories as $cat)
                          <option value="{{$cat->id}}">{{$cat->title}}</option>
                  @endforeach
              </select>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Product Description</label>
                <textarea name="" wire:model="state.description" class="form-control"></textarea>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-success">Add Product</button>
        </div>
    </form>

