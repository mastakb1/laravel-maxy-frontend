<!-- @extends('layouts.main')
@section('content')
<section class="lms">
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7">
                <section class="chart-stat">
                    <h3>Your Statistic</h3>
                    <div class="card">
                        <canvas id="myChart"></canvas>
                    </div>
                </section>

                <section class="activity py-5">
                    <h3>Recent Activities</h3>
                    <div class="card">
                        <ul class="progress-checklist py-5 mx-4">
                            <li onclick="markCompleted(this)">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h3> 
                                <p>lorem ipsum dolor sit amet</p>
                            </li>
                            <li onclick="markCompleted(this)"> 
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h3> 
                                <p>lorem ipsum dolor sit amet</p>
                            </li>
                            <li onclick="markCompleted(this)">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h3> 
                                <p>lorem ipsum dolor sit amet</p>
                            </li>
                            <li onclick="markCompleted(this)">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h3> 
                                <p>lorem ipsum dolor sit amet</p>
                            </li>
                            <li onclick="markCompleted(this)">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h3> 
                                <p>lorem ipsum dolor sit amet</p>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <div class="col-lg-5">
                <section id="progres">
                    <h3>Your Progress</h3>
                    <div class="progress">
                        <div class="progress-bar" style="width:97%">
                            <h2 class="modult">97% <br> From <br>
                            <span class="subtext"> 30 Module yang kamu ambil</span></h2>
                        </div>
                    </div>
                </section>

                <section class="assignment py-5">
                    <h3>Assigments</h3>
                    <div class="card">
                        <p>lorem ipsum</p>
                    </div>
                </section>

                <section class="schedule py-5">
                    <h3>Schedule</h3>
                    <div class="wrapper">
                        <header>
                            <p class="current-date"></p>
                            <div class="icons">
                            <span id="prev" class="fas fa-chevron-left"></span>
                            <span id="next" class="fas fa-chevron-right"></span>
                            </div>
                        </header>
                            <div class="calendar">
                                <ul class="weeks">
                                    <li>Sun</li>
                                    <li>Mon</li>
                                    <li>Tue</li>
                                    <li>Wed</li>
                                    <li>Thu</li>
                                    <li>Fri</li>
                                    <li>Sat</li>
                                </ul>
                                <ul class="days"></ul>
                            </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</section>
@stop -->