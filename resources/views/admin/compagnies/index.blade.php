@extends('layouts.masterAdmin', ['title'=>'Compagnies'])

@section('content_header')
	  <h1>
        Gestion des compagnies <small>Toutes les compagnies</small>
    </h1>
    <ol class="breadcrumb">
   		<li><a href="{{ route('Adminhome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
       <li><a href="{{ route('compagnies.index') }}"><i class="fa fa-bus"></i>Compagnies</a></li>
       <li>Liste</li>
    </ol>
@stop

@section('content')
  <div class="row" style="margin-top: 5px;">
    <div class="col-md-4 col-xs-12">
        <a href="{{ route('compagnies.create') }}" class="btn btn-primary btn-block"><i class="fa fa-plus"></i>  Ajouter une compagnie</a>
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
   <div class="box" style="margin-top: 10px;">
     <div class="box-header">
        <h1 class="box-title">Liste des compagnies</h1>
     </div>
     <div class="box-body">

    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
          <thead>
            <tr>
              <th>Nom</th>
              <th>Téléphone</th>
              <th>Adresse</th>
              <th colspan="3" style="text-align: center">Actions</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($compagnies as $comp)
              <tr>
                  <td>{{ $comp->nom }}</td>
                <td>{{ $comp->telephone }}</td>
                <td>{{ $comp->adresse }}</td>
                <td align="center"><a href="#voirUneCompagnie" data-toggle="modal" data-target="#exampleModal"><i class="glyphicon glyphicon-eye-open" title="Voir"></i>
                  </a>
                </td>

                <td align="center"><a href="{{ route('compagnies.edit', $comp)  }}"><i class="glyphicon glyphicon-edit"></i></a></td>
                <td align="center">
                  <form action="{{ route('compagnies.destroy', $comp) }}" method="POST" onsubmit="return confirm('Si vous supprimez une compagnie, toutes les informations lui étant relié seront éffacées. Voulez-vous continuer ?')">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                  </form>
                  <button type="submit"><i class="glyphicon glyphicon-trash " style="color:red;"></i></button></td>
              </tr> 

              @endforeach
          </tbody>
          <tfoot>
              <tr>
              <th>Nom</th>
              <th>Téléphone</th>
              <th>Adresse</th>
              <th colspan="3" style="text-align: center">Actions</th>
            </tr>
          </tfoot>
        </table>
      </div>
     </div>
     <div class="box-footer">
        
     </div>
   </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="modalComp" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalComp">{{ $comp->nom }}</h5>
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
                                            <input type="text" class="form-control" name="nomComp" id="nomComp" placeholder="Nom de la compagnie" disabled="disabled" value="{{ $comp->nom }}">
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
                                          <div class="row">
                                            <div class="col-md-12 col-xs-12">
                                              <div class="form-group">
                                            <label for="logoComp">Logo</label>
                                            <input type="file" name="logoComp" id="logoComp" disabled="disabled">
                                            <p class="help-block">Taille maximum : 2Mo</p>
                                          </div>
                                            </div>
                                          </div>
                                        </div>
                                    
                                </div>
                                <div class="tab-pane fade" id="Contacts">
                                    <h4>Volet des Contacts de la compagnie</h4>
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
                                    <h4>Volet des avantages de la compagnie</h4>
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
                                    <h4> Volet des Comptes de paiement</h4>
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
                                <div class="tab-pane fade" id="Parametres">
                                    <h4> Volet de Paramètrage</h4>
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




@stop



