@extends('layouts.masterAdmin', ['title'=>'Notifications'])

@section('content_header')
      <h1>
        Panneau de notifications
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{ route('Adminhome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{ route('notifications') }}"><i class="fa fa-bell-o"></i>Notifications</a></li>
      </ol>
      <hr>
      <div class="col-md-4 col-xs-12 pull-right">
          <div class="form-group input-group" style="padding-right: 10px">
               <input type="text" class="form-control" placeholder="zone de recherche">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                </span>
          </div>
      </div>
@endsection

@section('content')
	<div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-red">
                    10 Feb. 2014
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-envelope bg-blue"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                <h3 class="timeline-header"><a href="#">Support Team</a> vous a envoyé un message</h3>

                <div class="timeline-body">
                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                  weebly ning heekya handango imeem plugg dopplr jibjab, movity
                  jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                  quora plaxo ideeli hulu weebly balihoo...
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-primary btn-xs">Voir plus</a>
                  <a class="btn btn-danger btn-xs">Supprimer</a>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-user bg-aqua"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                <h3 class="timeline-header no-border"><a href="#">Brice Guidibi</a> a rejoint FANAP RESERVATION</h3>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comment bg-yellow"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                <h3 class="timeline-header"><a href="#">Georges A.</a> a donné son avis</h3>

                <div class="timeline-body">
                  Take me to your leader!
                  Switzerland is small and neutral!
                  We are more like Germany, ambitious and misunderstood!
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-warning btn-xs">Voir l'avis</a>
                  <a class="btn btn-primary btn-xs">Poster</a>
                  <a class="btn btn-danger btn-xs">Supprimer</a>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-green">
                    3 Jan. 2014
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            
            <!-- END timeline item -->
            <li>
              <i class="fa fa-clock-o bg-gray"></i>
            </li>
          </ul>
        </div>

@stop