@extends('website.master.template')

@section('content')

<header class= "aboutheader">
 <div class="card about1">
    <div class="whitebg1">
    <div class="services-title">Services/Packages</div>
    <div class="accordion" id="accordionExample">
    @foreach($packages as $package)
  <div class="card services">
    <div class="card-header services" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link services" type="button" data-toggle="collapse" data-target="#{{$package->id}}" aria-controls="{{$package->id}}">
        {{ $package->packagecode }} 
        
        </button>
      </h5>
    </div>

    <div id="{{$package->id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body services">
      {{ $package->packagedescription }}
      <div class="service-price">Php. {{ $package->price }}</div>
      </div>
    </div>
  </div>
  @endforeach
</div>
    </div>
</div>   


<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<div class="container services">
  <h2></h2>
   <section class="customer-logos slider">
      <div class="slide"><img src="/images/slider1.jpg"></div>
      <div class="slide"><img src="/images/slider2.jpg"></div>
      <div class="slide"><img src="/images/slider3.jpg"></div>
      <div class="slide"><img src="/images/slider4.jpg"></div>
      <div class="slide"><img src="/images/slider5.jpg"></div>
      <div class="slide"><img src="/images/slider6.jpg"></div>
      <div class="slide"><img src="/images/slider7.jpg"></div>
      <div class="slide"><img src="/images/slider8.jpg"></div>
   </section>
</div>

<div class="padding"></div>
</header>


@endsection