<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  {{-- <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">



</head>

<body>
  
@include('layouts.dashheader')
<div class="container">
  @include('inc.message')
</div>
@yield('content')

  {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>  --}}
  <script  src="https://code.jquery.com/jquery-3.6.0.min.js"  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="  crossorigin="anonymous"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  
  {{-- <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<!-- Page level plugins -->
<script src="{{asset('assets/dash/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/dash/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('assets/dash/js/demo/datatables-demo.js')}}"></script>
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script> --}}
{{-- <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script> --}}




<script>
  $(document).ready(function(){
  $('#newShipment').on('submit', function(event){
    event.preventDefault();
    $.ajaxSetup({
    headers:{'X-CSRF-Token': '{{csrf_Token()}}'}
  });    
  $.ajax({
   url:"{{ route('shipment') }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
     $('#newShipment')[0].reset();
      console.log(data);
    $('#shipmentmessage').css('left', '5%');
    $('#shipmentmessage').html(data.message);
    $("#shipmentmessage").delay(1000).fadeOut(700);
   }
  })
 });

});

</script>
</body>

</html>