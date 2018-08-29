@extends('website.master.template')

@section('content')
<div class="bookmassage-title">
    Book Massage
</div>
@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

 @if(count($errors) > 0 )
    <div class="alert alert-danger">
        <strong>Whoooppss !!</strong> There were some problem with your input. <br>
        <ul>
          @foreach($errors->all() as $error)
              <li> {{ $error }} </li>
          @endforeach
        </ul>
    </div>
 @endif
{!! Form::open(['id' => 'dataForm', 'url' => 'bookmassagesave']) !!}
<div class="container">
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Reservation Information</h4>
                    <div class="form-group">
                    {!!Form::label('fullname', 'Full Name', array('class' => 'form-control-label'))!!}
                    {!!Form::text('fullname',null, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
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
                        <label for="package">Package</label>
                        <select class="form-control form-control-lg" id="package">
                            <option>A1 - 1 hr Thai Body Massage + 30 mins Head Massage</option>
                            <option>B1 - 1 hr Thai Foot Massage + 30 mins Head Massage</option>
                            <option>C1 - 1 hr Swedish Massage +  30 mins Head Massage</option>
                            <option>D1 - 1.5 hr Aromatherapy +  30 mins Head Massage</option>
                            <option>E1 - 1.5 hr Hot Oil Massage + 30 mins Head Massage</option>
                            <option>F1 - 1.5 hr Ventosa Massage + 30 mins Head Massage</option>
                            <option>G1 - 1.5 hr Hot Stone Massage + 30 mins Head Massage</option>
                        </select>
                    </div>
                    {!!Form::submit('Create BookMassage', ['id' => 'addForm','class' => 'btn btn-primary  col-lg-2 offset-7']) !!}
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
{!! Form::close() !!}
<div class="padding"></div>

@endsection