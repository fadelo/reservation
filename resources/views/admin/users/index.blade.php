@extends('layouts/masterAdmin', ['title'=>'Abonnee'])



@section('content_header')
      <h1>
        Gestion des utilisateurs
        
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{ route('Adminhome') }}"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('users.index') }}"><i class="fa fa-users"></i>Utilisateurs</a></li>
        
      </ol>
@endsection

@section('content')
    <section class="content">
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
                                                <th colspan="2" align="center">Actions</th>
                                                
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
                                                <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
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
                                                <th colspan="2" align="center">Action</th>
                                          </tr>
                                        </tfoot>
                                    </table>
                                </div>
                </div>
          </div>
    </section>
@endsection