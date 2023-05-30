<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountdownController extends Controller
{
    public function index()
    {
        $targetDate = '2023-08-20'; // Set your target date here
        $currentTime = time();
        $targetTime = strtotime($targetDate);

        $timeRemaining = $targetTime - $currentTime;

        // $days = floor($timeRemaining / (60 * 60 * 24));
        // $hours = floor(($timeRemaining % (60 * 60 * 24)) / (60 * 60));
        // $minutes = floor(($timeRemaining % (60 * 60)) / 60);
        // $seconds = $timeRemaining % 60;

        // $data=[
        //     'days'=> $days,
        //     'hours'=> $hours,
        //     'minutes'=> $minutes,
        //     'seconds'=> $seconds
        // ];

        return view('details.maxytalks',[
            'targetDate' => $targetDate,
            'currentTime' => $currentTime
        ]);
    }
}


// class CountdownController extends Controller
// {
//     public function index()
//     {
//         $targetDate = '2023-08-20'; // Set your target date here
//         $currentTime = time();
//         $targetTime = strtotime($targetDate);

//         $timeRemaining = $targetTime - $currentTime;

//         $days = floor($timeRemaining / (60 * 60 * 24));
//         $hours = floor(($timeRemaining % (60 * 60 * 24)) / (60 * 60));
//         $minutes = floor(($timeRemaining % (60 * 60)) / 60);
//         $seconds = $timeRemaining % 60;

//         $data=[
//             'days'=> $days,
//             'hours'=> $hours,
//             'minutes'=> $minutes,
//             'seconds'=> $seconds
//         ];
//         return view('details.maxytalks', compact('data'));
//     }
// }
