@extends('layouts.main')
@section('content')

<!-- Home Section -->
<section id="home" class="home">
    <div class="container">
        <div class="row pt-5">
            <div class=" col-lg-6 home-tagline pt-5">
                <p style="color:#FFB800" class="text-start">We are The Best </p>
                <h3>Starts <span style="color:#0066FF" class="fw-bold">learning</span> with our
                    <br> experts and give a new <br> way to your career
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                    Id interdum dui mollis . Suspendisse nulla :</p>
                <button class="button-tertiary-c">MSIB</button>
                <button onclick="window.location.href='https://wa.me/628113955599'" class="button-tertiary mx-4">Mandiri</button>
            </div>
            <div class="col-lg-6 pt-4 d-flex">
                <div class="banner-home-right">
                    <img src="/img/home.png" alt=""  style="max-width: 100%;">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="total">
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-1">
                <span class="icon"><img src="/img/icon1.png" alt=""></span>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    <h3> 2000+</h3>
                </div>
                <div class="row">
                    <p>Maxy Students</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    <h3>60</h3>
                </div>
                <div class="row">
                    <p>Maxy partner with <br> Companies</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    <h3>200+</h3>
                </div>
                <div class="row">
                    <p>Partner with <br> Universities</p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="row">
                    <h3>50%</h3>
                </div>
                <div class="row">
                    <p>Our Alumni</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partner Section -->
<section id="partner" class="partner">
    <div class="row pt-5">
        <div class="col-lg-12">
            <h3> Maxy Academy telah berkolaborasi dengan <br> berbagai <span style="color:#0066FF">perusahaan</span>
                di Indonesia</h3>
            <p>OUR PARTNERS</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="owl-carousel owl-theme partners-carousel">
                <div class="item box">
                    <img src="img/partner/anteraja.png" alt="" class="partner-img">
                </div>
                <div class="item box">
                    <img src="img/partner/donet.png" alt="" class="partner-img">
                </div>
                <div class="item box">
                    <img src="img/partner/edufund.png" alt="" class="partner-img">
                </div>
                <div class="item box">
                    <img src="img/partner/indocyber.png" alt="" class="partner-img">
                </div>
                <div class="item box">
                    <img src="img/partner/jennyhouse.png" alt="" class="partner-img">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="owl-carousel owl-theme partners-carousel">
                <div class="item box">
                    <img src="img/partner/kawanlama.png" alt="" class="partner-img">
                </div>
                <div class="item box">
                    <img src="img/partner/kedaisayur.png" alt="" class="partner-img">
                </div>
                <div class="item box">
                    <img src="img/partner/loreal.png" alt="" class="partner-img">
                </div>
                <div class="item box">
                    <img src="img/partner/maybelline.png" alt="" class="partner-img">
                </div>
                <div class="item box">
                    <img src="img/partner/scarlett.png" alt="" class="partner-img">
                </div>
            </div>
        </div>
    </div>
    <div class="btn-carrer pt-4">
        <button onclick="window.location.href='/career'" class="button-primary-cc">Carrer Guidance</button>
    </div>
</section>

<!-- Benefit Section -->
<section id="benefit" class="benefit">
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-6">
                <div class="img-benefit">
                    <img src="/img/benefit.png" alt=""  style="max-width: 100%;">
                </div>
            </div>
            <div class="col-lg-6 py-5">
                <h3>
                    What Will You <span style="color: #0066FF;">Get?</span>
                </h3>
                <p class="sub">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Id interdum dui mollis . Suspendisse nulla :</p>
                <div class="card">
                    <div class="card-body">
                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing...</li>
                        <p>read more</p>
                    </div>
                </div>
                <div class="card my-2">
                    <div class="card-body">
                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing...</li>
                        <p>read more</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h3>Lorem Ipsum Dolor Sit Amet</h3>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing...</li>
                        <p>read more</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Program Section -->
