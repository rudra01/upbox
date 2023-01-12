@extends('layouts.dashboard')

@section('content')


<div class="container-fluid mt-5">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 my-3">Shipments</h1>
    <button class="btn btn-primary my-3" data-toggle="modal" data-target="#CreateShipment">New Shipment</button>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Shipments </h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Tacking ID</th>
                        <th>Origin</th>
                        <th>Designtaion</th>
                        <th>No of Packages</th>
                        <th>Amount</th>
                        <th>Payment Mode</th>
                        <th>Tracking Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    
                    <tbody id="Shipmenttable">
                        @foreach ($ships as $ship)
                        <tr>
                            <th></th>
                            <th>{{$ship->barcodeno}}</th>
                            <th>{{$ship->Origin}}</th>
                            <th>{{$ship->Destination}}</th>
                            <th>{{$ship->Noofpkgs}}</th>
                            {{-- <th>{{$ship->Noofpkgs}}</th> --}}
                            
                                @foreach ($bills as $bill)
                                    @if ($bill->ShipmentID == $ship->id)
                                    <th> {{$bill->TotalAmount}}</th>
                                    @endif
                                @endforeach
                            
                                @if($ship->Payment_mode == 0)
                                    <th>Cash</th>
                                @else
                                    <th>Online</th>
                                @endif
                            @foreach ($tracks as $track)
                                @if ($track->ShipmentID == $ship->id)
                                    <th>{{$track->Status}}</th>
                                @endif
                            @endforeach
                            <th class="d-flex">
                                <a  href="{{ route('shipmentc.edit',[$ship->id]) }}"><img class="m-1" src="{{asset('assets/images/edit.png')}}" alt="edit" width="22"></a>
                                <a  href="{{ route('shipmentc.show',[$ship->id]) }}" ><img class="m-1" src="{{asset('assets/images/view.png')}}" alt="show" width="22"></a>
                                <a  href="#" data-toggle="modal" data-target="#deleteModal"><img class="m-1" src="{{asset('assets/images/delete.png')}}" alt="show" width="22"></a>   
                            </th>
                        </tr>
    <!-- Delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Are You Sure ? Do You Want to Delete Tracking No: {{$ship->barcodeno}}</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form action="{{ route('shipmentc.destroy' , $ship->id ) }}" method="post" >
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-primary" type="submit" title="Delete" >Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
  
          </div>
          <!-- /.container-fluid -->
  
    </div>

