@extends('website.master.template')

@section('content')

<style>
.card-container {
    display: grid;
    padding: 1rem;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    grid-gap: 1rem;
}
.card {
    display: grid;
}
.card .button {
    align-self: end;
}

.service-price {
    text-align: center;
    font-size: 22px;
    color: #3f3f3f;
}
/* Simple Card styles for prettying */

html {
    font-size: 16px;
    font-family: 'Open Sans', 'Helvetica Neue', 'Arial', sans-serif;
}

body {
    background-color: #efefef;
}
* {
    box-sizing: border-box;
}
.card {
    box-shadow: 0px 1px 5px #555;
    background-color: white;
}
.card__title {
    font-size: 2rem;
    padding: .5rem;
}
.card__description {
    padding: .5rem;
    line-height: 1.6em;
}
.button {
    display: block;
    background-color: tomato;
    padding: 10px 20px;
    color: white;
    text-decoration: none;
    text-align: center;
    transition: .3s ease-out;
    &:hover {
        background-color: darken(tomato, 10%);
    }
}
main.card__description {
    text-align: center;
}
header.card__title {
    text-align: center;
    color: #080e74;
}
</style>

<header class= "aboutheader">
 <div class="card about1">
    <div class="whitebg1">
    <div class="services-title">Services/Packages</div>
    </div>
</div>   

<section class="card-container">
    @foreach($packages as $package)
    <article class="card" id="{{$package->id }}">
        <header class="card__title">
            <h3>{{ $package->packagecode }} </h3>
        </header>
        <main class="card__description">
            {{ $package->packagedescription }}
        </main>
        <div class="service-price">Php. {{ $package->price }}</div>
    </article>
    @endforeach

</section>


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