@extends('layouts/default')

@section('carousel')
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="img/route1.jpg" style="width: 1500px; height: 250px" alt="First slide">

                    <div class="carousel-caption d-none d-md-block">
                        <h1>PLATEFORME DE RESERVATION DES TICKETS DE BUS</h1>
                        <p style="color: black" class="text-faded">Ceci est le projet de soutenance de EL-HADJ SEIDOU Fadel Sylla et de HOUNDETON Napoléon, dans le cadre de l'obtention du diplôme de licence professionnelle en Informatique de Gestion</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="img/route3.jpg" style="width: 1500px; height: 250px" alt="Second slide">

                    <div class="carousel-caption d-none d-md-block">
              <h5>...</h5>
              <p>...</p>
          </div>
                  </div>
                  <div class="item">
                    <img src="img/route4.jpg" style="width: 1500px; height: 250px" alt="Third slide">

                    <div class="carousel-caption d-none d-md-block">
                        <h2>Vous êtes d'une manière ou d'une autre interessé par le présent projet ?</h2>
                        <p><a href="{{ route('contact_path') }}" class="btn btn-danger" style="border-radius: 300px">Contactez-nous</a></p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
</div>
@stop

@section('content')    
 	<section>
 		<br>
 		<h3 align="center"><b>Rechercher votre trajet et réserver en 30 secondes</b></h3>
 		<br>

 		<form action="{{ route('trajets_path') }}" method="POST">
 			{{ csrf_field() }}
 		<div class="row">
 		<div class="col-md-3">
 			<div class="input-group" style="margin-bottom: 10px">
		        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
			    <input type="text" name="villeDpt" class="form-control" placeholder="Départ">
		    </div>			
 		</div>
 		<div class="col-md-3">
 			<div class="input-group" style="margin-bottom: 10px">
		        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
			    <input type="text" name="villeArr" class="form-control" placeholder="Arrivée">
		    </div>			
 		</div>
 		<div class="col-md-3">
 			<div class="input-group" style="margin-bottom: 10px">
		        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
			    <input type="date" name="dateDpt" class="form-control" placeholder="Date du voyage">
		    </div>			
 		</div>
 		<div class="col-md-3">
 			<button class="btn btn-primary btn-block" type="submit">Rechercher</button>			
 		</div>			
 	</div>
 	</form>
 	</section>
 	
 	  	
 
@stop