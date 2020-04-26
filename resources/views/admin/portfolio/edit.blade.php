@extends('adminlte::page')
@section('content')
    <form action="{{route('portfolio.update', $portfolio->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        {{-- Edit et Create --}}
        <div class="card card-primary">
            <div class="card-header w-100">
                <h3 class="card-title w-100 text-center">Create</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
                <div class="card-body">

                    <!-- radio -->
                    <div class="form-group">
                        <label for="">Icon du Service</label>

                        <div class="custom-control custom-radio">
                        @if ($portfolio->filtre === "filter-app")
                            <input class="custom-control-input" type="radio" id="customRadio1" name="filtre" value="filter-app" checked>
                        @else
                            <input class="custom-control-input" type="radio" id="customRadio1" name="filtre" value="filter-app">
                        @endif
                        <label for="customRadio1" class="custom-control-label"><i class="filter-app"></i></label>
                        </div>
    
                        <div class="custom-control custom-radio">
                        @if ($portfolio->filtre === "filter-card")
                            <input class="custom-control-input" type="radio" id="customRadio2" name="filtre" value="filter-card" checked>
                        @else
                            <input class="custom-control-input" type="radio" id="customRadio2" name="filtre" value="filter-card">
                        @endif
                        <label for="customRadio2" class="custom-control-label"><i class="filter-card"></i></label>
                        </div>
    
                        <div class="custom-control custom-radio">
                        @if ($portfolio->filtre === "filter-web")
                            <input class="custom-control-input" type="radio" id="filtre3" name="filtre" value="filter-web" checked>
                        @else
                            <input class="custom-control-input" type="radio" id="filtre3" name="filtre" value="filter-web">
                        @endif
                        <label for="filtre3" class="custom-control-label"><i class="filter-web"></i></label>
                        </div>
    
                        @error('filtre')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Titre</label>
                        <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" value="{{editError($portfolio->titre, "titre")}}" id="titre" placeholder="" >
                        @error('titre')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{editError($portfolio->description, "description")}}" id="description" placeholder="">
                        @error('description')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Photo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image" value="{{editError($portfolio->img_path, "image")}}" id="image">
                                <label class="custom-file-label" for=""></label>
                                @error('image')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="{{asset('storage/'.$portfolio->img_path)}}" alt="" class="w-100">
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