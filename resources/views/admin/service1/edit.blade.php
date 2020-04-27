@extends('adminlte::page')
@section('content')
    <form action="{{route('service1.update', $service1->id)}}" method="POST" enctype="multipart/form-data">
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
                    <div class="form-group">
                        <label for="">Titre</label>
                        <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" value="{{editError($service1->titre, "titre")}}" id="titre" placeholder="" >
                        @error('titre')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{editError($service1->description, "description")}}" id="description" placeholder="">
                        @error('description')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                  <!-- radio -->
                  <div class="form-group">
                    <label for="">Icon du Service</label>

                    <div class="custom-control custom-radio">
                      @if ($service1->icon === "ion-ios-bookmarks-outline")
                        <input class="custom-control-input" type="radio" id="customRadio1" name="icon" value="ion-ios-bookmarks-outline" checked>
                      @else
                        <input class="custom-control-input" type="radio" id="customRadio1" name="icon" value="ion-ios-bookmarks-outline">
                      @endif
                      <label for="customRadio1" class="custom-control-label"><i class="far fa-bookmark"></i></label>
                    </div>
  
                    <div class="custom-control custom-radio">
                      @if ($service1->icon === "ion-ios-stopwatch-outline")
                        <input class="custom-control-input" type="radio" id="customRadio2" name="icon" value="ion-ios-stopwatch-outline" checked>
                      @else
                        <input class="custom-control-input" type="radio" id="customRadio2" name="icon" value="ion-ios-stopwatch-outline">
                      @endif
                      <label for="customRadio2" class="custom-control-label"><i class="fas fa-stopwatch"></i></label>
                    </div>
  
                    <div class="custom-control custom-radio">
                      @if ($service1->icon === "ion-ios-heart-outline")
                        <input class="custom-control-input" type="radio" id="customRadio3" name="icon" value="ion-ios-heart-outline" checked>
                      @else
                        <input class="custom-control-input" type="radio" id="customRadio3" name="icon" value="ion-ios-heart-outline">
                      @endif
                      <label for="customRadio3" class="custom-control-label"><i class="far fa-heart"></i></label>
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