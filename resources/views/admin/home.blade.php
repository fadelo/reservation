@extends('layouts.masterAdmin', ['title'=>'Home'])

@section('content_header')
      <h1>
        Tableau de bord
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('Adminhome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Tableau de bord</li>
      </ol>
@endsection

@section('content')
 <!-- Main content -->
  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>3</h3>
              <p>Compagnies</p>
            </div>
            <div class="icon">
              <i class="fa fa-bus"></i>
            </div>
            <a href="ListeCompagnie.php" class="small-box-footer">Voir détails <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        <div class="col-md-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>5</h3>
              <p>Agents</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="agent.php" class="small-box-footer">Voir détails<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3>5</h3>
              <p>Abonnés</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="client.php" class="small-box-footer">Voir détails<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-md-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>2</h3>
              <p>Administrateurs</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="#" class="small-box-footer">Voir détails <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-xm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Taux de réservation
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Global</a>
                                        </li>
                                        <li><a href="#">Par compagnie</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" style="height: 180px;"></canvas>
                  </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
        </div>
        <div class="col-md-4 col-xm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Panneau de notification
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> Nouvel avis
                                    <span class="pull-right text-muted small"><em>il y a 4 minutes</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> 3 nouveaux abonnés
                                    <span class="pull-right text-muted small"><em>il y a 12 minutes</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> Message envoyé
                                    <span class="pull-right text-muted small"><em>il y a 27 minutes</em>
                                    </span>
                                </a>
                                
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i> Redémarage du serveur
                                    <span class="pull-right text-muted small"><em>11:32</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bolt fa-fw"></i> Le serveur ne répond pas!
                                    <span class="pull-right text-muted small"><em>11:13</em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href="{{ route('notifications') }}" class="btn btn-default btn-block">Voir toutes les notifications</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
        </div>
      </div>
  </section>

@stop