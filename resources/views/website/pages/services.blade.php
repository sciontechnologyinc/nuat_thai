@extends('website.master.template')

@section('content')

<header class= "aboutheader">
 <div class="card about1">
    <div class="whitebg1">
    <div class="services-title">Services/Packages</div>
    <div class="accordion" id="accordionExample">
    @foreach($packages as $package)
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#{{$package->id}}" aria-expanded="true" aria-controls="{{$package->id}}">
        {{ $package->packagecode }}
        </button>
      </h5>
    </div>

    <div id="{{$package->id }}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      {{ $package->packagedescription }}
      </div>
    </div>
  </div>
  @endforeach
</div>
    </div>
</div>   


</div> 
</header>


@endsection