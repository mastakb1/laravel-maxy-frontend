@extends('layouts.main')
@section('content')  
    <section id="maxytalk" class="maxytalk">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <h3>Lorem Ipsum dolor sit amet, <br> consectetur adipiscing elit,</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do <br> 
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> 
                    Ut enim ad minim veniam,</p>
                    <div class="btn-talk">
                        <button class="button-primary" onclick="window.location.href='/learn'">Regist Now</button>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    <p>Lorem ipsum dolor sit amet</p>
                        <div class="box-time mx-auto">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <h3 id="days">0</h3>
                                        <p>Days</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <h3 id="hours">0</h3>
                                        <p>Hours</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <h3 id="minutes">0</h3>
                                        <p>Minutes</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                    <h3 id="seconds">0</h3>
                                        <p>Seconds</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="webinar">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h3>Speaker</h3>
                    <div class="card">
                    </div>
                    <div class="card-2"></div>
                </div>
                <div class="col-lg-4">
                    <div class="schedule">
                        <p>08.00AM - 11.00AM<p>
                        <p>Tuesday, 1st Augst 2023</p>
                        <p>Daring</p>
                        <p>Via ZOOM Meetings</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h3>Moderator</h3>
                    <div class="card">
                    </div>
                    
                    <div class="card-2"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="web-benefit">
        <div class="container my-5">
            <div class="row pt-4">
                <div class="col-lg-12">
                    <h3>The Benefits You Will Get</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="content">
                            <h3>Lorem Ipsum dolor</h3>
                            <p>Lorem ipsum dolor sit amet, <br> 
                            consectetur adipiscing elit, sed do <br> 
                            eiusmod tempor incididunt ut <br> 
                            labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="content">
                            <h3>Lorem Ipsum dolor</h3>
                            <p>Lorem ipsum dolor sit amet, <br> 
                            consectetur adipiscing elit, sed do <br> 
                            eiusmod tempor incididunt ut <br> 
                            labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="content">
                            <h3>Lorem Ipsum dolor</h3>
                            <p>Lorem ipsum dolor sit amet, <br> 
                            consectetur adipiscing elit, sed do <br> 
                            eiusmod tempor incididunt ut <br> 
                            labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        CountDownTimer()
        function CountDownTimer(){
            var end = new Date('{{ $targetDate }}');

            var _second = 1000;
            var _minute = _second * 60;
            var _hour = _minute * 60;
            var _day = _hour * 24;
            var timer;

            function showRemaining() {
                var now = new Date();
                var distance = end - now;
                if (distance < 0) {
                    clearInterval(timer);
                    document.getElementById(id).innerHTML = 'ora paham';
                    return;
                }

                var days = Math.floor(distance / _day);
                var hours = Math.floor((distance % _day) / _hour);
                var minutes = Math.floor((distance % _hour) / _minute);
                var seconds = Math.floor((distance % _minute) / _second);

                document.getElementById("days").innerHTML = days;
                document.getElementById("hours").innerHTML = hours;
                document.getElementById("minutes").innerHTML = minutes;
                document.getElementById("seconds").innerHTML = seconds;
            }
            timer = setInterval(showRemaining, 1000);
        }
    </script>
@stop