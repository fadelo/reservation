@extends('layouts.masterAgent', ['title'=>'MaCompagnie'])

@section('content_header')
      <h1>
        Gestion de ma compagnie <small>Modification</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('AgentHome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{ url('agent/maCompagnie') }}"><i class="fa fa-home"></i>Ma Compagnie</a></li>
        <li class="active">Modification</li>
      </ol>
@endsection

@section('content')
    <div class="row">
      <div class="col-md-12 col-xm-12">
      <form action="{{ route('maCompagnie.update', $maComp) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="box box-primary">
        <div class="box-header">
             <h1 class="box-title">Modification de ma compagnie</h1>
             
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
                                            <input type="text" class="form-control" name="nom" placeholder="Nom de la compagnie" value="{{ old('nom') ?? $maComp->nom }}">
                                          </div>
                                          <div class="form-group">
                                            <label>Description</label>
                                            <textarea type="text" class="form-control required" rows="2" name="des" placeholder="Description de la compagnie" >{{ old('des') ?? $maComp->description }}</textarea>
                                          </div>
                                          
                                            </div>
                                            <div class="col-md-6 col-xm-12">
                                            <div class="form-group">
                                            <label for="rccm">N° RCCM </label>
                                            <input type="text" class="form-control " name="rccm" id="rccm" placeholder="Numéro RCCM" value="{{ old('rccm') ?? $maComp->rccm }}" >
                                          </div>
                                              <div class="form-group">
                                            <label for="ifu" class="label-control">N° IFU </label>
                                            <input type="text" class="form-control" name="ifu" placeholder="Numéro IFU" value="{{ old('ifu') ?? $maComp->ifu }}" >
                                          </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-12 col-xs-12">
                                              <div class="form-group">
                                            <label for="exampleInputFile">Logo</label>
                                            <input type="file" id="exampleInputFile">
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
                                        <label for="tel">N° de téléphone</label>
                                        <input type="text" class="form-control" name="tel" placeholder="Numéro de téléphone" value="{{ old('tel') ?? $maComp->telephone }}">
                                      </div>
                                      <div class="form-group">
                                        <label for="email" class="label-control">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Adresse email" value="{{ old('email') ?? $maComp->email }}">
                                      </div>
                                      <div class="form-group">
                                        <label for="adr" class="label-control">Adresse</label>
                                        <textarea class="form-control" rows="2" name="adr" placeholder="Adresse de la compagnie" >{{ old('adr') ?? $maComp->description }}</textarea>
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
                                                <input type="checkbox" value="Wi-Fi">Wi-Fi
                                            </label>
                                            <br>
                                            <label class="checkbox">
                                                <input type="checkbox" value="Climatisation">Climatisation
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
                                        <input type="text" class="form-control" name="bank" placeholder="Numéro de compte" value="{{ old('bank') ?? $maComp->num_compte_bancaire }}">
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6 col-xm-12">
                                         <div class="form-group">
                                        <label for="momo" class="label-control">Mobile Money</label>
                                        <input type="text" class="form-control" name="momo" placeholder="Numéro mobile money" value="{{ old('momo') ?? $maComp->momo }}">
                                      </div>
                                      
                                       </div>
                                       <div class="col-md-6 col-xm-12">
                                         <div class="form-group">
                                        <label for="flooz" class="label-control">Flooz</label>
                                        <input type="text" class="form-control" rows="2" name="floozComp" placeholder="Numéro flooz" value="{{ old('flooz') ?? $maComp->flooz }}">
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
                                        <label for="validiter">Validité d'un ticket (en jour)</label>
                                        <input type="number" class="form-control" name="validiter" placeholder="Numéro de compte" value="{{ old('validiter') ?? $maComp->validiterReserv }}">
                                      </div>
                                      </div>
                                      <div class="col-md-3 col-xm-12">
                                        <div class="form-group">
                                        <label for="postPenaliter">Nombre de jour avant pénalité</label>
                                        <input type="number" class="form-control" name="postPenaliter" placeholder="Nombre de jour avant pénalité" value="{{ old('postPenaliter') ?? $maComp->durPostPenaliter }}">
                                      </div>
                                      </div>
                                      <div class="col-md-3 col-xm-12">
                                        <div class="form-group">
                                        <label for="penaliter">Pourcentage de pénalité (en %)</label>
                                        <input type="int" class="form-control" name="penaliter" placeholder="Pourcentage de la pénalité" value="{{ old('penaliter') ?? $maComp->penaliter }}">
                                      </div>
                                      </div>
                                    </div>
                                      
                                      <div class="row">
                                        <div class="col-md-9 col-xm-12">
                                          <div class="form-group">
                                            <label for="msgAvert">Message d'avertissement</label>
                                            <textarea class="form-control" rows="2" name="msgAvert">{{$maComp->msgAverti}}</textarea>
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
                          <a href="{{ route('maCompagnie.index') }}" class="btn btn-warning pull-left"><i class="glyphicon glyphicon-backward"></i> Annuler</a>
                          <button type="sumbit" class="btn btn-primary pull-right">Modifier</button>
                        </div>
                    </div>
                    </form>
              </div>      <!-- /.panel -->
      </div>
@stop