@extends('layout.tesla-admin')
@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <main class="form-registration">
                <form>
                    <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>        
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control" id="username" placeholder="username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
        
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Log in</button>
                    <small class="d-block text-center mt-3">Already registered? <a href="{{ route('user-login') }}">Login Now!</a></small>
                    {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> --}}
                </form>
            </main>
        </div>
    </div>
@endsection
