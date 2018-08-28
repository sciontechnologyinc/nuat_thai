@extends('website.master.template')

@section('content')
<div class="bookmassage-title">
    Book Massage
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Reservation Information</h4>
                    <div class="form-group">
                      <label for="fullname">Full Name</label>
                      <input type="text" class="form-control" id="fullname" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="contactno">Contact No.</label>
                      <input type="text" class="form-control" id="contactno" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="noofreservation">No of Reservation</label>
                        <select class="form-control form-control-lg" id="noofreservation">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="datetime">Date/Time</label>
                        <input type="datetime-local" class="form-control" id="datetime">
                    </div>
                    <div class="form-group">
                        <label for="noofreservation">Package</label>
                        <select class="form-control form-control-lg" id="noofreservation">
                            <option>A1 - 1hr Thai Body Massage + 30 mins Head Massage</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection