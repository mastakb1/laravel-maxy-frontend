@extends('layouts.main')
@section('content')
<h1>Countdown Timer</h1>
    <p>Days: <span id="days">{{ $days }}</span></p>
    <p>Hours: <span id="hours">{{ $hours }}</span></p>
    <p>Minutes: <span id="minutes">{{ $minutes }}</span></p>
    <p>Seconds: <span id="seconds">{{ $seconds }}</span></p>
@stop

