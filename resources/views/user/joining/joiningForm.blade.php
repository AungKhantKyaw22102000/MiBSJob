@extends('user.layouts.joiningMaster')

@section('title','Joining Form')

@section('content')
    <!-- Main -->
    <main>
        <!-- Contact  -->
        <div class="contact">
            <div class="container">
                <!-- Form -->
                <form method="POST" id="contactForm" enctype="multipart/form-data" name="contactForm" action="" autocomplete="on">
                    <div class="row">
                        <div class="col-lg-12" id="mainContent">
                            <!-- Personal Details -->
                            <div class="row box first">
                                <div class="box-header">
                                    <h3><strong>1</strong>Personal Details</h3>
                                    <p>Personal Details can be set here.</p>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="emporocess" class="form-control" name="empprocess" placeholder="Enter Process" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="ssb" class="form-control" name="ssb" placeholder="Enter SSB Card Number" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="emergency" class="form-control" name="emergency" placeholder="Enter Emergency contact" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="nrc" class="form-control" name="nrc" placeholder="Enter NRC Number" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="c_address" class="form-control" name="c_address" placeholder="Enter Current Address" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="email" class="form-control" name="email" placeholder="Enter VALID EMAIL and check the result" autocomplete="off" type="email" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <span>Date of Birth</span>
                                        <input id="dob" class="form-control" name="dob" placeholder="Enter Date of Birth" type="date" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="pob" class="form-control" name="pob" placeholder="Enter Place of Birth" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="religion" class="form-control" name="religion" placeholder="Enter Religion" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" id="gender" name="gender" value="General Information" />
                                        <select id="genderList" class="wide" name="gender">
                                            <option>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="nationality" class="form-control" name="nationality" placeholder="Enter Nationality" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" id="marital_status" name="marital_status" value="General Information" />
                                        <select id="maritalList" class="wide" name="marital_status">
                                            <option>Marital Status</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="blood_g" class="form-control" name="blood_g" placeholder="Enter Blood Group" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="children" class="form-control" name="children" placeholder="Enter No of children" type="text" />
                                    </div>
                                </div>
                            </div>
                            <!-- Personal Details End -->

                            <!-- Message -->
                            <div class="row box">
                                <div class="box-header">
                                    <h3><strong>2</strong>Family Information</h3>
                                    <p>Father Information will be filled here.</p>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="father_name" class="form-control" name="father_name" placeholder="Enter Father Name" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="father_age" class="form-control" name="father_age" placeholder="Enter Father Age" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="father_occupation" class="form-control" name="father_occupation" placeholder="Enter Father Occupation" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" id="father_depen" name="father_depen" value="General Information" />
                                        <select id="father_depenList" class="wide" name="father_depen">
                                            <option value=" ">Dependent(Yes/No)</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="box-header">
                                    <p>Mother Information will be filled here.</p>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="mother_name" class="form-control" name="mother_name" placeholder="Enter Mother Name" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="mother_age" class="form-control" name="mother_age" placeholder="Enter Mother Age" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="mother_occupation" class="form-control" name="mother_occupation" placeholder="Enter Mother Occupation" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" id="mother_depen" name="mother_depen" value="General Information" />
                                        <select id="mother_depenList" class="wide" name="mother_depen">
                                            <option value=" ">Dependent(Yes/No)</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="box-header">
                                    <p>Spouse Information will be filled here.</p>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="spouse_name" class="form-control" name="spouse_name" placeholder="Enter Spouse Name" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="spouse_age" class="form-control" name="spouse_age" placeholder="Enter Spouse Age" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="spouse_occupation" class="form-control" name="spouse_occupation" placeholder="Enter Spouse Occupation" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" id="spouse_depen" name="spouse_depen" value="General Information" />
                                        <select id="spouse_depenList" class="wide" name="spouse_depen">
                                            <option value=" ">Dependent(Yes/No)</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Message End -->

                            <!-- File Uploader -->
                            <div class="row box">
                                <div class="box-header">
                                    <h3><strong>3</strong>Attachment</h3>
                                    <p>Only jpg, png, pdf, max. 1Mb.</p>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="file" name="photo" class="upload-box form-control" />
                                    </div>
                                </div>
                            </div>
                            <!-- File Uploader End -->

                            <!-- Company Offered -->
                            <div class="row box">
                                <div class="box-header">
                                    <h3><strong>4</strong>Company Offered Salary Break Up</h3>
                                    <p>Comany Offered for Employees</p>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="basic_salary" class="form-control" name="basic_salary" placeholder="Enter Basic Salary" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="mobile_provide" class="form-control" name="mobile_provide" placeholder="Enter Mobile Provided" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="meal" class="form-control" name="meal" placeholder="Enter Meal Provided" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="incentive" class="form-control" name="incentive" placeholder="Enter Incentive Provided" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="transportation" class="form-control" name="transportation" placeholder="Enter Transportation Provided" type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="ctc" class="form-control" name="ctc" placeholder="Enter CTC Provided" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="inputMessage" class="form-control" name="message" placeholder="Enter Remark"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- Company Offered End -->

                            <!-- Terms -->
                            <div class="row box">
                                <div class="box-header">
                                    <h3><strong>5</strong>Submission</h3>
                                    <p>Please accept the terms and conditions below.</p>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <!-- Job Rotation -->
                                        <input type="checkbox" id="cbxRotation" class="inp-cbx" name="rotation" value="yes" />
                                        <label class="cbx terms" for="cbxRotation">
                                            <span>
                                                <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                </svg>
                                            </span>
                                            <span>I will be available to work in rotational shift as well, it may be included night shift, morning shift, (24/7)...(For Operation).</span>
                                        </label>
                                        <!-- Job Rotation End -->

                                        <!-- HR Policies & Procedure -->
                                        <input type="checkbox" id="cbxPolicies" class="inp-cbx" name="policies" value="yes" />
                                        <label class="cbx terms" for="cbxPolicies">
                                            <span>
                                                <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                </svg>
                                            </span>
                                            <span>HR Policies & Procedure: I have read, accept, and acknowledged all HR policies mentioned in the employee handbook.</span>
                                        </label>
                                        <!-- HR Policies & Procedure End -->

                                        <input type="checkbox" id="cbxTerms" class="inp-cbx" name="terms" value="yes" />
                                        <label class="cbx " for="cbxTerms">
                                            <span>
                                                <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                </svg>
                                            </span>
                                            <span>Accept <a href="pdf/terms.pdf" class="terms-link" target="_blank">Terms and Conditions</a>.</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Terms End -->

                            <!-- Submit-->
                            <div class="row box">
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn-form-func">
                                            <span class="btn-form-func-content">Submit</span>
                                            <span class="icon"><i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Submit -->
                        </div>
                        <div class="col-lg-4" id="sidebar">
                            <!-- Contact Info Container -->
                            <!-- Contact Info Container End -->
                        </div>
                    </div>
                </form>
                <!-- Form End -->
            </div>
        </div>
        <!-- Contact End -->
    </main>
    <!-- Main End -->
@endsection
