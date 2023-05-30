@extends('layouts.main')
@section('content')  
<section id="detail" class="detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <h3><span style="color: #FBB041;">Rapid</span> Bootcamp Backend</h3>
                <p>Kami dapat membantumu mendapatkan pekerjaan impian sebagai Backend Developer Expert dalam hitungan bulan!</p>
            </div>
        </div>
    </div>
</section>
<section id="silabus" class="silabus mb-4">
    <div class="container">
        <div class="row" >
            <div class="col-lg-6">
                <h3>Our Rapid Bootcamp Backend Syllabus:</h3>
                <ul id="accordion">
                    <li>
                        <label for="first">1. Introduction to the World of Programming <span>&#x3e</span> </label>
                        <input type="radio" name="accordion" id="first" checked>
                        <div class="content">
                            <p>(a) Introduction Internet. <br>
                                (b) Introduction to Programming.</p>
                        </div>
                    </li>
                    <li>
                        <label for="second">2. Backend Developer Career Path<span>&#x3e</span> </label>
                        <input type="radio" name="accordion" id="second" >
                        <div class="content">
                            <p>(a) Introduction to Backend Web Developer. <br>
                                (b) Career Roles and Opportunities.</p>
                        </div>
                    </li>
                    <li>
                        <label for="third">3.HTML Fundamental<span>&#x3e</span> </label>
                        <input type="radio" name="accordion" id="third" >
                        <div class="content">
                            <p>(a) HTML Fundamentals. <br>
                                (b) HTML Hands-On.</p>
                        </div>
                    </li>
                    <li>
                        <label for="fourth">4. Javascript Fundamental <span>&#x3e</span> </label>
                        <input type="radio" name="accordion" id="fourth" >
                        <div class="content">
                            <p>(a) Introduction to Javascript. <br>
                                (b) Basic Javascript. <br>
                                (c) Operator & Expression. <br>
                                (d) Basic Javascript Technique.</p>
                        </div>
                    </li>
                    <li>
                        <label for="five">5. Version Control <span>&#x3e</span> </label>
                        <input type="radio" name="accordion" id="five" >
                        <div class="content">
                            <p>(a) Command Line. <br>
                            (b) GIT.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                
                <div class="card">
                    <div class="card-title">
                        <h3>Choose Your Package</h3>
                        <div class="row mx-5">
                            <div class="col-lg-12" style="display: inline-block;">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-package1-tab" data-bs-toggle="pill" data-bs-target="#pills-package1" type="button" role="tab" aria-controls="pills-package1" aria-selected="true">Package 1</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-package2-tab" data-bs-toggle="pill" data-bs-target="#pills-package2" type="button" role="tab" aria-controls="pills-package2" aria-selected="false">Package 2</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-package1" role="tabpanel" aria-labelledby="pills-package1-tab">
                                        <div class="card-content">
                                            <ul class="text-start">
                                                <li><i class="far fa-check-circle"></i> 4 Real-projects for your portfolio</li>
                                                <li><i class="fas fa-times"></i> Career Profiler Assessment</li>
                                                <li><i class="far fa-check-circle"></i> Intensive career and softskill session</li>
                                                <li><i class="far fa-check-circle"></i> Lifetime Job-Connector services</li>
                                                <li><i class="fas fa-times"></i> More than 60 total learning session (self and live learning)</li>
                                                <li><i class="far fa-check-circle"></i> Unlimited learning access</li>
                                                <hr>
                                            <div class="card-price">
                                                <h3>TOTAL:Rp 9.000.000</h3>
                                            </div>
                                                <button onclick="window.location.href='https://invoice.xendit.co/od/maxybcp01'"  class="button-regist">Register Now</button>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-package2" role="tabpanel" aria-labelledby="pills-package2-tab">
                                        <div class="card-content">
                                                <ul class="text-start">
                                                    <li><i class="far fa-check-circle"></i> 4 Real-projects for your portfolio</li>
                                                    <li><i class="far fa-check-circle"></i> Career Profiler Assessment</li>
                                                    <li><i class="far fa-check-circle"></i> Intensive career and softskill session</li>
                                                    <li><i class="far fa-check-circle"></i> Lifetime Job-Connector services</li>
                                                    <li><i class="far fa-check-circle"></i> More than 60 total learning session (self and live learning)</li>
                                                    <li><i class="far fa-check-circle"></i> Unlimited learning access</li>
                                                    <hr>
                                                        <div class="card-price">
                                                            <h3>TOTAL:Rp 25.000.000</h3>
                                                            <button onclick="window.location.href='https://invoice.xendit.co/od/maxybcp02'"  class="button-regist mx-auto">Register Now</button>
                                                        </div>
                                                </ul>
                                            </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop