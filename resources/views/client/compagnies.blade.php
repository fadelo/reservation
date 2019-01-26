@extends('layouts.masterClient', ['title'=>'Compagnies'])

@section('content_header')
      <h1>
        Compagnies disponibles
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('ClientHome') }}"><i class="fa fa-dashaboard"></i>Home</a></li>
        <li><a href="{{ route('clientComp') }}"><i class="fa fa-bus"></i>Compagnies</a></li>
        <li class="active">Toutes les compagnies</li>
      </ol>
@endsection

@section('content')
	<div class="row" style="margin-top: 5px;">
      <div class="col-md-4 col-xs-12">
          
      </div>
      <div class="col-md-4 col-xs-12" style="margin-top: 10px;">
          
      </div>
      <div class="col-md-4 col-xs-12">
          <div class="form-group input-group">
                 <input type="text" class="form-control" placeholder="zone de recherche">
                  <span class="input-group-btn">
                      <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                  </span>
            </div>
      </div>
   </div>
 @for ($i = 0; $i < $nb; $i++)
   <div class="box">
       <div class="box-header">
          <a href="#voirUneCompagnie" data-toggle="modal" data-target="#exampleModal"><h1 class="box-title">{{ $comp[$i]->nom }}</h1>
          </a>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="modalComp" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalComp">{{ $comp[$i]->nom }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="box-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#Identification" data-toggle="tab">Identification</a></li>
                                <li><a href="#Contacts" data-toggle="tab">Contacts</a></li>
                                <li><a href="#Avantage" data-toggle="tab">Avantages</a></li>
                                <li><a href="#Paiement" data-toggle="tab">Comptes de paiement</a></li>
                                <li><a href="#Plus" data-toggle="tab">Plus</a></li>
                                
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="Identification">
                                    
                                        <div class="box-body">
                                          <div class="row">
                                            <div class="col-md-6 col-xm-12">
                                              <div class="form-group">
                                            <label for="nomComp">Raison sociale</label>
                                            <input type="text" class="form-control" name="nomComp" id="nomComp" placeholder="Nom de la compagnie" disabled="disabled" value="{{ $comp[$i]->nom }}">
                                          </div>
                                          <div class="form-group">
                                            <label for="desComp">Description</label>
                                            <textarea class="form-control required" rows="2" name="desComp" placeholder="Description de la compagnie" disabled="disabled"></textarea>
                                          </div>
                                          
                                            </div>
                                            <div class="col-md-6 col-xm-12">
                                            <div class="form-group">
                                            <label for="rccmComp">N° RCCM </label>
                                            <input type="text" class="form-control " name="rccmComp" id="rccmComp" placeholder="Numéro RCCM" disabled="disabled">
                                          </div>
                                              <div class="form-group">
                                            <label for="ifuComp">N° IFU </label>
                                            <input type="text" class="form-control" name="ifuComp" id="ifuComp" placeholder="Numéro IFU" disabled="disabled">
                                          </div>
                                            </div>
                                          </div>
                                          
                                        </div>
                                    
                                </div>
                                <div class="tab-pane fade" id="Contacts">
                                   
                                    <div class="box-body">
                                      <div class="col-md-12 col-xm-12">
                                        <div class="form-group">
                                        <label for="telComp">N° de téléphone</label>
                                        <input type="text" class="form-control" name="telComp" placeholder="Numéro de téléphone" disabled="disabled">
                                      </div>
                                      <div class="form-group">
                                        <label for="emailComp">Email</label>
                                        <input type="Email" class="form-control" name="emailComp" placeholder="Adresse email" disabled="disabled">
                                      </div>
                                      <div class="form-group">
                                        <label for="adrComp">Adresse</label>
                                        <textarea class="form-control" rows="2" name="adrComp" placeholder="Adresse de la compagnie" disabled="disabled"></textarea>
                                      </div>
                                      </div>
                                    </div>
                                    
                                </div>
                                <div class="tab-pane fade" id="Avantage">
                                    
                                    <div class="box-body">
                                        <div class="form-group">
                                            <div class="checkbox">
                                              <label class="checkbox">
                                                <input type="checkbox" name="wifi" value="Wi-Fi" disabled="disabled">Wi-Fi
                                            </label>
                                            <br>
                                            <label class="checkbox">
                                                <input type="checkbox" name="clim" value="Climatisation" disabled="disabled">Climatisation
                                            </label>
                                            </div> 
                                        </div>
                                        </div>
                                      </div>
                                
                                <div class="tab-pane fade" id="Paiement">
                                    
                                    <div class="box-body">
                                      <div class="col-md-12 col-xm-12">
                                        <div class="form-group">
                                        <label for="numBanqComp">Compte bancaire</label>
                                        <input type="text" class="form-control" name="numBanqComp" placeholder="Numéro de compte" disabled="disabled">
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6 col-xm-12">
                                         <div class="form-group">
                                        <label for="momoComp">Mobile Money</label>
                                        <input type="text" class="form-control" name="momoComp" placeholder="Numéro mobile money" disabled="disabled">
                                      </div>
                                      
                                       </div>
                                       <div class="col-md-6 col-xm-12">
                                         <div class="form-group">
                                        <label for="floozComp">Flooz</label>
                                        <input type="text" class="form-control" name="floozComp" placeholder="Numéro flooz" disabled="disabled">
                                      </div>
                                      </div>
                                       
                                       </div>
                                      </div>

                                        
                                      </div>
                                    
                                    
                                </div>
                                <div class="tab-pane fade" id="Plus">
                                    
                                    <div class="box-body">
                                    <div class="row">
                                      <div class="col-md-4 col-xm-12">
                                          <div class="form-group">
                                        <label for="validiterReserv">Validité d'un ticket (en jour)</label>
                                        <input type="int" class="form-control" name="validiterReserv" placeholder="validité d'un ticket" disabled="disabled">
                                      </div>
                                      </div>
                                      <div class="col-md-4 col-xm-12">
                                        <div class="form-group">
                                        <label for="durPostPenalite">Nombre de jour avant pénalité</label>
                                        <input type="text" class="form-control" name="durPostPenalite" placeholder="plage de repport" disabled="disabled">
                                      </div>
                                      </div>
                                      <div class="col-md-4 col-xm-12">
                                        <div class="form-group">
                                        <label for="penaliter">Pourcentage de pénalité (en %)</label>
                                        <input type="int" class="form-control" name="prnaliter" placeholder="pénalité en %" disabled="disabled">
                                      </div>
                                      </div>
                                    </div>
                                      
                                      <div class="row">
                    
                                        <div class="col-md-12 col-xm-12">
                                          <div class="form-group">
                                            <label for="msgAverti">Message d'avertissement</label>
                                            <textarea class="form-control" rows="2" name="msgAverti" disabled="disabled"></textarea>
                                          </div>
                                      </div>
                                      </div>
                                      
                                      </div>
                                    
                                </div>
                            </div>
                        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
         <h1 class="box-title pull-right">{{ $comp[$i]->telephone }}</h1>
       </div>
       <div class="box-body">
         
       </div>
     </div>

 @endfor
   
@stop


