@extends('adminlte::page')
@section('content')
    <form action="{{route('team2.update', $team2->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        {{-- Edit et Create --}}
        <div class="card card-primary">
            <div class="card-header w-100">
                <h3 class="card-title w-100 text-center">Edit</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
                <div class="card-body">

                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{editError($team2->name, "name")}}" id="name" placeholder="" >
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Job</label>
                        <input type="text" name="job" class="form-control @error('job') is-invalid @enderror" value="{{editError($team2->job, "job")}}" id="job" placeholder="">
                        @error('job')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Photo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image" value="{{editError($team2->img_path, "image")}}" id="image">
                                <label class="custom-file-label" for=""></label>
                                @error('image')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="{{asset('storage/'.$team2->img_path)}}" alt="" class="w-100">
                    </div>

                    {{-- Url --}}
                    <div class="form-group">
                        <label for="exampleInputFile">Photo</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" name="url1" value="{{editError($team2->url1, "url1")}}" placeholder="Username">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" name="url2" value="{{editError($team2->url2, "url2")}}" placeholder="Username">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" name="url3" value="{{editError($team2->url3, "url3")}}" placeholder="Username">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" name="url4" value="{{editError($team2->url4, "url4")}}" placeholder="Username">
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </form>
@endsection