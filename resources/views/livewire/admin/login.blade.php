<form wire:submit.prevent="login">
    <div class="input-group mb-3">
        <input type="email" class="form-control" wire:model.defer="email" placeholder="Email">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong style="color: :red;">{{ $message }}</strong>
        </span>
    @enderror
    <div class="input-group mb-3">
        <input type="password" wire:model.defer="password" class="form-control" placeholder="Password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>

    </div>
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="row">
        <div class="col-8">
            <p class="mb-1">
                <a href="{{ route('password.request') }}">I forgot my password</a>
            </p> 
        </div>
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-block" style="background-color:#891e19;color:white">Sign In</button>
        </div>
        <!-- /.col -->
    </div>
</form>
