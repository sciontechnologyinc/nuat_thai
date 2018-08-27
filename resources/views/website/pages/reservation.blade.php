@extends('website.master.template')

@section('content')
<div class="container reservation-page">
    <div class="reservation-title">RESERVATION</div>
    <div class="reservation-desc">Check available schedule for massage and other information</div>

    <table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <tr class="bg-success">
      <th scope="row">05:00 AM</th>
      <td>08-28-2018</td>
    </tr>
    <tr class="bg-danger">
      <th scope="row">10:00 AM</th>
      <td>08-28-2018</td>
    </tr>
  </tbody>
</table>
</div>  
@endsection