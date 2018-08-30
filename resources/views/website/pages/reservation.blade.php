@extends('website.master.template')

@section('content')
<div class="container reservation-page">
    <div class="reservation-title">RESERVATIONS</div>
    <div class="reservation-desc">Check existing reservations.</div>
    <table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($bookmassages as $bookmassage)
    <tr class="bg-success">
      <th scope="row">05:00 AM</th>
      <td>08-28-2018</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>  
@endsection