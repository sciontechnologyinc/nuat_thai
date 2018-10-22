@extends('website.master.template')

@section('content')
<div class="container reservation-page">
    <div class="reservation-title mx-0 px-0">RESERVATIONS</div>
    <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th> Package Code</th>
              <th>Package Description</th>
              <th>Price</th>
              <th>No. of Reservation</th>
              <th>Date</th>
              <th>Status</th>
              <th>PayMaya</th>
            </tr>
          </thead>
          <tbody>
          @foreach($packages as $package)
            <tr>
              <td>{{ $package->packagecode }}</td>
              <td>{{ $package->packagedescription }}</td>
              <td>{{ $package->price }}</td>
              <td>{{ $package->noofreservation }}</td>
              <td>{{ $package->datetime }}</td>
              <td>{{ $package->status }}</td>
              <td><img src="{!! asset('images/PayMaya-logo.png') !!}" height="12%" stlye="margin-bottom:30px"></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    <br/>
</div>
@endsection