@extends('adminlte::page')
	@section('content')
	{{-- table --}}
		<div class="container">
			<h1 class="text-center mb-5">Section Home</h1>
			<a href="{{route('home.create')}}" class="btn btn-primary mb-3">Créer</a>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Home</h3>

							<div class="card-tools">
								<div class="input-group input-group-sm" style="width: 150px;">
									<input type="text" name="table_search" class="form-control float-right" placeholder="Search">

									<div class="input-group-append">
										<button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
									</div>
								</div>
							</div>
						</div>
					<!-- /.card-header -->
					<div class="card-body table-responsive p-0">
						<table class="table table-hover text-nowrap">
							<thead>
								<tr>
									<th>Image</th>
									<th>Titre</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($homes2 as $home2)
									<tr class="">
										<td><img src="{{asset('storage/'.$home2->img_path)}}" class=" w-50" alt=""></td>
										<td>{{maxStr($home2->titre, 20)}}</td>
										<td>{{maxStr($home2->description, 20)}}</td>
										<td class="d-flex justify-content-end">
											<form action="{{route('home.destroy', $home2->id)}}" method="POST" enctype="multipart/form-data">
												@csrf
												@method('delete')
												<a href="{{route('home.edit', $home2->id)}}" class="btn btn-primary">Modifier</a>
												<button type="submit" class="btn btn-danger">Supprimer</button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
					<!-- /.card -->
			</div>
		</div>
	@endsection