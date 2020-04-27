@extends('adminlte::page')
@section('content')
    <form action="{{route('service3.store')}}" method="POST" enctype="multipart/form-data">
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
                          <input class="custom-control-input" type="radio" id="customRadio1" name="icon" value="ion-ios-analytics-outline">
                          <label for="customRadio1" class="custom-control-label"><i class="fas fa-chart-pie"></i></label>
                        </div>
    
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="icon" value="ion-ios-bookmarks-outline">
                          <label for="customRadio2" class="custom-control-label"><i class="far fa-bookmark"></i></label>
                        </div>
    
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio3" name="icon" value="ion-ios-paper-outline">
                          <label for="customRadio3" class="custom-control-label"><i class="far fa-sticky-note"></i></label>
                        </div>
                        
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio4" name="icon" value="ion-ios-speedometer-outline">
                          <label for="customRadio4" class="custom-control-label"><i class="fas fa-tachometer-alt"></i></label>
                        </div>
                        
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio5" name="icon" value="ion-ios-barcode-outline">
                          <label for="customRadio5" class="custom-control-label"><i class="fas fa-barcode"></i></label>
                        </div>
                        
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio6" name="icon" value="ion-ios-people-outline">
                          <label for="customRadio6" class="custom-control-label"><i class="fas fa-users"></i></label>
                        </div>

                        @error('icon')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
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