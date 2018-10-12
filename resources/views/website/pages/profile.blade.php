@extends('website.master.template')

@section('content')
<div class="container reservation-page">
    <div class="reservation-title mx-0 px-0">Account Reservations</div>
    <div class="table-responsive">
        
        <div class="container col-xl-12">
            <br>
            <br>
            <table id="table_id" class="display" >
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Reservation</th>
                            <th>Contact No.</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>No. of Reservation</th>
                            <th>Package</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
        </div>
        
    </div>
    <br/>
@endsection