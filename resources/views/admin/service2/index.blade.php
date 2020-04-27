@extends('adminlte::page')
	@section('content')
	{{-- About 1 --}}
		<div class="container">
			<h1 class="text-center mb-5">Section Services 2</h1>
			@if (count($services2) === 0)
			<a href="{{route('service2.create')}}" class="btn btn-primary mb-3">Créer</a>
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
								@foreach ($services2 as $service2)
									<tr class="">
										<td>{{maxStr($service2->description, 65)}}</td>
										<td class="d-flex justify-content-end">
											<form action="{{route('service2.destroy', $service2->id)}}" method="POST" enctype="multipart/form-data">
												@csrf
												@method('delete')
												<a href="{{route('service2.edit', $service2->id)}}" class="btn btn-primary">Modifier</a>
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


				<a href="{{route('service3.create')}}" class="btn btn-primary mb-3 mt-5">Créer</a>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Services</h3>

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
									@foreach ($services3 as $service3)
										<tr class="">
											<td>
												<i class="{{changeIcon($service3->icon)}}"></i>
											</td>
											<td>{{maxStr($service3->titre, 20)}}</td>
											<td>{{maxStr($service3->description, 20)}}</td>
											<td class="d-flex justify-content-end">
												<form action="{{route('service3.destroy', $service3->id)}}" method="POST" enctype="multipart/form-data">
													@csrf
													@method('delete')
													<a href="{{route('service3.edit', $service3->id)}}" class="btn btn-primary">Modifier</a>
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
		</div>
@endsection