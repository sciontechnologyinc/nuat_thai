@extends('website.master.template')

@section('content')
<div class="bookingsummary-title">
    Booking Summary
</div>
<div class="container">
<div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Reservation Information</h4>
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control col-lg-12" readonly>
                    </div>
                    <div class="form-group">
                        <label for="contactno">Contact No</label>
                        <input type="text" class="form-control col-lg-12" readonly>
                    </div>
                    <div class="form-group">
                        <label for="noofreservation">No Of Reservation</label>
                        <input type="text" class="form-control col-lg-12" readonly>
                    </div>
                    <div class="form-group">
                        <label for="datetime">Date/Time</label>
                        <input type="text" class="form-control col-lg-12" readonly>
                    </div>
                    <div class="form-group">
                        <label for="package">Package</label>
                        <input type="text" class="form-control col-lg-12" readonly>
                    </div>
                  </div>
                </div>
            </div>
        </div>
</div>

<div class="padding"></div>

@endsection