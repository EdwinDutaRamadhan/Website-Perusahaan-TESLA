@extends('layout.tesla-admin')
@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-signin">
                <form>
                    <h1 class="h3 mb-3 fw-normal text-center">User Login</h1>        
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
        
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
                    <small class="d-block text-center mt-3">Not registered? <a href="{{ route('user-register') }}">Register Now!</a></small>
                    {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> --}}
                </form>
            </main>
        </div>
    </div>
@endsection
