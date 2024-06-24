@extends('admin.layouts.master')

@section('title','ID Card Creation')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="middle-content container-xxl p-0">
                 <!-- BREADCRUMB -->
                 <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">App</a></li>
                            <li class="breadcrumb-item"><a href="#">ID Card</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->
                <div class="row invoice layout-top-spacing layout-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h2>Create ID Cards</h2>
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="fa-solid fa-check"></i> {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <ul class="nav nav-pills" id="animateLine" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="animated-underline-home-tab" data-bs-toggle="tab" href="#animated-underline-home" role="tab" aria-controls="animated-underline-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Home</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="animated-underline-bulkCreate-tab" data-bs-toggle="tab" href="#animated-underline-bulkCreate" role="tab" aria-controls="animated-underline-bulkCreate" aria-selected="false" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg> Bulk Create</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="doc-container">
                            <div class="tab-content" id="animateLineContent-4">
                                <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel" aria-labelledby="animated-underline-home-tab">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                            <form action="{{ route('admin#idCardCreate') }}" class="form-control my-3" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="invoice-content">
                                                            <div class="invoice-detail-body">
                                                                <div class="invoice-detail-title">
                                                                    <div class="invoice-logo">

                                                                    </div>
                                                                </div>

                                                                <div class="invoice-detail-header">
                                                                    <div class="row justify-content-between">
                                                                        <div class="col-xl-12 invoice-address-company">
                                                                            <h4>Create Employee ID Card One by One:-</h4>
                                                                            <div class="invoice-address-company-fields">
                                                                                <div class="form-group row">
                                                                                    <label for="employeeId" class="col-sm-3 col-form-label col-form-label-sm">Employee ID</label>
                                                                                    <div class="col-sm-9">
                                                                                        @error('employeeId')
                                                                                            <small class="text-danger">{{ $message }}</small>
                                                                                        @enderror
                                                                                        <input type="text" value="{{ old('employeeId') }}" class="form-control @error('employeeId') is-invalid @enderror form-control-sm" name="employeeId" id="employeeId" placeholder="Employee ID">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="employeeName" class="col-sm-3 col-form-label col-form-label-sm">Employee Name</label>
                                                                                    <div class="col-sm-9">
                                                                                        @error('employeeName')
                                                                                            <small class="text-danger">{{ $message }}</small>
                                                                                        @enderror
                                                                                        <input type="text" value="{{ old('employeeName') }}" class="form-control @error('employeeName') is-invalid @enderror form-control-sm" name="employeeName" id="employeeName" placeholder="Employee Name">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="employeeDepartment" class="col-sm-3 col-form-label col-form-label-sm">Department</label>
                                                                                    <div class="col-sm-9">
                                                                                        @error('employeeDepartment')
                                                                                            <small class="text-danger">{{ $message }}</small>
                                                                                        @enderror
                                                                                        <input type="text" value="{{ old('employeeDepartment') }}" class="form-control @error('employeeDepartment') is-invalid @enderror form-control-sm" name="employeeDepartment" id="employeeDepartment" placeholder="eg: food panda, wave, .etc">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="formFile" class="col-sm-3 col-form-label col-form-label-sm">Photo</label>
                                                                                    <div class="col-sm-9">
                                                                                        @error('employeePhoto')
                                                                                            <small class="text-danger">{{ $message }}</small>
                                                                                        @enderror
                                                                                        <input class="form-control file-upload-input @error('employeePhoto') is-invalid @enderror form-control-sm" name="employeePhoto" type="file" id="formFile">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="invoice-detail-note">
                                                                    <div class="row">
                                                                        <div class="col-md-12 align-self-center">
                                                                            <div class="form-group row invoice-note">
                                                                                <label for="employeeAddress" class="col-sm-12 col-form-label col-form-label-sm">Address:</label>
                                                                                <div class="col-sm-12">
                                                                                    @error('employeeAddress')
                                                                                        <small class="text-danger">{{ $message }}</small>
                                                                                    @enderror
                                                                                    <textarea class="form-control @error('employeeAddress') is-invalid @enderror" name="employeeAddress" id="employeeAddress" placeholder='Employee Address' style="height: 88px;">{{ old('employeeAddress') }}</textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 my-3">
                                                            <div class="invoice-actions-btn">
                                                                <div class="invoice-action-btn">
                                                                    <div class="row">
                                                                        <div class="col-xl-12 col-md-4">
                                                                            <button type="submit" class="btn btn-success  mb-2 me-4">
                                                                                <span class="btn-text-inner">Save One By One</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <button class="btn btn-secondary bottom-center mb-2 me-4 _effect--ripple waves-effect waves-light">Button</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="animated-underline-bulkCreate" role="tabpanel" aria-labelledby="animated-underline-bulkCreate-tab">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                        <form action="" class="form-control my-3" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-xl-9">
                                                    <div class="invoice-content">
                                                        <div class="invoice-detail-body">
                                                            <div class="invoice-detail-header">
                                                                <div class="row justify-content-between">
                                                                    <div class="col-xl-12 invoice-address-company">
                                                                        <h4>Bulk Create Employee ID Card:-</h4>
                                                                        <div class="invoice-address-company-fields">
                                                                            <div class="form-group row">
                                                                                <label for="employeeId" class="col-sm-3 col-form-label col-form-label-sm">Put Excel file</label>
                                                                                <div class="col-sm-9">
                                                                                    <div class="multiple-file-upload">
                                                                                        <input type="file"
                                                                                            class="filepond file-upload-multiple"
                                                                                            name="bulkUpload"
                                                                                            multiple
                                                                                            data-allow-reorder="true"
                                                                                            data-max-file-size="30MB"
                                                                                            data-max-files="3"
                                                                                            accept="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 my-3">
                                                    <div class="invoice-actions-btn">
                                                        <div class="invoice-action-btn">
                                                            <div class="row">
                                                                <div class="col-xl-12 col-md-4">
                                                                    <button type="submit" class="btn btn-success  mb-2 me-4">
                                                                        <span class="btn-text-inner">Bulk Save</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  BEGIN FOOTER  -->
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © <span class="dynamic-year">2024</span> <a target="_blank" href="https://designreset.com/equation/">DesignReset</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
            </div>
        </div>
        <!--  END FOOTER  -->
    </div>
    <!--  END CONTENT AREA  -->
@endsection

@section('scriptSection')
    <script>

    </script>
@endsection
