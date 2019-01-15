@extends('layouts.masterAgent', ['title'=>'MaCompagnie'])

@section('content_header')
      <h1>
        Gestion de ma compagnie <small>Confort Lines</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('AgentHome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{ url('agent/maCompagnie/show') }}"><i class="fa fa-home"></i>Ma Compagnie</a></li>
        <li class="active">Toutes les informations</li>
      </ol>
@endsection

@section('content')
    <div class="row">
      <div class="col-md-12 col-xm-12">
      <form>
        <div class="box box-primary">
        <div class="box-header">
             <h1 class="box-title">Information sur Confort Lines</h1>
             <a href="{{ url('agent/maCompagnie/edit') }}" class="btn btn-primary pull-right">Modifier</a>
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
                                            <label for="exampleInputEmail1">Raison sociale</label>
                                            <input type="text" class="form-control required" name="nomComp" id="exampleInputEmail1" placeholder="Nom de la compagnie" >
                                          </div>
                                          <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control required" rows="2" name="desComp" placeholder="Description de la compagnie"></textarea>
                                          </div>
                                          
                                            </div>
                                            <div class="col-md-6 col-xm-12">
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">N° RCCM </label>
                                            <input type="text" class="form-control " name="numRCCM" id="exampleInputEmail1" placeholder="Numéro RCCM">
                                          </div>
                                              <div class="form-group">
                                            <label for="exampleInputEmail1">N° IFU </label>
                                            <input type="text" class="form-control" name="numIFU" id="exampleInputEmail1" placeholder="Numéro IFU">
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
                                        <label for="telComp">N° de téléphone</label>
                                        <input type="text" class="form-control" name="numComp" placeholder="Numéro de téléphone" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="emailComp">Email</label>
                                        <input type="Email" class="form-control" name="emailComp" placeholder="Adresse email" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="adrCom">Adresse</label>
                                        <textarea class="form-control" rows="2" name="adrComp" placeholder="Adresse de la compagnie"></textarea>
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
                                        <label for="telComp">Compte bancaire</label>
                                        <input type="text" class="form-control" name="numBankComp" placeholder="Numéro de compte" required>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6 col-xm-12">
                                         <div class="form-group">
                                        <label for="emailComp">Mobile Money</label>
                                        <input type="Email" class="form-control" name="momoComp" placeholder="Numéro mobile money" required>
                                      </div>
                                      
                                       </div>
                                       <div class="col-md-6 col-xm-12">
                                         <div class="form-group">
                                        <label for="adrCom">Flooz</label>
                                        <input type="text" class="form-control" rows="2" name="floozComp" placeholder="Numéro flooz">
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
                                        <label for="durValidReser">Validité d'un ticket (en jour)</label>
                                        <input type="int" class="form-control" name="durValidReser" placeholder="Numéro de compte" required>
                                      </div>
                                      </div>
                                      <div class="col-md-3 col-xm-12">
                                        <div class="form-group">
                                        <label for="nbrJrAvtPenalite">Nombre de jour avant pénalité</label>
                                        <input type="text" class="form-control" name="nbrJrAvtPenalite" placeholder="Numéro de compte" required>
                                      </div>
                                      </div>
                                      <div class="col-md-3 col-xm-12">
                                        <div class="form-group">
                                        <label for="pourcentagPenalite">Pourcentage de pénalité (en %)</label>
                                        <input type="int" class="form-control" name="pourcentagPenalite" placeholder="Numéro de compte" required>
                                      </div>
                                      </div>
                                    </div>
                                      
                                      <div class="row">
                                        <div class="col-md-9 col-xm-12">
                                          <div class="form-group">
                                            <label for="msgAvert">Message d'avertissement</label>
                                            <textarea class="form-control" rows="2" name="msgAvert" required></textarea>
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
                        
                        </div>
                    </div>
                    </form>
              </div>      <!-- /.panel -->
      </div>
@stop