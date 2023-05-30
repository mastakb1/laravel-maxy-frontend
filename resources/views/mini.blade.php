@extends('layouts.main')
@section('content')
<section id="rapid" class="rapid">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-4">
                    <img src="/img/rapid.png" alt="">
                </div>
                <div class="col-lg-8">
                    <h1>Raih Karir <br> Impianmu, Walau <br>
                    <span style="color: #FFB800;">Belum Lulus Kuliah</span></h1>
                    <p>Pilih program yang sesuai, bangun portfolio-mu, dan <br>
                    mulai karir impianmu dengan jaminan kerja setelah 4 bulan!</p>
                    <button class="button-primary ">Button</button>
                </div>
            </div>
        </div>
</section>
<section id="why" class="why">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Why Must Maxy?</h1>
            </div>
        </div>
    <div class="row">
        <div class="col-lg-4">
            <p>Bootcamp Academy dengan <br> mentor profesional dari <br> partner berkualitas</p>
        </div>
        <div class="col-lg-4">
            <p>Magang di perusahaan besar</p>
        </div>
        <div class="col-lg-4">
         <p> Jaminan 100% mendapatkan <br> pekerjaan</p>
        </div>
    </div>
    </div>
</section>

<section class="rapid-card" id="rapid-card">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="card" style="width: 360px; height: 532px;">
                    <img src="/img/course4.png" alt="course1">
                    <div class="card-body">
                        <h3>Digital Content Creator</h3>
                        <p>Sekarang semua bisa berkarir menjadi Tiktok Content Creator!</p>
                        <a href="/content" class="pt-5">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 360px; height: 532px;">
                        <img src="/img/course2.png" alt="course1">
                        <div class="card-body">
                            <h3>Hybrid Apps</h3>
                            <p>Belajar membuat website dan aplikasi dengan Framework 7 - 8 jam pembelajaran</p>
                            <a href="/hybrid" class="pt-5">Learn More</a>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 360px; height: 532px;">
                        <img src="/img/course1.png" alt="course1">
                        <div class="card-body">
                            <h3>Laravel Web Application Framework</h3>
                            <p>Belajar Laravel Web Application Framework dalam mengembangkan website selama 10 jam pembelajaran</p>
                            <a href="/laravel" class="pt-5">Learn More</a>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row mt-5 my-5">
            <div class="col-lg-4">
                <div class="card" style="width: 360px; height: 532px;">
                    <img src="/img/course3.png" alt="course1">
                    <div class="card-body">
                        <h3>UI/UX Design With Figma</h3>
                        <p>Belajar mendesign UI/UX website design dengan Figma dalam 12jam</p>
                        <a href="/figma" class="pt-5">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
