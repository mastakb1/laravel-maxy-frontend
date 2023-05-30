@extends('layouts.main')
@section('content')  
<section id="detail" class="detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <h3><span style="color: #FBB041;">Mini</span> Bootcamp Digital Content Creator</h3>
                <p>Mau jadi Tiktok Content Creator tapi bingung mulai dari mana & followers masih sedikit? 
                 Bercita-cita dapat endorsement dari brand? Let’s join our mini bootcamp,
                 DIGITAL CONTENT CREATOR ACADEMY! Program Coaching dan becoming content creator 
                 hingga DIJAMIN mendapatkan endorsement dari brand.</p>
                 <h3>Biaya Program</h3>
                 <h3 class="price">Rp 299.000</h3>
                 <div>
                    <button onclick="window.location.href='https://invoice.xendit.co/od/maxyminbcp-dcc'"  class="button-regist">Register Now</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="silabus" class="silabus mb-4">
    <div class="container">
        <div class="row" >
            <div class="col-lg-6">
                <h3>Our Mini Bootcamp Digital Content Creator Syllabus:</h3>
                <ul id="accordion">
                    <li>
                        <label for="first">1. Communication <span>&#x3e</span> </label>
                        <input type="radio" name="accordion" id="first" checked>
                        <div class="content">
                            <p> (a) Theory basic of communication related with Sosmed Platform <br>
                                (b)Basic Visual Communication <br>
                                (c)Basic Typography <br>
                                (d)Writing Fundamental <br>
                                (e)Advanced Visual Communication <br>
                                (f)Creative Writing ( copy writing for Commercial use )</p>
                        </div>
                    </li>
                    <li>
                        <label for="second">2. Digital Media<span>&#x3e</span> </label>
                        <input type="radio" name="accordion" id="second" >
                        <div class="content">
                            <p> (a)Content Production Basic <br>
                                (b)Create Content Video <br>
                                (c)Create Content Photograph <br>
                                (d)Create Audio Visual combine with Video and Photograph <br>
                                (e)Ethic and Behaviour of Content</p>
                        </div>
                    </li>
                    <li>
                        <label for="third">3.Streaming<span>&#x3e</span> </label>
                        <input type="radio" name="accordion" id="third" >
                        <div class="content">
                            <p> (a)Advance Content Production <br>
                                (b)Digital Video and Live Streaming <br>
                                (c)Report and Interview Techinique <br>
                                (d)Motion Graphis</p>
                        </div>
                    </li>
                    <li>
                        <label for="fourth">4. Business Through Digital<span>&#x3e</span> </label>
                        <input type="radio" name="accordion" id="fourth" >
                        <div class="content">
                            <p> (a)Tik Tok Platform Trending <br>
                                (b)Instagram Platform Trending <br>
                                (c)You tube Platfrom Trending
                                (d)How to make business and trending digital platform (IMPLEMENTATION for some period)</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- <div class="col-lg-6">
                
                <div class="card">
                    <div class="card-body">
                        <div class="card-price">
                             <h3>Biaya Program:Rp 299.000</h3>
                        </div>
                        <div>
                            <button onclick="window.location.href='https://invoice.xendit.co/od/maxyminbcp-dcc'"  class="button-regist">Register Now</button>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
@stop