@extends('layouts/masterAdmin', ['title'=>'Abonnee'])

@section('content_header')
      <h1>
        Gestion des utilisateurs
        
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{ route('Adminhome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{ route('users.index') }}"><i class="fa fa-users"></i>Utilisateurs</a></li>
        
      </ol>
@endsection

@section('content')
      <div class="row" style="margin-top: 5px;">
    <div class="col-md-4 col-xs-12">
        <a href="{{ url('admin/users/create') }}" class="btn btn-primary btn-block">Attribuer un droit</a>
    </div>
    <div class="col-md-4 col-xs-12">
        
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
          <!-- Small boxes (Stat box) -->
          <div class="box box-primary">
            <div class="box-header">
               <h3 class="box-title">Tous les utilisateurs</h3> 
            </div>
            <div class="box-body">
                 
                  <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Email</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Téléphone</th>
                                                <th>Type</th>
                                                <th colspan="2" align="center" style="text-align: center;">Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>fadelsylla5@gmail.com</td>
                                                <td>SEIDOU</td>
                                                <td>Fadel</td>
                                                <td>+229 97996112</td>
                                                <td>Administrateur</td>
                                                <td align="center">
                                                  <a href="#"><i class="glyphicon glyphicon-edit"></i></a>
                                                </td>
                                                <td align="center">
                                                <a href="#"><i class="glyphicon glyphicon-trash " style="color:red;"></i></a>
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                          <tr>
                                                <th>Email</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Téléphone</th>
                                                <th>Type</th>
                                                <th colspan="2" align="center" style="text-align: center;">Action</th>
                                          </tr>
                                        </tfoot>
                                    </table>
                                </div>
                </div>
          </div>
    </section>
@endsection