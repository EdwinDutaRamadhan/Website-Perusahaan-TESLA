@extends('layout.tesla-admin')
@section('container')
    <div class="row justify-content-center">
        <div class="col-sm-4">
            @if (session()->has('register'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('register') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('checkout'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    {{ session('checkout') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <main class="form-signin">
                <form action="/shop/login" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">User Login</h1>        
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid  @enderror" name="email" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        <div class="invalid-feedback">
                            @error('email') 
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
        
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
                    <small class="d-block text-center mt-3">Not registered? <a href="{{ route('user-register') }}">Register Now!</a></small>
                    {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> --}}
                </form>
            </main>
        </div>
    </div>
@endsection
