@extends('layouts.masterAdmin', ['title'=>'Compagnies'])

@section('content_header')
	<h1>
        Gestion des compagnies <small>Nouvelle compagnie</small>
    </h1>
    <ol class="breadcrumb">
   		<li><a href="{{ route('Adminhome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
       <li><a href="{{ route('compagnies.index') }}"><i class="fa fa-bus"></i>Compagnies</a></li>
       <li>Ajout</li>
    </ol>
@stop

@section('content')
    <div class="row">
      <div class="col-md-12 col-xm-12">
      <form action="{{ route('compagnies.store')}}" method="Post">
        {{ csrf_field() }}
        <div class="box box-primary">
        <div class="box-header">
             <h1 class="box-title">Modification d'une compagnie</h1>
        </div>
                       
                        <div class="box-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#Identification" data-toggle="tab">Identification</a></li>
                                <li><a href="#Contacts" data-toggle="tab">Contacts</a></li>
                                <li><a href="#Avantage" data-toggle="tab">Avantages</a></li>
                                <li><a href="#Paiement" data-toggle="tab">Comptes de paiement</a></li>
                                <li><a href="#Parametres" data-toggle="tab">Parametres</a></li>
                                
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="Identification">
                                    <h4>Volet d'identification de la compagnie</h4>
                                        <div class="box-body">
                                          <div class="row">
                                            <div class="col-md-6 col-xm-12">
                                              <div class="form-group">
                                            <label for="nom" class="label-control">Raison sociale</label>
                                            <input type="text" class="form-control" name="nom"  placeholder="Nom de la compagnie" value="{{ old('nom') }}" >
                                          </div>
                                          <div class="form-group">
                                            <label for="des" class="label-control">Description</label>
                                            <textarea class="form-control" rows="2" name="des" placeholder="Description de la compagnie">{{ old('des') }}</textarea>
                                          </div>
                                          
                                            </div>
                                            <div class="col-md-6 col-xm-12">
                                            <div class="form-group">
                                            <label for="rccm" class="label-control">N° RCCM </label>
                                            <input type="text" class="form-control " name="rccm" placeholder="Numéro RCCM" value="{{ old('rccm')}}" >
                                          </div>
                                              <div class="form-group">
                                            <label for="ifu" class="label-control">N° IFU </label>
                                            <input type="text" class="form-control" name="ifu" id="ifu" placeholder="Numéro IFU" value="{{ old('ifu') }}">
                                          </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-12 col-xs-12">
                                              <div class="form-group">
                                            <label for="logoComp" class="label-control">Logo</label>
                                            <input type="file" id="logoComp">
                                            <p class="help-block">Taille maximum : 2Mo</p>
                                          </div>
                                            </div>
                                          </div>
                                        </div>
                                <!--    <div class="box-footer">
                                      <a href="#Avantage" class="btn btn-default pull-right">Suivant <i class="glyphicon glyphicon-forward"></i></a>
                                    </div> -->
                                </div>
                                <div class="tab-pane fade" id="Contacts">
                                    <h4>Volet des Contacts de la compagnie</h4>
                                    <div class="box-body">
                                      <div class="col-md-6 col-xm-12">
                                        <div class="form-group">
                                        <label for="tel" class="label-control">N° de téléphone</label>
                                        <input type="text" class="form-control" name="tel" placeholder="Numéro de téléphone" value="{{ old('tel')  }}">
                                      </div>
                                      <div class="form-group">
                                        <label for="email" class="label-control">Email</label>
                                        <input type="Email" class="form-control" name="email" placeholder="Adresse email" value="{{ old('email')}}">
                                      </div>
                                      <div class="form-group">
                                        <label for="adr" class="label-control">Adresse</label>
                                        <textarea class="form-control" rows="2" name="adr" placeholder="Adresse de la compagnie">{{ old('adr')}}</textarea>
                                      </div>
                                      </div>
                                    </div>
                               <!--     <div class="box-footer">
                                    <a href="#Identification" class="btn btn-default pull-left"><i class="glyphicon glyphicon-backward"></i> Précédent</a>
                                    <a href="#Avantage" class="btn btn-default pull-right"><i class="glyphicon glyphicon-forward"></i> Suivant</a>
                                    </div> -->
                                </div>
                                <div class="tab-pane fade" id="Avantage">
                                    <h4>Volet des avantages de la compagnie</h4>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <div class="checkbox">
                                              <label class="checkbox">
                                                <input type="checkbox" value="{{ old('wifi') }}">Wi-Fi
                                            </label>
                                            <br>
                                            <label class="checkbox">
                                                <input type="checkbox" value="{{ old('clim') }}">Climatisation
                                            </label>
                                            </div>
                                            
                                        </div>
                                        </div>
                                  <!--    <div class="box-footer">
                                    <a href="#Contacts" class="btn btn-default pull-left"><i class="glyphicon glyphicon-backward"></i> Précédent</a>
                                      <a href="#Paiement" class="btn btn-default pull-right">Suivant <i class="glyphicon glyphicon-forward"></i></a>
                                    </div> -->
                                  </div>
                                
                                <div class="tab-pane fade" id="Paiement">
                                    <h4> Volet des Comptes de paiement</h4>
                                    <div class="box-body">
                                      <div class="col-md-6 col-xm-12">
                                        <div class="form-group">
                                        <label for="bank" class="label-control">Compte bancaire</label>
                                        <input type="text" class="form-control" name="bank" placeholder="Numéro de compte" value="{{ old('bank') }}">
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6 col-xm-12">
                                         <div class="form-group">
                                        <label for="momo" class="label-control">Mobile Money</label>
                                        <input type="text" class="form-control" name="momo" placeholder="Numéro mobile money" value="{{ old('momo') }}">
                                      </div>
                                      
                                       </div>
                                       <div class="col-md-6 col-xm-12">
                                         <div class="form-group">
                                        <label for="flooz" class="label-control">Flooz</label>
                                        <input type="text" class="form-control" rows="2" name="flooz" placeholder="Numéro flooz" value="{{ old('flooz')  }}">
                                      </div>
                                      </div>
                                       
                                       </div>
                                      </div>

                                        
                                      </div>
                                    
                           <!--         <div class="box-footer">
                                    <a href="#Avantage" class="btn btn-default pull-left"><i class="glyphicon glyphicon-backward"></i> Précédent</a>
                                    <a href="#Parametres" class="btn btn-default pull-right"><i class="glyphicon glyphicon-forward"></i> Précédent</a>
                                    </div>   -->
                                </div>
                                <div class="tab-pane fade" id="Parametres">
                                    <h4> Volet de Paramètrage</h4>
                                    <div class="box-body">
                                    <div class="row">
                                      <div class="col-md-3 col-xm-12">
                                          <div class="form-group">
                                        <label for="validite" class="label-control">Validité d'un ticket (en jour)</label>
                                        <input type="number" class="form-control" name="validite" placeholder="Numéro de compte" value="{{ old('validiter')}}">
                                      </div>
                                      </div>
                                      <div class="col-md-3 col-xm-12">
                                        <div class="form-group">
                                        <label for="postPenalite" class="label-control">Nombre de jour avant pénalité</label>
                                        <input type="number" class="form-control" name="postPenalite" placeholder="Numéro de compte" value="{{ old('postPenalite')}}">
                                      </div>
                                      </div>
                                      <div class="col-md-3 col-xm-12">
                                        <div class="form-group">
                                        <label for="penalite" class="label-control">Pourcentage de pénalité (en %)</label>
                                        <input type="number" class="form-control" name="penalite" placeholder="Numéro de compte" value="{{ old('penalite') }}">
                                      </div>
                                      </div>
                                    </div>
                                      
                                      <div class="row">
                                        <div class="col-md-9 col-xm-12">
                                          <div class="form-group">
                                            <label for="msgAverti" class="label-control">Message d'avertissement</label>
                                            <textarea class="form-control" rows="2" name="msgAverti">{{ old('msgAverti')}}</textarea>
                                          </div>
                                      </div>
                                      </div>
                                      
                                      </div>
                               <!--     <div class="box-footer">
                                    <a href="#Paiement" class="btn btn-default pull-left"><i class="glyphicon glyphicon-backward"></i> Précédent</a>
                                    </div>   -->
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                        <div class="box-footer">
                        
                          <div class="form-group pull-right">
                            <button class="btn btn-default" type="reset">Annler</button>
                            <button class="btn btn-primary" type="submit">Enregistrer</button>
                          </div>
                        </div>
                    </div>
                    </form>
              </div>      <!-- /.panel -->
      </div>
@stop