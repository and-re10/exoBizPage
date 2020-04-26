@extends('adminlte::page')
@section('content')
    <form action="{{route('portfolio.store')}}" method="POST" enctype="multipart/form-data">
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
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="filtre1" name="filtre" value="filter-app">
                          <label for="filtre1" class="custom-control-label">App</label>
                        </div>
    
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input"      type="radio" id="filtre2" name="filtre" value="filter-card">
                          <label for="filtre2" class="custom-control-label">Card</label>
                        </div>
    
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="filtre3" name="filtre" value="filter-web">
                          <label for="filtre3"
                          class="custom-control-label">Web</label>
                        </div>
                        
                        @error('filtre')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Titre</label>
                        <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" value="{{old('titre')}}" id="titre" placeholder="" >
                        @error('titre')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}" id="description" placeholder="">
                        @error('description')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

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

                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </form>
@endsection