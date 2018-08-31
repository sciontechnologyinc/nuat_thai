@extends('website.master.template')

@section('content')
<div class="container reservation-page">
    <div class="reservation-title">RESERVATIONS</div>
    <div class="reservation-desc">Check existing reservations.</div>
    <table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">Time</th>
      <th scope="col">No Of Reservation</th>
    </tr>
  </thead>
  <tbody>
    @foreach($bookmassages as $bookmassage)
    <tr class="bg-success">
      <td>{{ $bookmassage->datetime }}</td>
      <td>{{ $bookmassage->noofreservation }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>  
@endsection