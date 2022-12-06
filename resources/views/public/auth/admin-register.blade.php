@extends('layout.tesla-admin')
@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">
            
            <main class="form-registration">
                <form action="/admin/register" method="POST">
                    @csrf
                    <input type="hidden" name="role" value="Admin">
                    <h1 class="h3 mb-3 fw-normal text-center">Admin Registration</h1>
                    <div class="form-floating">
                        <input type="text" name="name"
                            class="form-control rounded-top @error('name') is-invalid  @enderror" id="name"
                            placeholder="name" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        <div class="invalid-feedback">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control  @error('username') is-invalid  @enderror"
                            id="username" placeholder="username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        <div class="invalid-feedback">
                            @error('username')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control  @error('email') is-invalid  @enderror"
                            id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        <div class="invalid-feedback">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control rounded-bottom  @error('password') is-invalid  @enderror" id="password"
                            placeholder="Password" required>
                        <label for="password">Password</label>
                        <div class="invalid-feedback">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                    <small class="d-block text-center mt-3">Already registered? <a href="{{ route('user-login') }}">Login
                            Now!</a></small>
                    {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> --}}
                </form>
            </main>
        </div>
    </div>
@endsection
