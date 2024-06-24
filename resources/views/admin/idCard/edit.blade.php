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
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->
                <div class="row invoice layout-top-spacing layout-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="doc-container">
                            <form action="{{ route('admin#idCardEdit') }}" class="form-control my-3" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="invoice-content">
                                            <div class="invoice-detail-body">
                                                <div class="invoice-detail-title">
                                                    <div class="invoice-logo">
                                                        <div class="profile-image">
                                                            <div class="img-uploader-content">
                                                                <img src="{{ asset('storage/employeePhoto/'. $idCard->image)}}" class=" img-radius" alt="">
                                                                <input type="file" class="filepond"
                                                                    name="employeePhoto" accept="image/png, image/jpeg, image/gif"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="invoice-detail-header">
                                                    <div class="row justify-content-between">
                                                        <div class="col-xl-12 invoice-address-company">
                                                            <h4>Edit Employee ID Card Information:-</h4>
                                                            <div class="invoice-address-company-fields">
                                                                <div class="form-group row">
                                                                    <label for="employeeId" class="col-sm-3 col-form-label col-form-label-sm">Employee ID</label>
                                                                    <div class="col-sm-9">
                                                                        @error('employeeId')
                                                                            <small class="text-danger">{{ $message }}</small>
                                                                        @enderror
                                                                        <input type="text" value="{{ $idCard->employee_id }}" readonly class="form-control @error('employeeId') is-invalid @enderror form-control-sm" name="employeeId" id="employeeId" placeholder="Employee ID">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="employeeName" class="col-sm-3 col-form-label col-form-label-sm">Employee Name</label>
                                                                    <div class="col-sm-9">
                                                                        @error('employeeId')
                                                                            <small class="text-danger">{{ $message }}</small>
                                                                        @enderror
                                                                        <input type="text" value="{{ $idCard->name }}" class="form-control @error('employeeName') is-invalid @enderror form-control-sm" name="employeeName" id="employeeName" placeholder="Employee Name">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="employeeDepartment" class="col-sm-3 col-form-label col-form-label-sm">Department</label>
                                                                    <div class="col-sm-9">
                                                                        @error('employeeId')
                                                                            <small class="text-danger">{{ $message }}</small>
                                                                        @enderror
                                                                        <input type="text" value="{{ $idCard->department }}" class="form-control @error('employeeDepartment') is-invalid @enderror form-control-sm" name="employeeDepartment" id="employeeDepartment" placeholder="eg: food panda, wave, .etc">
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
                                                                    @error('employeeId')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                    <textarea class="form-control @error('employeeAddress') is-invalid @enderror" name="employeeAddress" id="employeeAddress" placeholder='Employee Address' style="height: 88px;">{{ $idCard->address }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="invoice-actions-btn">
                                            <div class="invoice-action-btn">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-4">
                                                        <button type="submit" class="btn btn-success  mb-2 me-4">
                                                            <span class="btn-text-inner">Save</span>
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