<section id="program" class="program">
    <div class="container h-100">
        <h3 class="program-tagline">Our Programs</h3>
        <div class="row" style="text-align:end;">
            <div class="col-lg-12">
                <ul class="nav nav-pills mb-3" id="pills-prog" role="tablist" style="display: inline-block;">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="false">All Course</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-rapid-tab" data-bs-toggle="pill" data-bs-target="#pills-rapid" type="button" role="tab" aria-controls="pills-rapid" aria-selected="true">Rapid Bootcamp</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-mini-tab" data-bs-toggle="pill" data-bs-target="#pills-mini" type="button" role="tab" aria-controls="pills-mini" aria-selected="false">Mini Bootcamp</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-rapid" role="tabpanel" aria-labelledby="pills-rapid-tab">
                <section id="program-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="owl-carousel owl-theme prog-carousel">
                                    <div class="card">
                                        <img src="/img/course1.png" alt="course1" class="img-prog">
                                        <div class="card-body">
                                            <h3>Rapid Bootcamp Frontend</h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-user-friends"></i>5 Students</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-certificate"></i>CPD Acrediated</span>
                                                </div>
                                            </div>
                                            <div class="btn-prog">
                                                <button onclick="window.location.href='/frontend'" class="button-secondary-c">Start Course <i class="fas fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="/img/course2.png" alt="course1" class="img-prog">
                                        <div class="card-body">
                                            <h3>Rapid Bootcamp Backend</h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-user-friends"></i>5 Students</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-certificate"></i>CPD Acrediated</span>
                                                </div>
                                            </div>
                                            <div class="btn-prog">
                                                <button onclick="window.location.href='/backend'" class="button-secondary-c">Start Course <i class="fas fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="/img/course3.png" alt="course1" class="img-prog">
                                        <div class="card-body">
                                            <h3>Rapid Bootcamp UI/UX</h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-user-friends"></i>5 Students</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-certificate"></i>CPD Acrediated</span>
                                                </div>
                                            </div>
                                            <div class="btn-prog">
                                                <button onclick="window.location.href='/detail'" class="button-secondary-c">Start Course <i class="fas fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="/img/course5.png" alt="course1" class="img-prog">
                                        <div class="card-body">
                                            <h3>Digital Marketing</h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-user-friends"></i>5 Students</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-certificate"></i>CPD Acrediated</span>
                                                </div>
                                            </div>
                                            <div class="btn-prog">
                                                <button onclick="window.location.href='/digitalmarketing'" class="button-secondary-c">Start Course <i class="fas fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="pills-mini" role="tabpanel" aria-labelledby="pills-mini-tab">
                <section id="program-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="owl-carousel owl-theme prog-carousel">
                                    <div class="card">
                                        <img src="/img/course4.png" alt="course1" class="img-prog">
                                        <div class="card-body">
                                            <h3>Digital Content Creator</h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-user-friends"></i>5 Students</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-certificate"></i>CPD Acrediated</span>
                                                </div>
                                            </div>
                                            <div class="btn-prog">
                                                <button onclick="window.location.href='/content'" class="button-secondary-c">Start Course <i class="fas fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="/img/course1.png" alt="course1" class="img-prog">
                                        <div class="card-body">
                                            <h3>Hybrid Apps</h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-user-friends"></i>5 Students</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-certificate"></i>CPD Acrediated</span>
                                                </div>
                                            </div>
                                            <div class="btn-prog">
                                                <button onclick="window.location.href='/hybrid'" class="button-secondary-c">Start Course <i class="fas fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="/img/course3.png" alt="course1" class="img-prog">
                                        <div class="card-body">
                                            <h3>Laravel Web Application</h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-user-friends"></i>5 Students</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-certificate"></i>CPD Acrediated</span>
                                                </div>
                                            </div>
                                            <div class="btn-prog">
                                                <button onclick="window.location.href='/laravel'" class="button-secondary-c">Start Course <i class="fas fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="/img/course2.png" alt="course1" class="img-prog">
                                        <div class="card-body">
                                            <h3>UI/UX Design With Figma</h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-user-friends"></i>5 Students</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-certificate"></i>CPD Acrediated</span>
                                                </div>
                                            </div>
                                            <div class="btn-prog">
                                                <button onclick="window.location.href='/figma'" class="button-secondary-c">Start Course <i class="fas fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                <section id="program-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="owl-carousel owl-theme prog-carousel">
                                    <div class="card">
                                        <img src="/img/course3.png" alt="course1" class="img-prog">
                                        <div class="card-body">
                                            <h3>Rapid Bootcamp UI/UX</h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-user-friends"></i>5 Students</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-certificate"></i>CPD Acrediated</span>
                                                </div>
                                            </div>
                                            <div class="btn-prog">
                                                <button onclick="window.location.href='/detail'" class="button-secondary-c">Start Course <i class="fas fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="/img/course2.png" alt="course1" class="img-prog">
                                        <div class="card-body">
                                            <h3>Rapid Bootcamp Frontend</h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-user-friends"></i>5 Students</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-certificate"></i>CPD Acrediated</span>
                                                </div>
                                            </div>
                                            <div class="btn-prog">
                                                <button onclick="window.location.href='/frontend'" class="button-secondary-c">Start Course <i class="fas fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="/img/course1.png" alt="course1" class="img-prog">
                                        <div class="card-body">
                                            <h3>Rapid Bootcamp Backend</h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-user-friends"></i>5 Students</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-certificate"></i>CPD Acrediated</span>
                                                </div>
                                            </div>
                                            <div class="btn-prog">
                                                <button onclick="window.location.href='/backend'" class="button-secondary-c">Start Course <i class="fas fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="/img/course2.png" alt="course1" class="img-prog">
                                        <div class="card-body">
                                            <h3>Digital Marketing</h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-user-friends"></i>5 Students</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-certificate"></i>CPD Acrediated</span>
                                                </div>
                                            </div>
                                            <div class="btn-prog">
                                                <button onclick="window.location.href='/digitalmarketing'" class="button-secondary-c">Start Course <i class="fas fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="/img/course4.png" alt="course1" class="img-prog">
                                        <div class="card-body">
                                            <h3>Digital Content Creator</h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-user-friends"></i>5 Students</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-certificate"></i>CPD Acrediated</span>
                                                </div>
                                            </div>
                                            <div class="btn-prog">
                                                <button onclick="window.location.href='/content'" class="button-secondary-c">Start Course <i class="fas fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col-md-12">
                                <div class="owl-carousel owl-theme prog-carousel">
                                    <div class="card">
                                        <img src="/img/course4.png" alt="course1" class="img-prog">
                                        <div class="card-body">
                                            <h3>Hybrid Apps</h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-user-friends"></i>5 Students</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-certificate"></i>CPD Acrediated</span>
                                                </div>
                                            </div>
                                            <div class="btn-prog">
                                                <button onclick="window.location.href='/hybrid'" class="button-secondary-c">Start Course <i class="fas fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="/img/course4.png" alt="course1" class="img-prog">
                                        <div class="card-body">
                                            <h3>Laravel Web Application</h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-user-friends"></i>5 Students</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-certificate"></i>CPD Acrediated</span>
                                                </div>
                                            </div>
                                            <div class="btn-prog">
                                                <button onclick="window.location.href='/laravel'" class="button-secondary-c">Start Course <i class="fas fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="/img/course3.png" alt="course1" class="img-prog">
                                        <div class="card-body">
                                            <h3>UI/UX Design With Figma</h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-user-friends"></i>5 Students</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <span><i class="fas fa-certificate"></i>CPD Acrediated</span>
                                                </div>
                                            </div>
                                            <div class="btn-prog">
                                                <button onclick="window.location.href='/figma'" class="button-secondary-c">Start Course <i class="fas fa-chevron-right"></i></button>
                                            </div>
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
</section>

