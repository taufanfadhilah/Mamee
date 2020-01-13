<?php

namespace App\Http\Controllers;

use App\Meeting;
use Illuminate\Http\Request;
use PDF;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function show(Meeting $meeting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function edit(Meeting $meeting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meeting $meeting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meeting $meeting)
    {
        //
    }

    public function report($year, $month)
    {
        $meetings = Meeting::whereYear('tanggal', $year)->whereMonth('tanggal', $month)->get();
        return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->setPaper('a4', 'landscape')->setWarnings(false)->loadview('meeting/report',  [
            'meetings' => $meetings,
            'year' => $year,
            'month' => $month,
            'currentDate' => date('d').' '.$this->getMonthBahasa(date('m')).' '.date('Y'),
            'monthBahasa' => $this->getMonthBahasa($month),
            'currentDay' => date('d')
        ])->download('Laporan Meeting MaMee '.$this->getMonthBahasa($month).' '.$year.'.pdf');
    }

    public function getMonthBahasa($month)
    {
        $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        return $bulan[--$month];
    }
}
