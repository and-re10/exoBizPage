@extends('adminlte::page')
	@section('content')
	{{-- About 1 --}}
		<div class="container">
      <h1 class="text-center mb-5">Section Contact</h1>
      @if (count($contacts1) === 0)
      <a href="{{route('contact1.create')}}" class="btn btn-primary mb-3">Créer</a>
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
								@foreach ($contacts1 as $contact1)
									<tr class="">
										<td>{{maxStr($contact1->description, 65)}}</td>
										<td class="d-flex justify-content-end">
											<form action="{{route('contact1.destroy', $contact1->id)}}" method="POST" enctype="multipart/form-data" class="d-flex justify-content-end">
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

          @if (count($contacts2) === 0)
           <a href="{{route('contact2.create')}}" class="btn btn-primary mt-5 mb-3">Créer</a>
          @endif
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Données de l'Admin</h3>

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
                      <th>Icon</th>
										<th>Titre</th>
										<th>Contact</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($contacts2 as $contact2)
										<tr>
                        <td class="">
                            <i class="{{changeIcon($contact2->icon_address)}}"></i><br>
                            <i class="{{changeIcon($contact2->icon_email)}}"></i><br>
                            <i class="{{changeIcon($contact2->icon_phone)}}"></i>
                            
                          </td>   
                          <td class="">
                            {{maxStr($contact2->titre_address, 20)}}<br>
                            {{maxStr($contact2->titre_email, 20)}}<br>
                            {{maxStr($contact2->titre_phone, 20)}}
                        </td> 
                        <td class="">
                            {{maxStr($contact2->address, 20)}}<br>
                            {{maxStr($contact2->email, 20)}}<br>
                            {{maxStr($contact2->phone, 20)}}
                        </td>
											<td class="d-flex justify-content-end">
												<form action="{{route('contact2.destroy', $contact2->id)}}" method="POST" enctype="multipart/form-data"  class="d-flex justify-content-end">
													@csrf
													@method('delete')
													<a href="{{route('contact2.edit', $contact2->id)}}" class="btn btn-primary">Modifier</a>
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
                
                <div class="col-md-12 my-5 ">
                    <div class="card card-primary card-outline">
                      <div class="card-header">
                        <h3 class="card-title">Inbox</h3>
          
                        <div class="card-tools">
                          <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="Search Mail">
                            <div class="input-group-append">
                              <div class="btn btn-primary">
                                <i class="fas fa-search"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body p-0">
                        <div class="mailbox-controls">
                          <!-- Check all button -->
                          <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                          </button>
                          <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                          </div>
                          <!-- /.btn-group -->
                          <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                          <div class="float-right">
                            1-50/200
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                              <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                            </div>
                            <!-- /.btn-group -->
                          </div>
                          <!-- /.float-right -->
                        </div>
                        <div class="table-responsive mailbox-messages">
                          <table class="table table-hover table-striped">
                            <tbody>
                            @foreach ($contacts3 as $contact3)
                                <tr>
                                    <td>
                                        <div class="icheck-primary">
                                            <input type="checkbox" value="" id="check1">
                                            <label for="check1"></label>
                                        </div>
                                    </td>
                                    <td class="mailbox-star">
                                        <a href="#">
                                            <i class="fas fa-star text-warning"></i>
                                        </a>
                                    </td>
                                    <td class="mailbox-name">
                                        <a href="{{route('contact3.show', $contact3->id)}}">{{$contact3->name}}</a>
                                    </td>
                                    <td class="mailbox-subject">
                                        <b>{{$contact3->subject}}</b> - {{maxStr($contact3->message, 20)}}
                                    </td>
                                    <td class="mailbox-attachment"></td>
                                    <td class="mailbox-date">5 mins ago</td>
                                </tr>
                            @endforeach
                            </tbody>
                          </table>
                          <!-- /.table -->
                        </div>
                        <!-- /.mail-box-messages -->
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer p-0">
                        <div class="mailbox-controls">
                          <!-- Check all button -->
                          <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                          </button>
                          <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                          </div>
                          <!-- /.btn-group -->
                          <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                          <div class="float-right">
                            1-50/200
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                              <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                            </div>
                            <!-- /.btn-group -->
                          </div>
                          <!-- /.float-right -->
                        </div>
                      </div>
                    </div>
                    <!-- /.card -->
                </div>
			</div>
		</div>
@endsection