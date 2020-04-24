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
                      @if ($service1->icon === "fas fa-desktop")
                        <input class="custom-control-input" type="radio" id="customRadio1" name="icon" value="fas fa-desktop" checked>
                      @else
                        <input class="custom-control-input" type="radio" id="customRadio1" name="icon" value="fas fa-desktop">
                      @endif
                      <label for="customRadio1" class="custom-control-label"><i class="fas fa-desktop"></i></label>
                    </div>
  
                    <div class="custom-control custom-radio">
                      @if ($service1->icon === "fas fa-chart-bar")
                        <input class="custom-control-input" type="radio" id="customRadio2" name="icon" value="fas fa-chart-bar" checked>
                      @else
                        <input class="custom-control-input" type="radio" id="customRadio2" name="icon" value="fas fa-chart-bar">
                      @endif
                      <label for="customRadio2" class="custom-control-label"><i class="fas fa-chart-bar"></i></label>
                    </div>
  
                    <div class="custom-control custom-radio">
                      @if ($service1->icon === "fas fa-paper-plane")
                        <input class="custom-control-input" type="radio" id="customRadio3" name="icon" value="fas fa-paper-plane" checked>
                      @else
                        <input class="custom-control-input" type="radio" id="customRadio3" name="icon" value="fas fa-paper-plane">
                      @endif
                      <label for="customRadio3" class="custom-control-label"><i class="fas fa-paper-plane"></i></label>
                    </div>
  
                    <div class="custom-control custom-radio">
                      @if ($service1->icon === "fas fa-images")
                        <input class="custom-control-input" type="radio" id="customRadio4" name="icon" value="fas fa-images" checked>
                      @else
                        <input class="custom-control-input" type="radio" id="customRadio4" name="icon" value="fas fa-images">
                      @endif
                      <label for="customRadio4" class="custom-control-label"><i class="fas fa-images"></i></label>
                    </div>
  
                    <div class="custom-control custom-radio">
                      @if ($service1->icon === "fas fa-road")
                        <input class="custom-control-input" type="radio" id="customRadio5" name="icon" value="fas fa-road" checked>
                      @else
                        <input class="custom-control-input" type="radio" id="customRadio5" name="icon" value="fas fa-road">
                      @endif
                      <label for="customRadio5" class="custom-control-label"><i class="fas fa-road"></i></label>
                    </div>
  
                    <div class="custom-control custom-radio">
                      @if ($service1->icon === "fa fa-shopping-bag")
                        <input class="custom-control-input" type="radio" id="customRadio6" name="icon" value="fa fa-shopping-bag" checked>
                      @else
                        <input class="custom-control-input" type="radio" id="customRadio6" name="icon" value="fa fa-shopping-bag">
                      @endif
                      <label for="customRadio6" class="custom-control-label"><i class="fa fa-shopping-bag"></i></label>
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