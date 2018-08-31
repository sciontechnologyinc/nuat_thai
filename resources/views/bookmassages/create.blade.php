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
{!! Form::open(['id' => 'dataForm', 'url' => '/bookmassages', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
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
                    {!!Form::label('contactno', 'Contact No', array('class' => 'form-control-label'))!!}
                    {!!Form::text('contactno',null, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                    </div>
                    <div class="form-group">
                    {!!Form::label('noofreservation', 'No of Reservation', array('class' => 'form-control-label'))!!}
                    {!!Form::select('noofreservation', array('1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6'), ['class' => 'form-control col-lg-12', 'required' => '' ]) !!}
                    </div>
                    <div class="form-group">
                    {!!Form::label('datetime', 'Date/Time', array('class' => 'form-control-label'))!!}
                    {!!Form::time('datetime',null, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                    </div>

                    <div class="form-group">
<<<<<<< HEAD
                       {!!Form::label('package', 'Package', array('class' => 'form-control-label'))!!}
=======
                       {!!Form::label('package', 'Packages', array('class' => 'form-control-label'))!!}
>>>>>>> 662840c0f7038352e53ecc16536080ca6b8d0b09
                       <div class="iconic-input">
                            <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon">
                            <i class="fa fa-bank"></i></span>
                            <select name="package" class="form-control">
<<<<<<< HEAD
                                    <option value="" disabled {{ old('package') ? '' : 'selected' }}>Choose a package</option>
=======
                                    <option value="" disabled {{ old('package') ? '' : 'selected' }}>Choose a Packages</option>
>>>>>>> 662840c0f7038352e53ecc16536080ca6b8d0b09
                                    @foreach($packages as $package)
                                        <option value="{{$package->id}}" {{ old('package') ? 'selected' : '' }}>{{$package->package}}</option>
                                    @endforeach
                                </select>
<<<<<<< HEAD
                            </div>
=======
                            </div>  
>>>>>>> 662840c0f7038352e53ecc16536080ca6b8d0b09
                      </div>
                    </div>

                    {!!Form::submit('Make Reservation', ['id' => 'addForm','class' => 'form-control btn btn-primary  col-lg-5 offset-6']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
<div class="padding"></div>

@endsection
