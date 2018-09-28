@extends('website.master.template')

@section('content')
<div class="container reservation-page">
    <div class="reservation-title mx-0 px-0">Profile</div>
    <div class="table-responsive">
        
        <div class="container col-xl-12">
            <div class="card">
                <div class="form-group col-lg-12">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name"> 
                </div>

                <div class="form-group col-lg-12">
                        <label for="name">Email</label>
                        <input type="text" class="form-control" name="email">
                </div>

                <div class="form-group col-lg-12">
                        <label for="name">Contact Number</label>
                        <input type="text" class="form-control" name="contactnumber">
                </div>

                <div class="form-group col-lg-12">
                        <label for="name">Address</label>
                        <input type="text" class="form-control" name="address">
                </div>
            </div>
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