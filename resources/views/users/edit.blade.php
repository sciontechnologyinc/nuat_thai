@extends('website.master.template')

@section('content')


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
 {!! Form::open(['id' => 'dataForm', 'method' => 'PATCH', 'url' => 'users.edit' . $user->user ]) !!}
 <div class="container reservation-page">
        <div class="reservation-title mx-0 px-0">Account Settings</div>
    <div class="card">
        <div class="form-group col-lg-12">
                {!!Form::label('name', 'Full Name', array('class' => 'form-control-label'))!!}
                {!!Form::text('name',$user->name, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
        </div>
        <div class="form-group col-lg-12">
                {!!Form::label('email', 'Email', array('class' => 'form-control-label'))!!}
                {!!Form::text('email',$user->email, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
        </div>
        <div class="form-group col-lg-12">
                {!!Form::label('password', 'Password', array('class' => 'form-control-label'))!!}
                {!!Form::text('password','', ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
        </div>
        <div class="form-group col-lg-12">
                {!!Form::label('password_confirmation', 'Confirm', array('class' => 'form-control-label'))!!}
                {!!Form::text('password_confirmation','', ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
        </div>
        {!!Form::submit('Submit', ['id' => 'addForm','class' => 'btn btn-success mr-2']) !!}
        <button type="submit">Send</button>
        <button class="btn btn-light">Cancel</button>
    </div>
</div>
{!! Form::close() !!}
    @endsection