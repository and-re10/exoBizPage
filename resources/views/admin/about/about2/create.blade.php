@extends('adminlte::page')
@section('content')
    <form action="{{route('about2.store')}}" method="POST" enctype="multipart/form-data">
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
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="icon" value="ion-ios-bookmarks-outline">
                          <label for="customRadio1" class="custom-control-label"><i class="ion-ios-bookmarks-outline"></i></label>
                        </div>
    
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="icon" value="ion-ios-stopwatch-outline">
                          <label for="customRadio2" class="custom-control-label"><i class="ion-ios-stopwatch-outline"></i></label>
                        </div>
    
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio3" name="icon" value="ion-ios-heart-outline">
                          <label for="customRadio3" class="custom-control-label"><i class="ion-ios-heart-outline"></i></label>
                        </div>
                        
                        {{-- <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio4" name="icon" value="fas fa-images">
                          <label for="customRadio4" class="custom-control-label"><i class="fas fa-images"></i></label>
                        </div>
                        
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio5" name="icon" value="fas fa-road">
                          <label for="customRadio5" class="custom-control-label"><i class="fas fa-road"></i></label>
                        </div>
                        
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio6" name="icon" value="fa fa-shopping-bag">
                          <label for="customRadio6" class="custom-control-label"><i class="fa fa-shopping-bag"></i></label>
                        </div> --}}

                        @error('icon')
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