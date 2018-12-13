@extends('layouts/masterAdmin', ['title'=>'Users'])

@section('content_header')
      <h1>
        Gestion des utilisateurs
        <small>Abonées</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{ route('Adminhome') }}"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="#"><i class="fa fa-users"></i>Utilisateurs</a></li>
        <li class="active"></li>
      </ol>
@endsection

@section('content')
	<section class="content">
	      <!-- Small boxes (Stat box) -->
	      
	      	<div class="row">
	      		<div class="col-md-4 col-xs-12">
	      			<div class="box box-primary">
	      				<div class="box-header">
	      					<h3 class="box-title">Nouvel utilisateur</h3>
	      				</div>
		      			<div class="box-body">
		      				<div class="form-group">
						      <label for="nomClient">Nom</label>
						      <input type="text" class="form-control" name="nomClient">
						    </div>
						    <div class="form-group">
						      <label for="prenomClient">Prénom</label>
						      <input type="text" class="form-control" name="prenomClient">
						    </div>
						    <div class="form-group">
						      <label for="telClient">Téléphone</label>
						       <input type="text" class="form-control" name="telClient">
				            </div>
				            <div class="form-group">
				                <label for="passClient">Mot de passe</label>
				                <input type="password" class="form-control" name="passClient">
				            </div>
				            <div class="form-group">
				                <label for="passClient">Confirmer mot de passe</label>
				                <input type="password" class="form-control" name="passClient">
				            </div>
				            <div>
				            	<button class="btn btn-flat btn-warning pull-left" type="reset">Annuler</button>	
				            	<button class="btn btn-flat btn-primary pull-right" type="submit">Enregistrer</button>
				            </div>
		      			</div>
	      			</div>
	      			
	      		</div>
	      		<div class="col-md-8 hidden-xs">
	      			<div class="box box-primary">
	      				<div class="box-header">
				           <h3 class="box-title">Liste des abonnés</h3>        
				     </div>
				        <div class="box-body">
				             
				              <div class="table-responsive">
				                                <table class="table table-striped table-bordered table-hover">
				                                    <thead>
				                                        <tr>
				                                            <th>Code</th>
				                                            <th>Nom</th>
				                                            <th>Prénom</th>
				                                            <th>Téléphone</th>
				                                            <th colspan="2" align="center">Actions</th>
				                                            
				                                        </tr>
				                                    </thead>
				                                    <tbody>
				                                        <tr>
				                                            <td>1</td>
				                                            <td>ISSA</td>
				                                            <td>Marwane</td>
				                                            <td>+227 09548789</td>
				                                            <td align="center">
				                                              <a href="#"><i class="glyphicon glyphicon-edit"></i></a>
				                                            </td>
				                                            <td align="center">
				                                            <a href="#"><i class="glyphicon glyphicon-remove-circle"></i></a>
				                                            </td>
				                                            
				                                        </tr>
				                                        <tr>
				                                            <td>2</td>
				                                            <td>KAO</td>
				                                            <td>Jean</td>
				                                            <td>+228 98548789</td>
				                                            <td align="center">
				                                              <a href="#"><i class="glyphicon glyphicon-edit"></i></a>
				                                            </td>
				                                            <td align="center">
				                                            <a href="#"><i class="glyphicon glyphicon-remove-circle"></i></a>
				                                            </td>
				                                            
				                                        </tr>
				                                        <tr>
				                                            <td>3</td>
				                                            <td>DAGBA</td>
				                                            <td>Anglade</td>
				                                            <td>+229 97542136</td>
				                                            <td align="center">
				                                              <a href="#"><i class="glyphicon glyphicon-edit"></i></a>
				                                            </td>
				                                            <td align="center">
				                                            <a href="#"><i class="glyphicon glyphicon-remove-circle"></i></a>
				                                            </td>
				                                            
				                                        </tr>
				                                        <tr>
				                                            <td>4</td>
				                                            <td>TRUMP</td>
				                                            <td>Donald</td>
				                                            <td>+229 95548789</td>
				                                            <td align="center">
				                                              <a href="#"><i class="glyphicon glyphicon-edit"></i></a>
				                                            </td>
				                                            <td align="center">
				                                            <a href="#"><i class="glyphicon glyphicon-remove-circle"></i></a>
				                                            </td>
				                                            
				                                        </tr>
				                                    </tbody>
				                                    <tfoot>
				                                      <tr>
				                                        <th>Code</th>
				                                            <th>Nom</th>
				                                            <th>Prénom</th>
				                                            <th>Téléphone</th>
				                                            <th colspan="2" align="center">Action</th>
				                                      </tr>
				                                    </tfoot>
				                                </table>
				                            </div>
	      			</div>
				</div>		     
	</section>   
@endsection