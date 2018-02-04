@extends('main')

@section('title','Home')

@section('content')
<div class="container">
  <div class="row">
    <div class="col s12">
      <br><br>
      <div class="slider">
   <ul class="slides">
     <li>
       <img src="/images/slide1.jpg"> <!-- random image -->
       <div class="caption center-align">
         <h3>This is our big Tagline!</h3>
         <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
       </div>
     </li>
     <li>
       <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
       <div class="caption left-align">
         <h3>Left Aligned Caption</h3>
         <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
       </div>
     </li>
     <li>
       <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
       <div class="caption right-align">
         <h3>Right Aligned Caption</h3>
         <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
       </div>
     </li>
     <li>
       <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
    </div>
    <div class="col s6">

    </div>
    <div class="col s6">

    </div>
  </div>
</div>
@endsection
