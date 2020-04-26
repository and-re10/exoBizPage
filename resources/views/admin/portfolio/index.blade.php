@extends('adminlte::page')
	@section('content')
	{{-- About 1 --}}
		<div class="container">

		{{-- About 2 --}}
			<a href="{{route('portfolio.create')}}" class="btn btn-primary">Créer</a>
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
                                    <th>Filtre</th>
									<th>Image</th>
									<th>Titre</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($portfolios as $portfolio)
									<tr class="">
                                        <td>{{maxStr($portfolio->filtre, 20)}}</td>
										<td><img src="{{asset('storage/'.$portfolio->img_path)}}" alt=""  class="w-100"></td>
										<td>{{maxStr($portfolio->titre, 20)}}</td>
										<td>{{maxStr($portfolio->description, 20)}}</td>
										<td>
											<form action="{{route('portfolio.destroy', $portfolio->id)}}" method="POST" enctype="multipart/form-data">
												@csrf
												@method('delete')
												<a href="{{route('portfolio.edit', $portfolio->id)}}" class="btn btn-primary">Modifier</a>
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