<!-- about us Section -->
<section id="aboutus" class="aboutus">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 tagline">
                <h3>Here's how it <span style="color:#FFB800;">works</span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>
                <div class="card" style="max-width: 100%;">
                    <div class="card-body">
                        <h3>Bootcamp Academy</h3>
                        <p>Mentor profesional dari patner berkualitas</p>
                    </div>
                </div>
                <div class="card my-4" style="max-width: 100%;">
                    <div class="card-body">
                        <h3>Internship</h3>
                        <p>Magang di perusahaan besar</p>
                    </div>
                </div>
                <div class="card" style="max-width: 100%;">
                    <div class="card-body">
                        <h3>Guaranteed Job Placement</h3>
                        <p>Jaminan 100% mendapatkan pekerjaan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pt-4">
                <div class="card vid-maxy" style="max-width: 100%;"></div>
                <!-- <div class="card">
                            <div class="card-body">
                                <h3>Lorem Ipsum Dolor Sit Amet</h3>
                            </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

<!-- Instructor Section -->
<section class="instructor" id="instructor">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Our Best Instructors</h3>
            </div>
        </div>
        <div class="row py-4">
            <div class="col-lg-4">
                <div class="card">
                    <img src="/img/instructor1.png" alt="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-start">
                                <p>Ayu</p>
                            </div>
                            <div class="col text-end">
                                <p>Mentor UIUX</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img src="/img/instructor2.png" alt="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-start">
                                <p>Lio</p>
                            </div>
                            <div class="col">
                                <p>Mentor Backend</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="/img/instructor3.png" alt="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-start">
                                <p>Ali</p>
                            </div>
                            <div class="col">
                                <p>Mentor Frontend</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- img Section -->
