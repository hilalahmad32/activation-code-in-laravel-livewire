<div>
    <x-slot name='title'>Register</x-slot>
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
                    <h1>Register</h1>
                    <div class="row">
                    </div>
                    <form wire:submit.prevent='create'>
                        @csrf
                        <div class="form-group">
                            <label for="fullname" class="control-label">Full Name:</label>
                            <input type="text" wire:model.lazy='name' class="form-control" autofocus="1">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="username" class="control-label">Username:</label>
                            <input type="text" wire:model.lazy='username' class="form-control" autofocus="1">
                            @error('username')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label">Email Address</label>
                            <input type="email" wire:model.lazy="email" class="form-control" autofocus="1">
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
                            <label for="profile" class="control-label">Upload profile</label>
                            <input type="file" wire:model.lazy='profile' class="form-control">
                            @error('profile')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @if ($profile)
                                <img src="{{ $profile->temporaryUrl() }}" width="48" height="48"
                                    alt="">
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-block">Register</button>
                        </div>
                        <div class="form-group">
                            <span>If you have account <a href="{{ route('users.login') }}"> Login </a>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
