@extends('welcome')

@section('content')
 <div class="container">
  <div class="row">
   <div class="col-md-6">
    <a href="{{ url('get-pesan') }}" class="btn btn-danger btn-sm">
        Klik Disini
    </a>
    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
          <strong>{{ $message }}</strong>
      </div>
    @endif
@endsection