<section id="banner-home" class="banner-home">
    <div class="container">
        <div class="img-box pt-4">
            <img src="/img/img-home.png" alt="">
        </div>
    </div>
</section>

<!-- package Section -->
<section id="package" class="package">
    <div class="container">
        <div class="row py-4">
            <div class="col-lg-12">
                <h1 class="package-tagline">Packages that you can choose</h1>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>
                    quis nostrud exercitation</p>
            </div>
        </div>
        <div class="card-container py-4">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card package-1 mx-4">
                        <div class="card-title">
                            <h1>Package 1</h1>
                            <h2>Rp 9.000.000</h2>
                            <div class="button">
                                <button onclick="window.location.href='https://invoice.xendit.co/od/maxybcp01'" class="regist-package1">
                                    <span class="txt-btn-package">Regist Now</span>
                                </button>
                            </div>
                        </div>
                        <div class="sub-item">
                            <ul>
                                <li><i class="fas fa-check mx-2"></i>4 Real-projects for your portfolio</li>
                                <li><i class="fas fa-check mx-2"></i>Intensive career and softskill session</li>
                                <li><i class="fas fa-check mx-2"></i>More than 60 total learning session (self and live learning)</li>
                                <li><i class="fas fa-check mx-2"></i>Unlimited learning access</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card package-2 mx-4">
                        <div class="card-title">
                            <h1>Package 2</h1>
                            <h2>Rp 25.000.000</h2>
                            <div class="button">
                                <button onclick="window.location.href='https://invoice.xendit.co/od/maxybcp02'" class="regist-package">
                                    <span class="txt-btn-package">Regist Now</span>
                                </button>
                            </div>
                        </div>
                        <div class="sub-item">
                            <ul>
                                <li><i class="fas fa-check mx-2"></i>4 Real-projects for your portfolio</li>
                                <li><i class="fas fa-check mx-2"></i>Intensive career and softskill session</li>
                                <li><i class="fas fa-check mx-2"></i>Career Profiler Assessment</li>
                                <li><i class="fas fa-check mx-2"></i>Intensive career and softskill session</li>
                                <li><i class="fas fa-check mx-2"></i>Lifetime Job-Connector services</li>
                                <li><i class="fas fa-check mx-2"></i>More than 60 total learning session(self and live learning)</li>
                                <li><i class="fas fa-check mx-2"></i>Unlimited learning access</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card package-2 mx-4">
                        <div class="card-title">
                            <h1>Package 3</h1>
                            <h2>Rp 25.000.000</h2>
                            <div class="button">
                                <button onclick="window.location.href='https://invoice.xendit.co/od/maxybcp02'" class="regist-package">
                                    <span class="txt-btn-package">Regist Now</span>
                                </button>
                            </div>
                        </div>
                        <div class="sub-item">
                            <ul>
                                <li><i class="fas fa-check mx-2"></i>4 Real-projects for your portfolio</li>
                                <li><i class="fas fa-check mx-2"></i>Intensive career and softskill session</li>
                                <li><i class="fas fa-check mx-2"></i>Career Profiler Assessment</li>
                                <li><i class="fas fa-check mx-2"></i>Intensive career and softskill session</li>
                                <li><i class="fas fa-check mx-2"></i>Lifetime Job-Connector services</li>
                                <li><i class="fas fa-check mx-2"></i>More than 60 total learning session(self and live learning)</li>
                                <li><i class="fas fa-check mx-2"></i>Unlimited learning access</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- xxxxxx Section -->
<section id="testimonial-home" class="testimonial-home">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Testimonials</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <div class="card-xxnam">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card-xxnam">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card-xxnam">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card-xxnam">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card-xxnam">
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</section>

@include('partials.faq')

@stop