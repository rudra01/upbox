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
class ShipmentController extends Controller
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
    public function label($id)
    {
        //
        $ships = Shipment::find($id);
        $consignee = Consignee::all();
        $consignor = Consignor::all();
        $tracks = Trackshipment::all();
        $bills = Billing::all();
        $data = [
            'title' => 'Welcome to trygon.in',
            'ships' => $ships,
            'consignee' => $consignee,
            'consignor' => $consignor,
            'tracks' => $tracks,
            'bills' => $bills,
        ];
        $pdf = PDF::loadView('pdf.label', $data);
  
        return $pdf->download('label.pdf');
    }
    public function fullslip($id)
    {
        //
        $ships = Shipment::find($id);
        $consignee = Consignee::all();
        $consignor = Consignor::all();
        $tracks = Trackshipment::all();
        $bills = Billing::all();
        $data = [
            'title' => 'Welcome to trygon.in',
            'ships' => $ships,
            'consignee' => $consignee,
            'consignor' => $consignor,
            'tracks' => $tracks,
            'bills' => $bills,
        ];
        $pdf = PDF::loadView('pdf.airwaybill', $data);
  
        return $pdf->download('aiwaybill.pdf');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fullslip2($id)
    {
        //
        $ships = Shipment::find($id);
        $consignee = Consignee::all();
        $consignor = Consignor::all();
        $tracks = Trackshipment::all();
        $bills = Billing::all();
        $data = [
            'title' => 'Welcome to trygon.in',
        ];
        // $pdf = PDF::loadView('pdf.airwaybill', $data);
  
        return view('pdf.label', compact('ships', 'consignee', 'consignor', 'tracks', 'bills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function tracking()
    // {
    //     //
    //     $ships = Shipment::all();
    //     $tracks = Trackshipment::all();
    //     $hists = ShipmentHistory::all();
    //     return view('tracker.index', compact('tracks', 'hists', 'ships'));
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $ships = Shipment::find($id);
        $consignee = Consignee::all();
        $consignor = Consignor::all();
        $tracks = Trackshipment::all();
        $bills = Billing::all();
        return view('shipment.show', compact('ships', 'consignee', 'consignor', 'tracks', 'bills'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function tackeredit($id)
    // {
    //     //
    //     $ships = Shipment::all();
    //     $consignee = Consignee::all();
    //     $consignor = Consignor::all();
    //     $track = Trackshipment::find($id);
    //     $bills = Billing::all();
    //     $hist = ShipmentHistory::orderBy('id', 'DESC')->get();
    //     return view('tracker.edit', compact('ships', 'consignee', 'consignor', 'track', 'bills', 'hist'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ships = Shipment::find($id);
        $consignee = Consignee::all();
        $consignor = Consignor::all();
        $tracks = Trackshipment::all();
        $bills = Billing::all();
        return view('shipment.edit', compact('ships', 'consignee', 'consignor', 'tracks', 'bills'));
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
        $ship = Shipment::find($id);
        $ship->Origin = $request->input('origin');
        $ship->Destination = $request->input('desination');
        $ship->Noofpkgs = $request->input('Noofpkgs');
        $ship->Totalweight = $request->input('Totalweight');
        $ship->Length = $request->input('Length');
        $ship->width = $request->input('Weight');
        $ship->height = $request->input('height');
        $ship->DescripOfContents = $request->input('Description');
        $ship->docornot = $request->input('docornot');
        $ship->Payment_mode = $request->input('paymentmode');
        $ship->volweight = ( $request->input('Length') * $request->input('Weight') * $request->input('height') )/5000;
        $ship->barcodeno = 'UB31012201'.$ship->id ;
        $ship->save();

        $cid = $request->input('conseeid');
        $cons = Consignee::find($cid);
        $cons->Name = $request->input('cName');
        $cons->Phoneno = $request->input('cphone');
        $cons->Address = $request->input('caddress');
        $cons->City = $request->input('ccity');
        $cons->Country = $request->input('cCountry');
        $cons->zipcode = $request->input('czipcode');
        $cons->save();

        $conid = $request->input('consid');
        $consor = Consignor::find($conid);
        $consor->Name = $request->input('DesName');
        $consor->Phoneno = $request->input('Desphone');
        $consor->Address = $request->input('desaddress');
        $consor->City = $request->input('descity');
        $consor->Country = $request->input('desCountry');
        $consor->zipcode = $request->input('deszipcode');
        $consor->save();
        
       
        // $trackid = $request->input('tackid');
        // $track = Trackshipment::find($trackid);
        // $track->Status = $request->input('trackingstatus');
        // $track->save();


        $billid = $request->input('billid');
        $bill = Billing::find($billid);
        $bill->Amount = $request->input('Amount');
        if ($request->input('paymentmode') == 0) {
            # code...
            $bill->TotalAmount = $request->input('Amount');

        } else {
            # code...
            $bill->TotalAmount = $request->input('Amount') + ($request->input('Amount')*(18/100));

        }
        $bill->save();


        return redirect('/viewshipments')->with('success' , 'Shiment Updated !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $ships = Shipment::find($id);
        $consignee = Consignee::where('ShipmentID', '=',$ships->id)->first();
        $consignor = Consignor::where('ShipmentID', '=',$ships->id)->first();
        $tracks = Trackshipment::where('ShipmentID', '=',$ships->id)->first();
        $bills = Billing::where('ShipmentID', '=',$ships->id)->first();

        $his = ShipmentHistory::where('tackerID', '=',$tracks->id)->delete();
         $consignee->delete();
         $consignor->delete();;
         $tracks->delete();
         $bills->delete();
         $ships->delete();
        return redirect('/viewshipments')->with('Success' , 'Shipment Deleted !!');

    }

     /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            // $request->file('upload')->move(public_path('images'), $fileName);
            $request->file('upload')->storeAs('public/upload', $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            // $url = asset('images/'.$fileName); 
            $url = asset('storage/upload/'.$fileName) ;
            
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }


    // public function tackercreate(){
    //     $ships = Shipment::orderBy('id', 'DESC')->get();
    //     return view('tracker.create', compact('ships'));
    // }

    // public function tackerstore(Request $request){


    //     $his = new ShipmentHistory();
    //     $his->barcode = $request->input('barcode');	
    //     $his->ShipmentDate = $request->input('ShipmentDate');	
    //     $his->ShipmentTime = $request->input('ShipmentTime');	
    //     $his->Location	= $request->input('Location');
    //     $his->Comments = $request->input('Comments');	
    //     $his->status = $request->input('trackingstatus');	

    //     $ship = Shipment::where('trackingstatus', $his->barcode)->get();
    //     $track = Trackshipment::where('ShipmentID', $ship->id)->get();
    //     $his->tackerID	= $track->id;
    //     $his->save();


    //     $track1 = Trackshipment::find($his->tackerID);
    //     $track1->Status = $his->status;
    //     $track1->save();

    //     return redirect('/tracking')->with('success' , 'Tracking Created !!');
    // }
    // public function tackerupdate(Request $request){


    //     $his = new ShipmentHistory();
    //     $his->barcode = $request->input('barcode');	
    //     $his->ShipmentDate = $request->input('ShipmentDate');	
    //     $his->ShipmentTime = $request->input('ShipmentTime');	
    //     $his->Location	= $request->input('Location');
    //     $his->Comments = $request->input('Comments');	
    //     $his->status = $request->input('trackingstatus');	
    //     $his->tackerID	= $request->input('trackerID');
    //     $his->save();


    //     $track1 = Trackshipment::find($his->tackerID);
    //     $track1->Status = $his->status;
    //     $track1->save();

    //     return redirect('/tracking')->with('success' , 'Tracking Updated !!');
    // }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function shipment(Request $request)
    {
        //
        $ship = new Shipment();
        $ship->Origin = $request->input('origin');
        $ship->Destination = $request->input('desination');
        $ship->Noofpkgs = $request->input('Noofpkgs');
        $ship->Totalweight = $request->input('Totalweight');
        $ship->Length = $request->input('Length');
        $ship->width = $request->input('Weight');
        $ship->height = $request->input('height');
        $ship->DescripOfContents = $request->input('Description');
        $ship->docornot = $request->input('docornot');
        $ship->Payment_mode = $request->input('paymentmode');
        $ship->volweight = ( $request->input('Length') * $request->input('Weight') * $request->input('height') )/5000;
        $ship->save();
        $ship->barcodeno = 'UB31012201'.$ship->id ;
        $ship->save();


        $cons = new Consignee();
        $cons->Name = $request->input('cName');
        $cons->Phoneno = $request->input('cphone');
        $cons->Address = $request->input('caddress');
        $cons->City = $request->input('ccity');
        $cons->Country = $request->input('cCountry');
        $cons->zipcode = $request->input('czipcode');
        $cons->ShipmentID = $ship->id;
        $cons->save();

        $consor = new Consignor();
        $consor->Name = $request->input('DesName');
        $consor->Phoneno = $request->input('Desphone');
        $consor->Address = $request->input('desaddress');
        $consor->City = $request->input('descity');
        $consor->Country = $request->input('desCountry');
        $consor->zipcode = $request->input('deszipcode');
        $consor->ShipmentID = $ship->id;
        $consor->save();
        
       
        
        $track = new Trackshipment();
        $track->Status = $request->input('trackingstatus');
        $track->ShipmentID = $ship->id;
        // $track->barcode = $ship->barcodeno;
        $track->save();

        $hist = new ShipmentHistory();
        $hist->tackerID = $track->id;
        $hist->status = $request->input('trackingstatus');
        $hist->barcode	= $ship->barcodeno;
        $hist->Location = $request->input('origin');
        $hist->ShipmentTIme = date('H:i:s', strtotime($ship->created_at));
        $hist->ShipmentDate = date('Y-m-d', strtotime($ship->created_at));
        $hist->save();



        $bill = new Billing();
        $bill->Amount = $request->input('Amount');
        if ($request->input('paymentmode') == 0) {
            # code...
            $bill->TotalAmount = $request->input('Amount');

        } else {
            # code...
            $bill->TotalAmount = $request->input('Amount') + ($request->input('Amount')*(18/100));

        }
        $bill->ShipmentID = $ship->id;
        $bill->save();



        

        return response()->json([
            'message'   => 'Successfully Added',
            'class_name'  => 'alert-success',
            'tamoutnt' => $bill->TotalAmount,
            'barcode' => $ship->barcodeno,
            'volmar' =>$ship->volweight,
            ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createshipment(Request $request)
    {
        //
        $ship = new Shipment();
        $ship->Origin = $request->input('origin');
        $ship->Destination = $request->input('desination');
        $ship->Noofpkgs = $request->input('Noofpkgs');
        $ship->Totalweight = $request->input('Totalweight');
        $ship->Length = $request->input('Length');
        $ship->width = $request->input('Weight');
        $ship->height = $request->input('height');
        $ship->DescripOfContents = $request->input('Description');
        $ship->docornot = $request->input('docornot');
        $ship->Payment_mode = $request->input('paymentmode');
        $ship->volweight = ( $request->input('Length') * $request->input('Weight') * $request->input('height') )/5000;
        $ship->save();
        $ship->barcodeno = 'UB31012201'.$ship->id ;
        $ship->save();


        $cons = new Consignee();
        $cons->Name = $request->input('cName');
        $cons->Phoneno = $request->input('cphone');
        $cons->Address = $request->input('caddress');
        $cons->City = $request->input('ccity');
        $cons->Country = $request->input('cCountry');
        $cons->zipcode = $request->input('czipcode');
        $cons->ShipmentID = $ship->id;
        $cons->save();

        $consor = new Consignor();
        $consor->Name = $request->input('DesName');
        $consor->Phoneno = $request->input('Desphone');
        $consor->Address = $request->input('desaddress');
        $consor->City = $request->input('descity');
        $consor->Country = $request->input('desCountry');
        $consor->zipcode = $request->input('deszipcode');
        $consor->ShipmentID = $ship->id;
        $consor->save();
        
       
        
        $track = new Trackshipment();
        $track->Status = $request->input('trackingstatus');
        $track->ShipmentID = $ship->id;
        // $track->barcode = $ship->barcodeno;
        $track->save();

        $hist = new ShipmentHistory();
        $hist->tackerID = $track->id;
        $hist->status = $request->input('trackingstatus');
        $hist->barcode	= $ship->barcodeno;
        $hist->Location = $request->input('origin');
        $hist->ShipmentTIme = date('H:i:s', strtotime($ship->created_at));
        $hist->ShipmentDate = date('Y-m-d', strtotime($ship->created_at));
        $hist->save();



        $bill = new Billing();
        $bill->Amount = $request->input('Amount');
        if ($request->input('paymentmode') == 0) {
            # code...
            $bill->TotalAmount = $request->input('Amount');

        } else {
            # code...
            $bill->TotalAmount = $request->input('Amount') + ($request->input('Amount')*(18/100));

        }
        $bill->ShipmentID = $ship->id;
        $bill->save();

        return redirect('/viewshipments')->with('success' , 'Shiment Created !!');

        
    }
}
