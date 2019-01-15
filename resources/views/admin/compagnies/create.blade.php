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
      <form>
        <div class="box box-primary">
        <div class="box-header">
             <h1 class="box-title">Enrégistrement d'une compagnie</h1>
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
                                            <label for="nomComp">Raison sociale</label>
                                            <input type="text" class="form-control required" name="nomComp" id="nomComp" placeholder="Nom de la compagnie" >
                                          </div>
                                          <div class="form-group">
                                            <label for="desComp">Description</label>
                                            <textarea class="form-control required" rows="2" name="desComp" placeholder="Description de la compagnie"></textarea>
                                          </div>
                                          
                                            </div>
                                            <div class="col-md-6 col-xm-12">
                                            <div class="form-group">
                                            <label for="rccmComp">N° RCCM </label>
                                            <input type="text" class="form-control " name="rccmComp" id="rccmComp" placeholder="Numéro RCCM">
                                          </div>
                                              <div class="form-group">
                                            <label for="ifuComp">N° IFU </label>
                                            <input type="text" class="form-control" name="ifuComp" id="ifuComp" placeholder="Numéro IFU">
                                          </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                          	<div class="col-md-12 col-xs-12">
                                          		<div class="form-group">
                                            <label for="logoComp">Logo</label>
                                            <input type="file" name="logoComp" id="logoComp">
                                            <p class="help-block">Taille maximum : 2Mo</p>
                                          </div>
                                          	</div>
                                          </div>
                                        </div>
                                    <div class="box-footer">
                                      <a href="#Avantage" class="btn btn-default pull-right">Suivant <i class="glyphicon glyphicon-forward"></i></a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Contacts">
                                    <h4>Volet des Contacts de la compagnie</h4>
                                    <div class="box-body">
                                      <div class="col-md-6 col-xm-12">
                                        <div class="form-group">
                                        <label for="telComp">N° de téléphone</label>
                                        <input type="text" class="form-control" name="telComp" placeholder="Numéro de téléphone">
                                      </div>
                                      <div class="form-group">
                                        <label for="emailComp">Email</label>
                                        <input type="Email" class="form-control" name="emailComp" placeholder="Adresse email">
                                      </div>
                                      <div class="form-group">
                                        <label for="adrComp">Adresse</label>
                                        <textarea class="form-control" rows="2" name="adrComp" placeholder="Adresse de la compagnie"></textarea>
                                      </div>
                                      </div>
                                    </div>
                                    <div class="box-footer">
                                    <a href="#Identification" class="btn btn-default pull-left"><i class="glyphicon glyphicon-backward"></i> Précédent</a>
                                    <a href="#Avantage" class="btn btn-default pull-right"><i class="glyphicon glyphicon-forward"></i> Suivant</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Avantage">
                                    <h4>Volet des avantages de la compagnie</h4>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <div class="checkbox">
                                              <label class="checkbox">
                                                <input type="checkbox" name="wifi" value="Wi-Fi">Wi-Fi
                                            </label>
                                            <br>
                                            <label class="checkbox">
                                                <input type="checkbox" name="clim" value="Climatisation">Climatisation
                                            </label>
                                            </div>
                                            
                                        </div>
                                        </div>
                                      <div class="box-footer">
                                    <a href="#Contacts" class="btn btn-default pull-left"><i class="glyphicon glyphicon-backward"></i> Précédent</a>
                                      <a href="#Paiement" class="btn btn-default pull-right">Suivant <i class="glyphicon glyphicon-forward"></i></a>
                                    </div>
                                      </div>
                                
                                <div class="tab-pane fade" id="Paiement">
                                    <h4> Volet des Comptes de paiement</h4>
                                    <div class="box-body">
                                      <div class="col-md-6 col-xm-12">
                                        <div class="form-group">
                                        <label for="numBanqComp">Compte bancaire</label>
                                        <input type="text" class="form-control" name="numBanqComp" placeholder="Numéro de compte">
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6 col-xm-12">
                                         <div class="form-group">
                                        <label for="momoComp">Mobile Money</label>
                                        <input type="text" class="form-control" name="momoComp" placeholder="Numéro mobile money">
                                      </div>
                                      
                                       </div>
                                       <div class="col-md-6 col-xm-12">
                                         <div class="form-group">
                                        <label for="floozComp">Flooz</label>
                                        <input type="text" class="form-control" name="floozComp" placeholder="Numéro flooz">
                                      </div>
                                      </div>
                                       
                                       </div>
                                      </div>

                                        
                                      </div>
                                    
                                    <div class="box-footer">
                                    <a href="#Avantage" class="btn btn-default pull-left"><i class="glyphicon glyphicon-backward"></i> Précédent</a>
                                    <a href="#Parametres" class="btn btn-default pull-right"><i class="glyphicon glyphicon-forward"></i> Précédent</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Parametres">
                                    <h4> Volet de Paramètrage</h4>
                                    <div class="box-body">
                                    <div class="row">
                                      <div class="col-md-3 col-xm-12">
                                          <div class="form-group">
                                        <label for="validiterReserv">Validité d'un ticket (en jour)</label>
                                        <input type="int" class="form-control" name="validiterReserv" placeholder="validité d'un ticket" required>
                                      </div>
                                      </div>
                                      <div class="col-md-3 col-xm-12">
                                        <div class="form-group">
                                        <label for="durPostPenalite">Nombre de jour avant pénalité</label>
                                        <input type="text" class="form-control" name="durPostPenalite" placeholder="plage de repport">
                                      </div>
                                      </div>
                                      <div class="col-md-3 col-xm-12">
                                        <div class="form-group">
                                        <label for="penaliter">Pourcentage de pénalité (en %)</label>
                                        <input type="int" class="form-control" name="prnaliter" placeholder="pénalité en %">
                                      </div>
                                      </div>
                                    </div>
                                      
                                      <div class="row">
                    
                                        <div class="col-md-9 col-xm-12">
                                          <div class="form-group">
                                            <label for="msgAverti">Message d'avertissement</label>
                                            <textarea class="form-control" rows="2" name="msgAverti" ></textarea>
                                          </div>
                                      </div>
                                      </div>
                                      
                                      </div>
                                    <div class="box-footer">
                                    <a href="#Paiement" class="btn btn-default pull-left"><i class="glyphicon glyphicon-backward"></i> Précédent</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                        <div class="box-footer">
                        
                          <div class="form-group pull-right">
                            <button class="btn btn-flat btn-warning" type="reset">Annuler</button>
                            <button class="btn btn-flat btn-primary" type="submit">Enrégistrer</button>
                          </div>
                        </div>
                    </div>
                    </form>
              </div>      <!-- /.panel -->
      </div>
@stop