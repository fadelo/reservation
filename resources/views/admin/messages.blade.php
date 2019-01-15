@extends('layouts.masterAdmin', ['title'=>'Messages'])

@section('content_header')
      <h1>
        Panneau des messages
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('Adminhome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{ route('messages') }}"><i class="fa fa-envelope"></i>Messages</a></li>
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

                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                <div class="timeline-body">
                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                  weebly ning heekya handango imeem plugg dopplr jibjab, movity
                  jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                  quora plaxo ideeli hulu weebly balihoo...
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-primary btn-xs">Répondre</a>
                  <a class="btn btn-danger btn-xs">Supprimer</a>
                </div>
              </div>
            </li>

            <li>
              <i class="fa fa-envelope bg-blue"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 10:30</span>

                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                <div class="timeline-body">
                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                  weebly ning heekya handango imeem plugg dopplr jibjab, movity
                  jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                  quora plaxo ideeli hulu weebly balihoo...
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-primary btn-xs">Répondre</a>
                  <a class="btn btn-danger btn-xs">Supprimer</a>
                </div>
              </div>
            </li>
            
            <li>
              <i class="fa fa-clock-o bg-gray"></i>
            </li>
          </ul>
  </div>

@stop