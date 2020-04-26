@extends('adminlte::page')
@section('content')
    <form action="{{route('about2.update', $about2->id)}}" method="POST" enctype="multipart/form-data">
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
                        <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" value="{{editError($about2->titre, "titre")}}" id="titre" placeholder="" >
                        @error('titre')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{editError($about2->description, "description")}}" id="description" placeholder="">
                        @error('description')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <!-- radio -->
                    <div class="form-group">
                        <label for="">Icon du Service</label>

                        <div class="custom-control custom-radio">
                        @if ($about2->icon === "ion-ios-bookmarks-outline")
                            <input class="custom-control-input" type="radio" id="customRadio1" name="icon" value="ion-ios-bookmarks-outline" checked>
                        @else
                            <input class="custom-control-input" type="radio" id="customRadio1" name="icon" value="ion-ios-bookmarks-outline">
                        @endif
                        <label for="customRadio1" class="custom-control-label"><i class="ion-ios-bookmarks-outline"></i></label>
                        </div>
    
                        <div class="custom-control custom-radio">
                        @if ($about2->icon === "ion-ios-stopwatch-outline")
                            <input class="custom-control-input" type="radio" id="customRadio2" name="icon" value="ion-ios-stopwatch-outline" checked>
                        @else
                            <input class="custom-control-input" type="radio" id="customRadio2" name="icon" value="ion-ios-stopwatch-outline">
                        @endif
                        <label for="customRadio2" class="custom-control-label"><i class="ion-ios-stopwatch-outline"></i></label>
                        </div>
    
                        <div class="custom-control custom-radio">
                        @if ($about2->icon === "ion-ios-heart-outline")
                            <input class="custom-control-input" type="radio" id="customRadio3" name="icon" value="ion-ios-heart-outline" checked>
                        @else
                            <input class="custom-control-input" type="radio" id="customRadio3" name="icon" value="ion-ios-heart-outline">
                        @endif
                        <label for="customRadio3" class="custom-control-label"><i class="ion-ios-heart-outline"></i></label>
                        </div>
    
                        {{-- <div class="custom-control custom-radio">
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
                        </div>--}}
                        @error('icon')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Photo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image" value="{{editError($about2->img_path, "image")}}" id="image">
                                <label class="custom-file-label" for=""></label>
                                @error('image')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="{{asset('storage/'.$about2->img_path)}}" alt="" class="w-100">
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