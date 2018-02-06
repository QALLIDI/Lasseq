@extends('main')

@section('title','Home')
@section('content')
  <div class="row">
    <div class="col s12">
      <div class="slider">
   <ul class="slides">
     <li>
       <img src="/images/slide1.jpg"> <!-- random image -->
       <div class="caption center-align">
         <h3>La première Plate-forme Open-Docs pour les étudiants de l'EMI.</h3>
         <h5 class="light grey-text text-lighten-3">Rejoinez vite !</h5>
       </div>
     </li>
     <li>
       <img src="/images/slide1.jpg"> <!-- random image -->
       <div class="caption left-align">
         <h3>Soyez un(e) Contributeur active dans notre Plate-forme.</h3>
         <h5 class="light grey-text text-lighten-3">Allez Partager vos documents ici !</h5>
       </div>
     </li>
     <li>
        <img src="/images/slide1.jpg"> <!-- random image -->
       <div class="caption right-align">
         <h3>Vous avez besoin d'un document,Examan,project ... etc.</h3>
         <h5 class="light grey-text text-lighten-3">Nous avons ce que vous chercher !</h5>
       </div>
     </li>
     <li>
        <img src="/images/slide1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Vous étes étudiant(e) de l'Ecole Mohammedia d'Ingénieurs ?</h3>
          <h5 class="light grey-text text-lighten-3">Soyez les Bienvenus !</h5>
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

@endsection
