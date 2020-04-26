@extends('adminlte::page')
	@section('content')
	{{-- About 1 --}}
		<div class="container">
			<a href="{{route('contact1.create')}}" class="btn btn-primary">Créer</a>
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
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($contacts1 as $contact1)
									<tr class="">
										<td>{{maxStr($contact1->description, 65)}}</td>
										<td>
											<form action="{{route('contact1.destroy', $contact1->id)}}" method="POST" enctype="multipart/form-data">
												@csrf
												@method('delete')
												<a href="{{route('contact1.edit', $contact1->id)}}" class="btn btn-primary">Modifier</a>
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


				{{-- <a href="{{route('team2.create')}}" class="btn btn-primary">Créer</a>
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
										<th>Name</th>
										<th>Job</th>
                                        <th>Url 1</th>
                                        <th>Url 2</th>
                                        <th>Url 3</th>
                                        <th>Url 4</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($teams2 as $team2)
										<tr class="">
											<td>{{maxStr($team2->name, 20)}}</td>
											<td>{{maxStr($team2->job, 20)}}</td>
                                            <td><img src="{{asset('storage/'.$team2->img_path)}}" alt="" class="w-100"></td>
                                            <td>{{maxStr($team2->url1, 10)}}</td>
                                            <td>{{maxStr($team2->url2, 10)}}</td>
                                            <td>{{maxStr($team2->url3, 10)}}</td>
                                            <td>{{maxStr($team2->url4, 10)}}</td>
											<td>
												<form action="{{route('team2.destroy', $team2->id)}}" method="POST" enctype="multipart/form-data">
													@csrf
													@method('delete')
													<a href="{{route('team2.edit', $team2->id)}}" class="btn btn-primary">Modifier</a>
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
				</div>	 --}}
			</div>
		</div>
@endsection