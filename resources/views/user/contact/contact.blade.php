@extends('user.layouts.master')

@section('title', 'Contact Us')

@section('content')
    <main id="general_page">
        <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1l9Z_CRUqWwS3dyu4V5PUfWm-Vd1JH-o&ehbc=2E312F&noprof=1" width="600" height="450" allowfullscreen id="map_iframe"></iframe>
        <!-- end map-->
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Contact us</h3>
                    <p>
                        Mussum ipsum cacilds, vidis litro abertis.
                    </p>
                    <div>
                        <div id="message-contact"></div>
                        <form method="post" action="assets/contact.php" id="contactform">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name_contact">First Name</label>
                                        <input type="text" class="form-control" id="name_contact" name="name_contact">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname_contact">Last Name</label>
                                        <input type="text" class="form-control" id="lastname_contact"
                                            name="lastname_contact">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="email_contact">Email</label>
                                        <input type="email" id="email_contact" name="email_contact" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="phone_contact">Phone number</label>
                                        <input type="text" id="phone_contact" name="phone_contact" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message_contact">Your message</label>
                                        <textarea rows="5" id="message_contact" name="message_contact" class="form-control" style="height:100px;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="verify_contact">Are you human? 3 + 1 =</label>
                                        <input type="text" id="verify_contact" class=" form-control">
                                    </div>
                                    <p><input type="submit" value="Submit" class="btn_1 add_bottom_15" id="submit-contact">
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End col lg 9 -->
                <aside class="col-lg-4">
                    <div class="box_style_2">
                        <h4>Contacts info</h4>
                        <h6>Yangon Location</h6>
                        <p>
                            F-49/201, D block, 2nd floor & 3rd floor, Pearl Condo, Bahan, Yangon, Myanmar.<br>
                            <br> + 959 692 302 021
                            <br>
                            <a href="#">info@mibs.com.mm</a>
                            <br>
                            <small>24 Hours/ 7 Days</small>
                        </p>
                        <hr class="styled">
                        <h6>Mandalay Location</h6>
                        <p>
                            Fantasy world, Between 31st & 32nd Street on 78th street, Mandalay, Myanmar.<br>
                            <br> + 959 692 302 021
                            <br>
                            <a href="#">info@mibs.com.mm</a>
                            <br>
                            <small>24 Hours/ 7 Days</small>
                        </p>

                    </div>
                </aside>
                <!--End aside -->
            </div>
            <!-- end row-->
        </div>
        <!-- end container-->
    </main>
@endsection
