@extends('admin.template')
@section('content')

<div class="card">
	<div class="card-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1>Edit Data User</h1>
				</div>
				<div class="col-md-12">
					<form action="{{url ('admin/user', $user->id)}}" method="post">
						@csrf
						@method('PUT')
					<div class="form-group">
						<label for="" class="control-label">Nama</label>
						<input type="text" class="form-control" name="nama" value="{{$user->nama}}">	
					</div>	
					<div class="form-group">
						<label for="" class="control-label">Username</label>
						<input type="text" class="form-control" name="username" value="{{$user->username}}">	
					</div>
					<div class="form-group">
						<label for="" class="control-label">Email</label>
						<input type="email" class="form-control" name="email" value="{{$user->email}}">	
					</div>	
					<div class="form-group">
						<label for="" class="control-label">Password</label>
						<input type="password" class="form-control" name="password">	
					</div>
						<div class="form-group">
						<label for="" class="control-label">No Hp</label>
						<input type="text" class="form-control" name="no_handphone">	
					</div>			
					<button class="btn btn-info float-right"><i class="fa fa-save"> Simpan</i></button>	
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection