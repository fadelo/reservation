@extends('layouts.masterAdmin', ['title'=>'Settings'])

@section('content_header')
	<h1>
        Panneau de configurations
    </h1>
    <ol class="breadcrumb">
   		<li><a href="{{ route('Adminhome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
       	<li><a href="{{ route('settings') }}"><i class="fa fa-gears"></i>Parametres</a></li>
    </ol>
@stop

@section('content')
	<div class="row">
        <div class="col-md-4 col-xm-12">
          	<div class="box box-primary ">
	            <div class="box-header with-border">
			            <h3 class="box-title">Gestion des Pays</h3>
			    <!--       </div <div class="box-tools pull-right">
			                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
			                </button>
			            </div> -->
	            </div>
            <!-- /.box-header -->
	            <div class="box-body">
		              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPays" style="margin-bottom: 10px">
		                <i class="fa fa-plus"> Ajouter</i>
		              </button>
	              <!-- Modal -->
	              <form action="{{ route('pays.store') }}" method="POST">
	                      	{{ csrf_field() }}
		              <div class="modal fade" id="modalPays" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		                <div class="modal-dialog" role="document">
		                  <div class="modal-content">
		                    <div class="modal-header">
		                      <h5 class="modal-title" id="exampleModalLabel">Ajouter un pays</h5>
		                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                        <span aria-hidden="true">&times;</span>
		                      </button>
		                    </div>
		                    <div class="modal-body">	                      
		                          <div class="form-group">
		                              <label for="name" class="label-control">Nom du pays</label>
		                              <input type="text" name="name" class="form-control" placeholder="Entrer le nom du pays" required="required">
		                              {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
		                          </div>		                      
		                    </div>
		                    <div class="modal-footer">
		                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
		                      <button type="submit" class="btn btn-primary">Enrégistrer</button>
		                    </div>
		                  </div>
		                </div>
		              </div>
	              </form>
	              <div class="table-responsive">
	                                <table class="table table-striped table-bordered table-hover">
	                                    <thead>
	                                        <tr>
	                                            <th>Code</th>
	                                            <th>Nom du pays</th>
	                                            <th colspan="2" align="center">Action</th>
	                                            
	                                        </tr>
	                                    </thead>
	                                    <tbody> 
	                                    	@foreach ($listPays as $pays)
                                          <tr>
                                            <td>{{ $pays->name }}</td>
                                          </tr>
                                        @endforeach
	                                    </tbody>
	                                </table>
	                    </div>
	            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      
      <div class="col-md-8 col-xm-12">
          <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Gestion des Villes</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalVille" style="margin-bottom: 10px">
                <i class="fa fa-plus"> Ajouter</i>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="modalVille" tabindex="-1" role="dialog" aria-labelledby="modalLabeVille" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modalLabeVille">Ajouter une ville</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="form-group">
                          <label for="nomVille">Nom de la ville</label>
                          <input type="text" class="form-control" name="nomVille" placeholder="Nom de la ville">
                        </div>
                        <div class="form-group">
                          <label for="nomPays">Pays</label>
                          <select class="form-control">
                            <option>Bénin</option>
                            <option>Niger</option>
                            <option>Togo</option>
                          </select>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                      <button type="button" class="btn btn-primary">Enrégistrer</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Nom de la ville</th>
                                            <th>Pays</th>
                                            <th colspan="2" align="center">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Parakou</td>
                                            <td>Bénin</td>
                                            <td align="center">
                                              <a href="#"><i class="glyphicon glyphicon-edit"></i></a>
                                            </td>
                                            <td align="center">
                                            <a href="#"><i class="glyphicon glyphicon-remove-circle"></i></a>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Cotonou</td>
                                            <td>Bénin</td>
                                            <td align="center">
                                              <a href="#"><i class="glyphicon glyphicon-edit"></i></a>
                                            </td>
                                            <td align="center">
                                            <a href="#"><i class="glyphicon glyphicon-remove-circle"></i></a>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Niamey</td>
                                            <td>Niger</td>
                                            <td align="center">
                                              <a href="#"><i class="glyphicon glyphicon-edit"></i></a>
                                            </td>
                                            <td align="center">
                                            <a href="#"><i class="glyphicon glyphicon-remove-circle"></i></a>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lomé</td>
                                            <td>Togo</td>
                                            <td align="center">
                                              <a href="#"><i class="glyphicon glyphicon-edit"></i></a>
                                            </td>
                                            <td align="center">
                                            <a href="#"><i class="glyphicon glyphicon-remove-circle"></i></a>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    
  

      <!-- /.row -->
      <!-- Main row -->
      
<!-- ./wrapper -->
@stop