@extends('layouts.main')

@section('container')

<div class="container mt-4">
<div class="row justify-content-center">
    <div class="col-lg-4">    
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal">Form Registrasi</h1>
            <form action="/register" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" require value="{{ old('name') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                    </div>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="username" class="form-control rounded-top @error('username') is-invalid @enderror" id="username" placeholder="Username" require value="{{ old('username') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                    </div>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control rounded-top @error('email') is-invalid @enderror" id="floatingInput" placeholder="Email" require value="{{ old('floatingInput') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                      <div class="icheck-primary">
                        <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                        <label for="agreeTerms">
                         I agree to the <a href="#">terms</a>
                        </label>
                      </div>
                    </div>
                    <div class="col-4">
                        <button class="btn btn-primary btn-block" type="submit">Register</button>
                    </div>
                </div>
            </form>
            <small class="d-block text-center mt-3">Already Registerd?<a href="/login"> Login Now!</a></small>
        </main>
    </div>
</div>
</div>
@endsection