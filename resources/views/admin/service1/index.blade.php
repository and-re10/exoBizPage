@extends('adminlte::page')
	@section('content')
	{{-- table --}}
		<div class="container">
			<a href="{{route('service1.create')}}" class="btn btn-primary">Créer</a>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Responsive Hover Table</h3>

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
								@foreach ($services1 as $service1)
									<tr class="">
                                        <td>
                                            <i class="{{$service1->icon}}"></i>
                                        </td>
										<td>{{maxStr($service1->titre, 20)}}</td>
										<td>{{maxStr($service1->description, 20)}}</td>
										<td>
											<form action="{{route('service1.destroy', $service1->id)}}" method="POST" enctype="multipart/form-data">
												@csrf
												@method('delete')
												<a href="{{route('service1.edit', $service1->id)}}" class="btn btn-primary">Modifier</a>
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