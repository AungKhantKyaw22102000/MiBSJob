@extends('admin.layouts.master')

@section('title', 'User Profile')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="middle-content container-xxl p-0">
                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Users</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Account Settings</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->

                <div class="account-settings-container layout-top-spacing">

                    <div class="account-content">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h2>Settings</h2>

                                <ul class="nav nav-pills" id="animateLine" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="animated-underline-home-tab" data-bs-toggle="tab" href="#animated-underline-home" role="tab" aria-controls="animated-underline-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Home</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="animated-underline-preferences-tab" data-bs-toggle="tab" href="#animated-underline-preferences" role="tab" aria-controls="animated-underline-preferences" aria-selected="false" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Password</button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-content" id="animateLineContent-4">
                            <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel" aria-labelledby="animated-underline-home-tab">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                        <form class="section general-info" action="" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="info">
                                                <h6 class="">General Information</h6>
                                                <div class="row">
                                                    <div class="col-lg-11 mx-auto">
                                                        <div class="row">
                                                            <div class="col-xl-2 col-lg-12 col-md-4">
                                                                <div class="profile-image  mt-4 pe-md-4">

                                                                    <div class="img-uploader-content">
                                                                        <input type="file" class="filepond"
                                                                            name="userPhoto" />
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                                <div class="form">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="employeeId">Employee ID</label>
                                                                                <input type="text" name="employeeId" class="form-control mb-3" id="employeeId" placeholder="Employee ID" readonly value="{{ Auth::user()->employee_id }}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="employeeName">Employee Name</label>
                                                                                <input type="text" name="employeeName" class="form-control mb-3" id="employeeName" placeholder="Full Name" value="{{ Auth::user()->name }}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="employeePosition">Position</label>
                                                                                <input type="text" name="employeePosition" class="form-control mb-3" id="employeePosition" placeholder="Designer" value="{{ Auth::user()->position }}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="employeeRole">Role</label>
                                                                                <input type="text" name="employeeRole" class="form-control mb-3" id="employeeRole" placeholder="Role" readonly value="{{ Auth::user()->role }}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="gender">Gender</label>
                                                                                <select class="form-select mb-3" id="gender">
                                                                                    <option>Select Gender</option>
                                                                                    <option @if(Auth::user()->gender == 'male') selected @endif >Male</option>
                                                                                    <option @if(Auth::user()->gender == 'female') selected @endif >Female</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="employeeEmail">Email</label>
                                                                                <input type="text" class="form-control mb-3" id="employeeEmail" name="employeeEmail" placeholder="Write your email here" value="{{ Auth::user()->email }}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12 mt-1">
                                                                            <div class="form-group text-end">
                                                                                <button class="btn btn-secondary">Save</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>

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
                            <div class="tab-pane fade" id="animated-underline-preferences" role="tabpanel" aria-labelledby="animated-underline-preferences-tab">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                        <form class="section general-info" action="" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="info">
                                                <h6 class="">Change Password</h6>
                                                <div class="row">
                                                    <div class="col-lg-11 mx-auto">
                                                        <div class="row">

                                                            <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                                <div class="form">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="oldPassword">Old Password</label>
                                                                                <input type="password" name="oldPassword" class="form-control mb-3" id="oldPassword" placeholder="Old Password" value="">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="newPassword">New Password</label>
                                                                                <input type="password" name="newPassword" class="form-control mb-3" id="newPassword" placeholder="New Password" value="">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="confirmPassword">Confirm Password</label>
                                                                                <input type="password" name="confirmPassword" class="form-control mb-3" id="confirmPassword" placeholder="Confirm Password" value="">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12 mt-1">
                                                                            <div class="form-group text-end">
                                                                                <button class="btn btn-secondary">Save</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>

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
