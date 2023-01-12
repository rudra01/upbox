<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trackshipment;
use App\Shipment;
use App\ShipmentHistory;
class WebpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Homepage');
    }

    public function Track(Request $request)
    {
        //
        $no = $request->input('trackingno');
        $ships = Shipment::all();
        $tracks = ShipmentHistory::where('barcode','like', $no)->orderBy('id', 'DESC')->get();
        return view('Track', compact('ships', 'tracks'));
    }
    public function Contact()
    {
        //
        return view('Contact');
    }

    public function Feature()
    {
        //
        return view('Feature');
    }
    public function RateCalculator()
    {
        //
        return view('RateCalculator');
    }

    public function getdata(Request  $request)
    {
        $len = $request->input('lenght');
        $width = $request->input('width');
        $height = $request->input('height');
        $cal = ($len * $width * $height)/5000;
        return response()->json([
            'message'   => 'incontroller',
            'class_name'  => 'alert-success',
            'length' => $len,
            'Width' => $width,
            'height' => $height,
            'cal' => $cal,
            ]);
    }

    
    
}
