<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipment;
use App\Consignee;
use App\Consignor;
use App\Trackshipment;
use App\Billing;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ships = Shipment::all();
        // $shipmentno = count($ships);
        $consignee = Consignee::all();
        $consignor = Consignor::all();
        $tracks = Trackshipment::all();
        $bills = Billing::all();
        $deliv = Trackshipment::where('Status', 'like', 'Delivery')->get(); 
        $fresh = Trackshipment::where('Status', 'like', 'Shipment information received')->get(); 
        $hold = Trackshipment::where('Status', 'like', 'Hold')->get(); 
        $monthinco = Billing::whereMonth('created_at', date('m'))->get();
        return view('Dashboad.home', compact('ships', 'consignee' , 'consignor' , 'tracks', 'bills','deliv', 'monthinco', 'fresh', 'hold'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ships = Shipment::all();
        $consignee = Consignee::all();
        $consignor = Consignor::all();
        $tracks = Trackshipment::all();
        $bills = Billing::all();
        return view('Dashboad.home2', compact('ships', 'consignee' , 'consignor' , 'tracks', 'bills'));
    }

    public function viewshipments()
    {
        $ships = Shipment::all();
        $consignee = Consignee::all();
        $consignor = Consignor::all();
        $tracks = Trackshipment::all();
        $bills = Billing::all();
        return view('shipment.index', compact('ships', 'consignee' , 'consignor' , 'tracks', 'bills'));
    }
    
    public function createshipment()
    {
        return view('shipment.create');
    }
}
