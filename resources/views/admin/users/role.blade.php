@extends('layouts/masterAdmin', ['title'=>'Users'])

@section('content_header')
      <h1>
        Gestion des utilisateurs
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{ route('Adminhome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{ route('users.index') }}"><i class="fa fa-users"></i>Utilisateurs</a></li>
        <li class="active">Attribuer un droit</li>
      </ol>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-6 col-xs-12">
			<form>
				<div class="box">
				<div class="box-header">
					
				</div>
				<div class="box-body">
					<div class="form-group">
						<label for="emailUser" class="label-control">Utilisateur</label>
						<select name="emailUser" class="form-control">
							<option>fadelsylla5@gmail.com</option>
						</select>
					</div>
					<div class="form-group">
						<label for="rolUser" class="label-control">Droit</label>
						<select name="rolUser" class="form-control">
							<option>Admin</option>
						</select>
					</div>
					<div class="form-group">
						<label for="compUser" class="label-control">Compagnie</label>
						<select name="compUser" class="form-control">
							<option>ATT</option>
						</select>
					</div>
				</div>
				<div class="box-footer">
					<div class="form-group pull-right">
						<button class="btn btn-default" type="reset">Annuler</button>
						<button class="btn btn-primary" type="submit">Assigner</button>
					</div>
				</div>
			</div>
			</form>
			
		</div>
	</div>
@stop