@extends('adminlte::page')
	@section('content')
	{{-- About 1 --}}
		<div class="container">
			<h1 class="text-center mb-5">Section About</h1>
			@if (count($abouts) === 0)
				<a href="{{route('about.create')}}" class="btn btn-primary mb-3">Créer</a>
			@endif
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Description de la Section</h3>

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
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($abouts as $about)
									<tr class="">
										<td>{{maxStr($about->description, 65)}}</td>
										<td class="d-flex justify-content-end">
											<form action="{{route('about.destroy', $about->id)}}" method="POST" enctype="multipart/form-data">
												@csrf
												@method('delete')
												<a href="{{route('about.edit', $about->id)}}" class="btn btn-primary">Modifier</a>
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

		{{-- About 2 --}}
			@if (count($abouts2) < 3)
				<a href="{{route('about2.create')}}" class="btn btn-primary mb-3 mt-5">Créer</a>
			@endif
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">About Us</h3>

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
									<th>Icon</th>
									<th>Titre</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($abouts2 as $about2)
									<tr class="">
										<td><img src="{{asset('storage/'.$about2->img_path)}}" alt=""  class="w-100"></td>
										<td><i class="{{changeIcon($about2->icon)}}"></i></td>
										<td>{{maxStr($about2->titre, 20)}}</td>
										<td>{{maxStr($about2->description, 20)}}</td>
										<td class="d-flex justify-content-end">
											<form action="{{route('about2.destroy', $about2->id)}}" method="POST" enctype="multipart/form-data">
												@csrf
												@method('delete')
												<a href="{{route('about2.edit', $about2->id)}}" class="btn btn-primary">Modifier</a>
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
	@endsection