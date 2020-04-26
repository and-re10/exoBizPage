@extends('adminlte::page')
@section('content')
    <form action="{{route('team2.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Edit et Create --}}
        <div class="card card-primary">
            <div class="card-header w-100">
                <h3 class="card-title w-100 text-center">Create</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
                <div class="card-body">
                    
                    {{-- Name --}}
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" id="name" placeholder="" >
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    {{-- Job --}}
                    <div class="form-group">
                        <label for="">Job</label>
                        <input type="text" name="job" class="form-control @error('job') is-invalid @enderror" value="{{old('job')}}" id="job" placeholder="">
                        @error('job')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    {{-- Image --}}
                    <div class="form-group">
                        <label for="exampleInputFile">Photo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" value="{{old('image')}}" id="image">
                                <label class="custom-file-label" for=""></label>
                                {{-- @error('image')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror --}}
                            </div>
                        </div>
                    </div>

                    {{-- Url --}}
                    <div class="form-group">
                        <label for="exampleInputFile">Photo</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" name="url1" placeholder="Username">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" name="url2" placeholder="Username">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" name="url3" placeholder="Username">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" name="url4" placeholder="Username">
                        </div>
                    </div>

                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </form>
@endsection