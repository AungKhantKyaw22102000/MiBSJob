@extends('admin.layouts.loginMaster')

@section('title', 'MiBS Team Register Form')

@section('content')
    <div class="row">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="col-md-12 mb-3">
                <h2>Create User for Management</h2>
                <p>Enter your Employee ID & Email for sure to create</p>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Employee Name</label>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control add-billing-address-input @error('name') is-invalid @enderror">
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Employee ID</label>
                    @error('employee_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="text" name="employee_id" value="{{ old('employee_id') }}" class="form-control add-billing-address-input @error('employee_id') is-invalid @enderror">
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Employee Email</label>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Employee Position</label>
                    @error('position')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="text" name="position" value="{{ old('position') }}" class="form-control @error('position') is-invalid @enderror add-billing-address-input">
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="gender">Gender</label>
                    @error('gender')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <select name="gender" class="form-control @error('gender') is-invalid @enderror" id="gender">
                        <option value="">Select User Gender</option>
                        <option value="male">MALE</option>
                        <option value="female">FEMALE</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="role">User Role</label>
                    @error('role')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <select name="role" class="form-control @error('role') is-invalid @enderror" id="role">
                        <option value="">Select User Role</option>
                        <option value="hr">HR</option>
                        <option value="admin">Admin</option>
                        <option value="tl">Team Leader</option>
                        <option value="it">IT</option>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    @error('password_confirmation')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-4">
                    <button class="btn btn-secondary w-100" type="submit">ADD</button>
                </div>
            </div>
        </form>
    </div>
@endsection
