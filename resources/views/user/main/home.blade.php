@extends('user.layouts.master')

@section('title', 'MiBS | Job Application Form')

@section('content')
    <div class="container-fluid">
        <div class="row row-height">
            <div class="col-xl-4 col-lg-4 content-left">
                <div class="content-left-wrapper">
                    <a href="index.php" id="logo"><img src="{{ asset('user/img/logo2.webp') }}" alt="" width="100" height="45"></a>
                    <div id="social">
                        <ul>
                            <li><a href="https://www.facebook.com/MasconInternational?mibextid=PtKPJ9" target="_blank"><i
                                        class="icon-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQE2tC2Lu-NCEgAAAY1TlxX4DsqAu3IDpPOkmuMEzHeMMYQpRH2zU0swbYM1F8uV_eZjG7gC9YLgiyGvesdM9hYBRGNFLyFIx-L8C4twUCFWHpXkr8XaMWEFa7_35Fs0e9_EF1Q=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fmibsmayanmar%2F"
                                    target="_blank"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- /social -->
                    <div>
                        <figure>
                            <img src="{{ asset('user/img/info_graphic_1.svg') }}" alt="" class="img-fluid" width="270"
                                height="270">
                        </figure>
                        <h2>We are Hiring</h2>
                        <p>Mascon International Business Services (MIBS) in Myanmar is a subsidiary to Mascon, an
                            organization with almost 40 years of legacy in offering many cutting edge business solutions to
                            diverse industries across the globe. Founded and incorporated in the year 1981 in India, Mascon
                            delivers next generation outsourcing solutions and services in IT, Engineering and Business
                            Process.</p>
                        <a href="#start" class="btn_1 rounded mobile_btn yellow">Start Now!</a>
                    </div>
                    <div class="copy">© 2022 Madlab</div>
                </div>
                <!-- /content-left-wrapper -->
            </div>
            <!-- /content-left -->
            <div class="col-xl-8 col-lg-8 content-right" id="start">
                <div id="wizard_container">
                    <div id="top-wizard">
                        <span id="location"></span>
                        <div id="progressbar"></div>
                    </div>
                    <!-- /top-wizard -->
                    <form id="wrapped" action="{{ route('user#apply') }}" method="POST" enctype="multipart/form-data" class="fl-form fl-style-1 wizard-form"
                        novalidate="novalidate">
                        @csrf
                        <input id="website" name="website" type="text" value="">
                        <!-- Leave for security protection, read docs for details -->
                        <div id="middle-wizard">
                            <div class="step">
                                <h2 class="section_title">Presentation</h2>
                                <h3 class="main_question">Personal info</h3>
                                <div class="form-group add_top_30">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="applyerName" id="name" class="form-control"
                                        autocomplete="off" onchange="getVals(this, 'name_field');">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="applyerPhone" id="phone" class="form-control"
                                        autocomplete="off">
                                </div>
                                <div class="form-group add_bottom_30">
                                    <div class="styled-select">
                                        <label for="d_pos">Choose Your Desire Position</label>
                                        <div class="fl-wrap fl-wrap-select fl-is">
                                            <select class="form-control fl-select" id="d_pos" name="desiredPosition">
                                                <option value="">Choose a desire position</option>
                                                <option value="Agent">Call Center Agent</option>
                                                <option value="Team Leader">Team Leader</option>
                                                <option value="QA">Call Center Quality Analyst(QA)</option>
                                                <option value="OM">Operation Manager</option>
                                                <option value="IT">Software Infrastructure Engineer</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <label for="have_nrc">NRC</label>
                                <div class="form-group radio_input">
                                    <label for="have_nrc" class="container_radio me-3">Have NRC
                                        <input type="radio" id="have_nrc" name="applyerNrc" value="Yes">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label for="doesnot_have_nrc" class="container_radio">Not Have NRC
                                        <input type="radio" id="doesnot_have_nrc" name="applyerNrc" value="No">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <label for="yes_edu_purpose">Education Purpose</label>
                                <div class="form-group radio_input">
                                    <label for="yes_edu_purpose" class="container_radio me-3">Yes
                                        <input type="radio" id="yes_edu_purpose" name="educationPurpose" value="Yes">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label for="no_edu_purpose" class="container_radio">NO
                                        <input type="radio" id="no_edu_purpose" name="educationPurpose" value="No">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group add_bottom_30 add_top_20">
                                    <label for="fileupload">Upload Resume<br><small>(File accepted: .pdf, .doc/docx - Max
                                            file size: 15MB for demo limit)</small></label>
                                    <div class="fileupload">
                                        <input type="file" id="fileupload" name="applyerCV"
                                            accept=".pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                    </div>
                                </div>
                            </div>
                            <!-- /step-->

                            <!-- /Start Branch ============================== -->
                            <div class="step">
                                <h2 class="section_title">Education Level</h2>
                                <div class="form-group">
                                    <label class="container_radio version_2">High School
                                        <input type="radio" name="educationLevel" value="High School">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">Bachelor's Degree
                                        <input type="radio" name="educationLevel" value="Bachelor's Degree">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">Master' Degree
                                        <input type="radio" name="educationLevel" value="Master' Degree">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">PhD
                                        <input type="radio" name="educationLevel" value="PhD">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <h2 class="section_title">Work Experience</h2>
                                <h3 class="main_question">Do You have Work Experience in Call Center?</h3>
                                <div class="form-group">
                                    <label class="container_radio version_2">No Experience
                                        <input type="radio" name="workExperience" value="No Experience">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">1-2 years
                                        <input type="radio" name="workExperience" value="1-2 years">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">3-5 years
                                        <input type="radio" name="workExperience" value="3-5 years">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">6+ years
                                        <input type="radio" name="workExperience" value="6+ years">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <small>* Start branch radio based </small>
                            </div>

                            <div class="step">
                                <h2 class="section_title">English Skill</h2>
                                <h3 class="main_question">Are you available for work?</h3>
                                <div class="form-group">
                                    <label class="container_radio version_2">Basic
                                        <input type="radio" name="englishSkill" value="Basic">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">Intermediate
                                        <input type="radio" name="englishSkill" value="Intermediate">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">Advanced
                                        <input type="radio" name="englishSkill" value="Advanced">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <h2 class="section_title">Computer</h2>
                                <h3 class="main_question">Are you available for work?</h3>
                                <div class="form-group">
                                    <label class="container_radio version_2">Basic
                                        <input type="radio" name="computerSkill" value="Basic">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">Intermediate
                                        <input type="radio" name="computerSkill" value="Intermdiate">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">Advanced
                                        <input type="radio" name="computerSkill" value="Advanced">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <small>* Start branch radio based </small><br>
                                <h3 class="main_question">Your Typing Speed in Burmese & English</h3>
                                <div class="form-group">
                                    <label for="buemeseTypeSpeed">Typing Speed in Burmese</label>
                                    <input type="text" name="buemeseTypeSpeed" id="buemeseTypeSpeed" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="englishTypeSpeed">Typing Speed in English</label>
                                    <input type="text" name="englishTypeSpeed" id="englishTypeSpeed" class="form-control">
                                </div>
                            </div>

                            <div class="step">
                                <h2 class="section_title">Salary</h2>
                                <h3 class="main_question">Your Current Salary</h3>
                                <div class="form-group add_bottom_30">
                                    <label for="c_salary">Minimum salary? (in MMK)</label>
                                    <div class="styled-select">
                                        <div class="fl-wrap fl-wrap-select fl-is">
                                            <select class="form-control" id="c_salary" name="currentSalary">
                                                <option>Choose a range</option>
                                                <option value="<2lakhs">&lt;2lakhs</option>
                                                <option value="2-5lakhs">2-5lakhs</option>
                                                <option value="5-7lakhs">5-7lakhs</option=>
                                                <option value="7-10lakhs">7-10lakhs</option>
                                                <option value=">10lakhs">&gt;10lakhs</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group add_bottom_30 add_top_20">
                                    <label for="c_upload">Upload Pay Slip<br><small>(File accepted: .pdf, .png, .jpg - Max
                                            file size: 150KB for demo limit)</small></label>
                                    <div class="fileupload">
                                        <input type="file" id="c_upload" name="applyerCurrentPaySlip"
                                            accept=".pdf,.jpg,.jpeg,.png">
                                    </div>
                                </div>
                                <h3 class="main_question">Your Expected Salary</h3>
                                <div class="form-group add_bottom_30">
                                    <label for="e_salary">Minimum salary? (in MMK)</label>
                                    <div class="styled-select">
                                        <div class="fl-wrap fl-wrap-select fl-is">
                                            <select class="form-control" id="e_salary" name="expectedSalary">
                                                <option>Choose a range</option>
                                                <option value="<2lakhs">&lt;2lakhs</option>
                                                <option value="2-5lakhs">2-5lakhs</option>
                                                <option value="5-7lakhs">5-7lakhs</option=>
                                                <option value="7-10lakhs">7-10lakhs</option>
                                                <option value=">10lakhs">&gt;10lakhs</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="step">
                                <h2 class="section_title">Bus Stop</h2>
                                <h3 class="main_question">Where is your nearest bus stop?</h3>
                                <div class="form-group add_top_30">
                                    <label for="n_bus">Nearest Bus Stop</label>
                                    <input type="text" name="nearestBusStop" id="n_bus" class="form-control"
                                        autocomplete="off" onchange="getVals(this, 'name_field');">
                                </div>
                                <div class="form-group">
                                    <label for="n_time">Noticed Time</label>
                                    <input type="time" name="noticedTime" id="noticedTime" class="form-control">
                                </div>
                                <label for="shift">24 / 7 Shift</label>
                                <div class="form-group radio_input">
                                    <label class="container_radio me-3">Yes
                                        <input type="radio" id="shift" name="shift" value="Yes">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio">NO
                                        <input type="radio" name="shift" value="No">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <div class="form-group terms">
                                        <label class="container_check">Are you able to work at our company at least 6
                                            months?
                                            <input type="checkbox" name="confirm" value="Yes">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="submit step" id="end">
                                <div class="summary">
                                    <div class="wrapper">
                                        <h3>Thank your for your time<br><span id="name_field"></span>!</h3>
                                        <p>We will contat you shorly at the following email address <strong
                                                id="email_field"></strong></p>
                                    </div>
                                    <div class="text-center">
                                        <div class="form-group terms">
                                            <label class="container_check">Please accept our <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#terms-txt">Terms and
                                                    conditions</a> before Submit
                                                <input type="checkbox" name="terms" value="Yes">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /step last-->

                        </div>
                        <!-- /middle-wizard -->
                        <div id="bottom-wizard">
                            <button type="button" name="backward" class="backward">Prev</button>
                            <button type="button" name="forward" class="forward">Next</button>
                            <button type="submit" name="process" class="submit">Submit</button>
                        </div>
                        <!-- /bottom-wizard -->
                    </form>
                </div>
                <!-- /Wizard container -->
            </div>
            <!-- /content-right-->
        </div>
        <!-- /row-->
    </div>
    <!-- /container-fluid -->
@endsection

@section('scriptSection')
<script>
    jQuery(function($) {
        "use strict";

        $('form#wrapped').attr('action', "{{ route('user#apply') }}");

        $("#wizard_container").wizard({
            stepsWrapper: "#wrapped",
            submit: ".submit",
            unidirectional: false,
            beforeSelect: function(event, state) {
                if ($('input#website').val().length != 0) {
                    return false;
                }
                if (!state.isMovingForward)
                    return true;
                var inputs = $(this).wizard('state').step.find(':input');
                return !inputs.length || !!inputs.valid();
            }
        }).validate({
            errorPlacement: function(error, element) {
                if (element.is(':radio') || element.is(':checkbox')){
                    error.insertBefore(element.next());
                } else {
                    error.insertAfter(element);
                }
            }
        });

        // Progress bar setup
        $("#progressbar").progressbar();

        $("#wizard_container").wizard({
            afterSelect: function(event, state) {
                $("#progressbar").progressbar("value", state.percentComplete);
                $("#location").text("" + state.stepsComplete + " of " + state.stepsPossible + " completed");
            }
        });
    });
</script>
@endsection
