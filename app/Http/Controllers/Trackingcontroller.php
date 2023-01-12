<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipment;
use App\Consignee;
use App\Consignor;
use App\Trackshipment;
use App\Billing;
use App\ShipmentHistory;
use PDF;
class Trackingcontroller extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ships = Shipment::all();
        $tracks = Trackshipment::all();
        $hists = ShipmentHistory::all();
        return view('tracker.index', compact('tracks', 'hists', 'ships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ships = Shipment::orderBy('id', 'DESC')->get();
        return view('tracker.create', compact('ships'));
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
        $his = new ShipmentHistory();
        $his->barcode = $request->input('barcode');	
        $his->ShipmentDate = $request->input('ShipmentDate');	
        $his->ShipmentTime = $request->input('ShipmentTime');	
        $his->Location	= $request->input('Location');
        $his->Comments = $request->input('Comments');	
        $his->status = $request->input('trackingstatus');	     

        $ship = Shipment::where('barcodeno', $his->barcode)->first();
        
        $track = Trackshipment::where('ShipmentID', $ship->id)->first();

        if($track){
            return redirect('/tracking')->with('error' , 'Tracking Already Exits !!');
        }else{

        $track = new Trackshipment();
        $track->ShipmentID = $ship->id ;
        $track->Status = $his->status ;
        $track->save();

        $his->tackerID	= $track->id;
        $his->save();
            return redirect('/tracking')->with('success' , 'Tracking Created !!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ships = Shipment::all();
        $consignee = Consignee::all();
        $consignor = Consignor::all();
        $track = Trackshipment::find($id);
        $bills = Billing::all();
        $hist = ShipmentHistory::orderBy('id', 'DESC')->get();
        return view('tracker.edit', compact('ships', 'consignee', 'consignor', 'track', 'bills', 'hist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        
        $track1 = Trackshipment::find($id);
        $ship = Shipment::where('id', $track1->ShipmentID)->first();
      
        $his = new ShipmentHistory();
        $his->barcode = $ship->barcodeno;	
        $his->ShipmentDate = $request->input('ShipmentDate');	
        $his->ShipmentTime = $request->input('ShipmentTime');	
        $his->Location	= $request->input('Location');
        $his->Comments = $request->input('Comments');	
        $his->status = $request->input('trackingstatus');	
        $his->tackerID	= $id;
        $his->save();
        
        $track1->Status = $his->status;
        $track1->save();
        return redirect('/tracking')->with('success' , 'Tracking Updated !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
