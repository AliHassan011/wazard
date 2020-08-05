@extends('layouts.app')

@section('content')

    <div class="content-wrap">
        <!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
        <main id="content" class="content" role="main">
            <!-- Page content -->
            <div class="analytics">
                <div class="analytics-side">
                    <section class="sliderInLeft">
                        <div class="pb-xlg">
                            <section class="slider-content widget mb-0 ">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                            class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="../img/3727714.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="../img/3808949.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="../img/3993931.jpg" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </section>
                        </div>
                    </section>
                    <aside class="fixed-aside">
                        <div class="pb-xlg">
                            <section class="widget mb-2 h-100">
                                <header>
                                    <h5>Rewards</h5>
                                </header>
                                <div class="widget-body">
                                    <div class="row">
                                        <span class="rewards-star">
                                            <i class="fa fa-star"></i>
                                        </span>
                                        <span class="rewards-star-line">
                                            <p>
                                                <span class="rewards-star-num">2</span>This is month</p>
                                        </span>
                                    </div>

                                    <div class="row">
                                        <span class="rewards-star">
                                            <i class="fa fa-star"></i>
                                        </span>
                                        <span class="rewards-star-line">
                                            <p>
                                                <span class="rewards-star-num">2</span>This is month</p>
                                        </span>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="pb-xlg">
                            <section class="widget joined mb-2 h-100">
                                <header>
                                    <h5>Joind</h5>
                                </header>
                                <div class="widget-body">
                                    <div class="row">
                                        <!--                                    <div id="anymod-baarlk"></div>-->
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="pb-xlg">
                            <section class="widget joined  h-100">
                                <div class="widget-body">
                                    <div class="ads">
                                        <img class="" src="../img/images.jpg">
                                    </div>
                                </div>
                            </section>
                        </div>

                    </aside>
                </div>

            </div>

            <div class="all-courses">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="widget" style="background-color: #fafafb;">
                            <header>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5>
                                            My <span class="fw-semi-bold">Profile</span>
                                        </h5>
                                    </div>
                                </div>
                            </header>
                            <div class="widget-body">
                                <div class="row second-row">
                                    <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                                        <div class="data-box">
                                            <div class="row">
                                                <p class="fw-semi-bold col-lg-11">Information</p>
                                                <i class="col-lg-1 fa fa-pencil float-right" title="Edite"
                                                   data-toggle="modal" data-target="#information_modal"></i>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-4" style="text-align: center">
                                                    <img class="persone-img"
                                                         src="{{ $user->image_path }}">
                                                </div>
                                                <div class="col-lg-8">
                                                    <p><span><i class="fa fa-address-card"></i></span><span
                                                            class="font-weight-bolder"> Name: </span><span id="name">{{ $user->first_name }} - {{ $user->last_name }}</span>
                                                    </p>
                                                    <p><span><i class="fa fa-envelope-o"></i></span><span
                                                            class="font-weight-bolder"> Email: </span><span
                                                            id="email">{{ $user->email }}</span>
                                                    </p>
                                                    <p><span><i class="fa fa-id-card-o"></i></span><span
                                                            class="font-weight-bolder"> Id: </span><span
                                                            id="id"> 1509950</span></p>
                                                    <p><span><i class="fa fa-id-badge"></i></span><span
                                                            class="font-weight-bolder"> Type: </span><span
                                                            class="badge badge-primary" id="badge">User</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                                        <div class="data-box">
                                            <div class="row">
                                                <p class="fw-semi-bold col-lg-10">About</p>
                                                <i class="col-lg-2 fa fa-pencil float-right" data-toggle="modal"
                                                   data-target="#about_modal" title="Edite"></i>
                                            </div>
                                            <div class="output-data">
                                                Hi, I am a passionate, highly enthusiastic Front End Developer & UX/UI
                                                Designer.Actively involved with the latest technology and updates in my
                                                field. A fast learner who picks up new skills quickly. Self-educated,
                                                self-motivated. I love working with professionals people, especially if
                                                they
                                                have the same passion I have for what they do.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row second-row">
                                    <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                                        <div class="data-box">
                                            <div class="row">
                                                <p class="fw-semi-bold col-lg-11">Contact Info</p>
                                                <i class="col-lg-1 fa fa-pencil float-right" title="Edite"
                                                   data-toggle="modal" data-target="#contactinfo_modal"></i>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-6" style="border-right: 1px solid #d9dde4;">
                                                    <p><span><i class="fa fa-home"></i></span> <span
                                                            class="font-weight-bolder"> Country: </span><span
                                                            id="adress">{{ $user->country }}</span>
                                                    </p>
                                                    <p><span><i class="fa fa-phone"></i></span><span
                                                            class="font-weight-bolder"> M Phone 1: </span><span
                                                            id="phone">{{ $user->phone1 }}</span>
                                                    </p>
                                                    <p><span><i class="fa fa-phone"></i></span><span
                                                            class="font-weight-bolder"> M Phone 2: </span><span
                                                            id="id">{{ $user->phone1 }}</span>
                                                    </p>
                                                    <p><span><i class="fa fa-birthday-cake"></i></span><span
                                                            class="font-weight-bolder"> Date of Birth: </span><span
                                                            id="id">{{ $user->dob }}</span>
                                                    </p>

                                                    <p>
                                                        <span><i class="fa fa-star-half-full"></i></span>
                                                        <span class="font-weight-bolder">Monthly Stars: </span>
                                                        <span class="rating" id="m_stars">
                                                             <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <p><span><i class="fa fa-file-text"></i></span><span
                                                            class="font-weight-bolder"> CV1: </span><span id="cv1"><a
                                                                class="cv-link" href="#"
                                                                title="click here"> CV1</a></span>
                                                    </p>
                                                    <p><span><i class="fa fa-file-text"></i></span><span
                                                            class="font-weight-bolder"> CV2: </span><span id="cv2"><a
                                                                class="cv-link" href="#"
                                                                title="click here"> CV2</a></span>
                                                    </p>
                                                    <p><span><i class="fa fa-file-text"></i></span><span
                                                            class="font-weight-bolder"> CV3: </span><span id="cv3"><a
                                                                class="cv-link" href="#"
                                                                title="click here"> CV3</a></span>
                                                    </p>
                                                    <p><span><i class="fa fa-file-text"></i></span><span
                                                            class="font-weight-bolder"> CV4: </span><span id="cv4"><a
                                                                class="cv-link" href="#"
                                                                title="click here">CV4</a></span>
                                                    </p>

                                                    <p>
                                                        <span class="font-weight-bolder">Total Stars: </span>
                                                        <span class="rating" id="t_stars">
                                                    <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star "></span>
                                                        <span class="fa fa-star"></span>
                                                    </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                                        <div class="data-box">
                                            <div class="row">
                                                <p class="fw-semi-bold col-lg-10">organization Joined</p>
                                            </div>
                                            <div class="output-data">
                                                <!--  <section class="customer-logos slider">
                                                      <div class="slide">
                                                          <img class="course-image" src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg">
                                                          <p class="justfiy-center" id="course-name">Course Name</p>
                                                      </div>
                                                      <div class="slide">
                                                          <img class="course-image" src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg">
                                                          <p class="justfiy-center" id="course-name">Course Name</p>
                                                      </div>
                                                      <div class="slide">
                                                          <img class="course-image" src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg">
                                                          <p class="justfiy-center" id="course-name">Course Name</p>
                                                      </div>
                                                      <div class="slide">
                                                          <img class="course-image" src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg">
                                                          <p class="justfiy-center" id="course-name">Course Name</p>
                                                      </div>

                                                  </section>
                                                  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row second-row">
                                    <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                                        <div class="data-box">
                                            <div class="row">
                                                <p class="fw-semi-bold col-lg-11">Courses Liked</p>
                                            </div>

                                            <div class="row cards">
                                                <div class="col-3 card">
                                                    <img class="card-img-top" src="../img/3727714.jpg"
                                                         alt="Card image cap">
                                                    <div class="card-body">
                                                        <p class="card-text">course name</p>
                                                    </div>
                                                </div>

                                                <div class="col-3 card">
                                                    <img class="card-img-top" src="../img/3727714.jpg"
                                                         alt="Card image cap">
                                                    <div class="card-body">
                                                        <p class="card-text">course name</p>
                                                    </div>
                                                </div>

                                                <div class="col-3 card">
                                                    <img class="card-img-top" src="../img/3727714.jpg"
                                                         alt="Card image cap">
                                                    <div class="card-body">
                                                        <p class="card-text">course name</p>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <div class="add_material">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="widget">
                            <header>
                                <h5>
                                    Add <span class="fw-semi-bold">Material</span>
                                </h5>
                            </header>
                            <div class="widget-body">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <p class="recomment_material">Some degree and certificate programs have courses
                                            you
                                            must take in order to become eligible for admission to the program. If you
                                            are
                                            an undergraduate independent student planning on eventually pursuing a
                                            degree or
                                            a certificate, you may wish to use your independent studies to complete
                                            courses
                                            that will help you fulfill the requirements of your intended future
                                            program</p>
                                    </div>
                                    <div class="col-lg-2">
                                        <button class="material-btn" data-toggle="modal"
                                                data-target="#elegantModalForm">
                                            &#43; Add Material
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <footer class="footer-content-area ">
                <div class="container">
                    <div class="row ">
                        <div class="col-12 col-lg-4 col-md-6">
                            <div class="footer-copywrite-info">
                                <!-- Copywrite -->
                                <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                                    <div class="footer-logo">
                                        <a href="#"> Wizard </a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ducimus
                                        voluptatibus
                                        neque illo id repellat quisquam? Autem expedita earum quae laborum ipsum ad.</p>
                                </div>
                                <!-- Social Icon -->
                                <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-3 col-md-6">
                            <div class="contact_info_area d-sm-flex justify-content-between">
                                <!-- Content Info -->
                                <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">
                                    <h5>PRIVACY &amp; TOS</h5>
                                    <a href=""><p>Advertiser Agreement</p></a>
                                    <a href=""><p>Acceptable Use Policy</p></a>
                                    <a href=""><p>Privacy Policy</p></a>
                                    <a href=""><p>Technology Privacy</p></a>
                                    <a href=""><p>Developer Agreement</p></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-2 col-md-6 ">
                            <!-- Content Info -->
                            <div class="contact_info_area d-sm-flex justify-content-between">
                                <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                                    <h5>NAVIGATE</h5>
                                    <a href=""><p>Advertisers</p></a>
                                    <a href=""><p>Developers</p></a>
                                    <a href=""><p>Resources</p></a>
                                    <a href=""><p>Company</p></a>
                                    <a href=""><p>Connect</p></a>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-lg-3 col-md-6 ">
                            <div class="contact_info_area d-sm-flex justify-content-between">
                                <!-- Content Info -->
                                <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                                    <h5>CONTACT US</h5>
                                    <p>Mailing Address:xx00 E. Union Ave</p>
                                    <p>Suite 1100. Denver, CO 80237</p>
                                    <p>+999 90932 627</p>
                                    <p>support@yourdomain.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </main>
    </div>

    <!-- add matrial  Modal -->
    <div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content form-elegant">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold" id="myModalLabel"><strong>Add
                            Material</strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->
                    <div class="md-form mb-5">
                        <label data-error="wrong" data-success="right">Course Name</label>
                        <input type="text" id="course_name" class="form-control validate"
                               placeholder="Angular - The Complete Guide (2020 Edition)/">
                    </div>
                    <div class="md-form mb-5">
                        <label data-error="wrong" data-success="right">Add Link</label>
                        <input type="email" id="course_link" class="form-control validate"
                               placeholder="https://www.udemy.com/courses/development/">
                    </div>
                    <div class="md-form mb-5">
                        <label data-error="wrong" data-success="right">Add Image</label>
                        <input type="file" id="course_img" name="img" accept="image/*" style="height: auto"
                               class="form-control validate">
                    </div>
                    <div class="md-form mb-5">
                        <label data-error="wrong" data-success="right">Add Discription</label>
                        <textarea type="text" id="course_disc" class="form-control validate"
                                  placeholder="This course starts from scratch, you neither need to know Angular 1 nor Angular 2!">
                            </textarea>
                    </div>
                    <div class="text-center mb-3">
                        <button type="button" class="btn material-btn">Submit</button>
                    </div>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--  add material Modal -->

    <!-- modal information -->
    <div class="modal fade" id="information_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Information </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('Account.update', $user->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="modal-body mx-4">
                            <!--Body-->
                            <div class="md-form mb-2">
                                <label data-error="wrong" data-success="right">First Name</label>
                                <input type="text" value="{{ $user->first_name }}" name="first_name"
                                       class="form-control validate">
                            </div>
                            <div class="md-form mb-2">
                                <label data-error="wrong" data-success="right">Last Name</label>
                                <input type="text" value="{{ $user->last_name }}" name="last_name"
                                       class="form-control validate">
                            </div>

                            <div class="md-form mb-2">
                                <label data-error="wrong" data-success="right">Change Image</label>
                                <input type="file" value="{{ $user->image }}" id="persone_img" name="image"
                                       style="height: auto"
                                       class="form-control validate">
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">save changes</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- End Modal information -->

    <!-- modal About -->
    <div class="modal fade" id="about_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aboutpheader">About </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body mx-4">
                        <!--Body-->
                        <div class="md-form mb-2">
                            <label data-error="wrong" data-success="right">Resume</label>
                            <textarea type="text" id="about_disc" class="form-control validate"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onClick="window.location.reload();">Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal information -->

    <!-- modal  contact info -->
    <div class="modal fade" id="contactinfo_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 650px !important;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contact_header">Contact Info </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ route('Account.update',$user->id ) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="modal-body">
                        <div class="modal-body mx-4">
                            <!--Body-->
                            <div class="row">

                                <div class="col-6 md-form mb-2">
                                    <label data-error="wrong" data-success="right">Country</label>
                                    <input name="country" type="text" id="country" class="form-control validate">
                                </div>

                                <div class="col-6 md-form mb-2">
                                    <label data-error="wrong" data-success="right">Date of Birth</label>
                                    <input name="dob" type="date" id="date_birth" class="form-control validate">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 md-form mb-2">
                                    <label data-error="wrong" data-success="right">M Phone1</label>
                                    <input name="phone1" type="number" id="phone_1" class="form-control validate">
                                </div>

                                <div class="col-6 md-form mb-2">
                                    <label data-error="wrong" data-success="right">M Phone2</label>
                                    <input name="phone2" type="number" id="phone_2" class="form-control validate">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 md-form mb-2">
                                    <label data-error="wrong" data-success="right">Upload CV1</label>
                                    <input type="file" id="cv_one" name="cv1" accept="*/*" style="height: auto"
                                           class="form-control validate">
                                </div>
                                <div class="col-lg-6 md-form mb-2">
                                    <label data-error="wrong" data-success="right">Upload CV2</label>
                                    <input type="file" id="cv_two" name="cv2" accept="*/*" style="height: auto"
                                           class="form-control validate">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 md-form mb-2">
                                    <label data-error="wrong" data-success="right">Upload CV3</label>
                                    <input type="file" id="cv_three" name="cv3" accept="*/*" style="height: auto"
                                           class="form-control validate">
                                </div>
                                <div class="col-lg-6 md-form mb-2">
                                    <label data-error="wrong" data-success="right">Upload CV4</label>
                                    <input type="file" id="cv_four" name="cv4" accept="*/*" style="height: auto"
                                           class="form-control validate">
                                </div>
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">save changes</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal contact info -->

    <!-- The Loader. Is shown when pjax happens -->
    <div class="loader-wrap hiding hide">
        <i class="fa fa-circle-o-notch fa-spin-fast"></i>
    </div>

@endsection