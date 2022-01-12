<div>
    <form wire:submit.prevent="addProduct">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Product Title</label>
                <input type="text" class="form-control" wire:model="state.title"
                    placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Product Price</label>
                <input type="number" class="form-control" wire:model="state.price"
                    placeholder="Price">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Product Caption</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" wire:model="photo">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
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
</div>
