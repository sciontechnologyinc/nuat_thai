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
                            <option>A1 - 1 hr Thai Body Massage + 30 mins Head Massage</option>
                            <option>B1 - 1 hr Thai Foot Massage + 30 mins Head Massage</option>
                            <option>C1 - 1 hr Swedish Massage +  30 mins Head Massage</option>
                            <option>D1 - 1.5 hr Aromatherapy +  30 mins Head Massage</option>
                            <option>E1 - 1.5 hr Hot Oil Massage + 30 mins Head Massage</option>
                            <option>F1 - 1.5 hr Ventosa Massage + 30 mins Head Massage</option>
                            <option>G1 - 1.5 hr Hot Stone Massage + 30 mins Head Massage</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success mr-2 bookmassage">Submit</button>
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
<div class="padding"></div>
@endsection