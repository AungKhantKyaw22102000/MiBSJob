@extends('admin.layouts.loginMaster')

@section('title', 'MiBS Team Login Form')

@section('content')
    <div class="row">
        <form action="{{ route('login') }}" method="POST">
            @error('terms')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            @csrf
            <div class="col-md-12 mb-3">
                <h2>Sign In</h2>
                <p>Enter your email and password to login</p>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-check form-check-primary form-check-inline">
                        <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                        <label class="form-check-label" for="form-check-default">
                            Remember me
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-4">
                    <button class="btn btn-secondary w-100" type="submit">SIGN IN</button>
                </div>
            </div>
        </form>
    </div>
@endsection
