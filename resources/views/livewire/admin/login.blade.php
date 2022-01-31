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
            <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                    Remember Me
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Sign In</button>
        </div>
        <!-- /.col -->
    </div>
</form>
