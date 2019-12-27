<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meeting;

class HomeController extends Controller
{
    public function dashboard()
    {
        $dateNow = date("Y-m-d");
        
        $mornings = Meeting::where([
            ['tanggal', $dateNow],
            ['timestart', '>=', 800],
            ['timeend', '<=', 1059]
        ])->count();

        $noons = Meeting::where([
            ['tanggal', $dateNow],
            ['timestart', '>=', 1100],
            ['timeend', '<=', 1459]
        ])->count();

        $afternoons = Meeting::where([
            ['tanggal', $dateNow],
            ['timestart', '>=', 1500],
            ['timeend', '<=', 1700]
        ])->count();

        $meetings = Meeting::with('Room')->where('tanggal', $dateNow)->get()->groupBy('id_room');
        // return $meetings;
        return view('dashboard', [
            'mornings' => $mornings,
            'noons' => $noons,
            'afternoons' => $afternoons,
            'meetings' => $meetings
        ]);
    }
}