</div>

    


    <!-- Create extra Modal-->
  <div class="modal fade" id="CreateShipment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="alert " id="shipmentmessage" style=" position: fixed; bottom: 47px; padding:10px 20px; left:-150%;background:#2daf2d;color:white;display:inline-block;transition: all .3s; "></div>

        <div class="modal-body py-5">
            <form method="POST" id="newShipment">
              @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 py-2">
                            <label for="origin" >Origin:</label>
                            <input type="text" name='origin' class="form-control "  id="origin">
                        </div>
                        <div class="col-md-6 py-2">
                            <label for="origin" >Desination:</label>
                            <input type="text" name='desination' class="form-control " id="desination">
                        </div>
                    </div>
                </div>
                <div class="consigneebox bg-light p-2 my-3">
                    <h6>
                        Consignee
                    </h6>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 py-2">
                                <label for="Name" >Name:</label>
                            <input type="text" name='cName' class="form-control "  id="cName">
                            </div>
                            <div class="col-md-6 col-sm-12 py-2">
                                <label for="cphone" >Phone No:</label>
                            <input type="text" name='cphone' class="form-control "  id="cphone">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 py-2">
                                <label for="caddress" >Address:</label>
                                <textarea name="caddress" class="form-control " id="caddress" ></textarea>
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 py-2">
                                <label for="ccity" >City:</label>
                            <input type="text" name='ccity' class="form-control "  id="ccity">
                            </div>
                            <div class="col-md-4 col-sm-12 py-2">
                                <label for="cCountry" >Country:</label>
                            <input type="text" name='cCountry' class="form-control "  id="cCountry">
                            </div>
                            <div class="col-md-4 col-sm-12 py-2">
                                <label for="czipcode" >Zip/Postal Code:</label>
                            <input type="text" name='czipcode' class="form-control "  id="czipcode">
                            </div>
                        </div>
                    </div>
                </div>



                <div class="consigneebox bg-light p-2 my-3">
                    <h6>
                        Consignor
                    </h6>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 py-2">
                                <label for="Name" >Name:</label>
                            <input type="text" name='DesName' class="form-control "  id="DesName">
                            </div>
                            <div class="col-md-6 py-2">
                                <label for="pone" >Phone No:</label>
                            <input type="text" name='Desphone' class="form-control "  id="Desphone">
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 py-2">
                                <label for="origin" >Address:</label>
                                <textarea name="desaddress" class="form-control " id="desaddress" ></textarea>
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 py-2">
                                <label for="Name" >City:</label>
                            <input type="text" name='descity' class="form-control "  id="descity">
                            </div>
                            <div class="col-md-4 col-sm-12 py-2">
                                <label for="Name" >Country:</label>
                            <input type="text" name='desCountry' class="form-control "  id="desCountry">
                            </div>
                            <div class="col-md-4 col-sm-12 py-2">
                                <label for="Name" >Zip/Postal Code:</label>
                            <input type="text" name='deszipcode' class="form-control "  id="deszipcode">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 py-2">
                            <label for="noofpkgs" >No of Packages:</label>
                            <input type="number" name='Noofpkgs' class="form-control "  id="Noofpkgs">
                        </div>
                        <div class="col-md-6 py-2">
                            <label for="noofpkgs" >Total weights:</label>
                            <input type="number" name='Totalweight' class="form-control "  id="Totalweight">
                        </div>
                        
                        
                    </div>
                </div>
                <div class="heading text-center">
                    <h6>
                        DIMENSIONS OF BOX (CM) 
                    </h6>
                </div>
                <div class="row dimention ">
                    <div class="col-md-4 py-2">
                        <label for="Length" >Length:</label>
                        <input type="number" name='Length' class="form-control "  id="Length">
                    </div>
                    <div class="col-md-4 py-2">
                        <label for="Weight" >Weight:</label>
                        <input type="number" name='Weight' class="form-control "  id="Weight">
                    </div>
                    <div class="col-md-4 py-2">
                        <label for="height" >height:</label>
                        <input type="number" name='height' class="form-control "  id="height">
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12 py-2">
                            <label for="origin" >Package Description:</label>
                            <textarea name="Description" class="form-control " id="editor" ></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        {{-- <div class="col-md-4 py-2">
                            <label for="trackingstatus" >Tracking Status :</label>
                            <select name="trackingstatus" class="custom-select">
                                <option value="Shipment information received" selected>Shipment information received </option>
                              </select>
                        </div> --}}
                        <input type="text" name='trackingstatus' class="form-control "  id="trackingstatus" value="Shipment information received" hidden>
                        <div class="col-md-4 py-2">
                            <label for="origin" >Payment Mode :</label>
                            {{-- <input type="number" name='paymentmode' class="form-control "  id="paymentmode"> --}}
                            <select name="paymentmode" class="custom-select">
                                <option  selected>Select </option>
                                <option value="0">Cash</option>
                                <option value="1">Online</option>
                              </select>
                        </div>
                        <div class="col-md-4 py-2">
                            <label for="origin" >Amount :</label>
                            <input type="number" name='Amount' class="form-control "  id="Amount">
                        </div>
                        <div class="col-md-4 py-2">
                            <label for="origin" >Packaging Check
                                One Box :</label>
                                <select name="docornot" class="custom-select">
                                    <option selected>Select </option>
                                    <option value="1">Documents</option>
                                    <option value="0">Non Documents</option>
                                    
                                  </select>
                        </div>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        </form>
        </div>
      </div>
    </div>
  </div>

@endsection
