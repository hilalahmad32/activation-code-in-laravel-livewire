<div>
    <x-slot name='title'>Login</x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 authentication-form-wrapper">
                <div class="company-logo">
                    <a href="https://app.lanaieka.com/" class="logo img-responsive">
                        <img src="https://app.lanaieka.com/uploads/company/eaa301c5f98057dd9d2d5df7b4d3786d.png"
                            class="img-responsive" alt="Lanaieka">
                    </a>
                </div>
                <div class="mtop40 authentication-form">
                    <h1>Login</h1>
                    <div class="row">
                    </div>
                    @if (session()->get('success'))
                        <div class="alert alert-success">
                            <strong>{{ session('success') }}</strong>
                        </div>
                    @endif
                    @if (session()->get('error'))
                        <div class="alert alert-danger">
                            <strong>{{ session('error') }}</strong>
                        </div>
                    @endif
                    <form wire:submit.prevent='login'>
                        <div class="form-group">
                            <label for="email" class="control-label">Email Address</label>
                            <input type="email" wire:model.lazy='email' class="form-control" autofocus="1">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" wire:model.lazy='password' class="form-control">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-block">Login</button>
                        </div>
                        <div class="form-group">
                            <span>If you have't Account <a href="{{ route('users.registration') }}"> Register </a>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
