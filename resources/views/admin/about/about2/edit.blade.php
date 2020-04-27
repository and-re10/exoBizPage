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
                        @if ($about2->icon === "ion-ios-speedometer-outline")
                            <input class="custom-control-input" type="radio" id="customRadio1" name="icon" value="ion-ios-speedometer-outline" checked>
                        @else
                            <input class="custom-control-input" type="radio" id="customRadio1" name="icon" value="ion-ios-speedometer-outline">
                        @endif
                        <label for="customRadio1" class="custom-control-label"><i class="fas fa-tachometer-alt"></i></label>
                        </div>
    
                        <div class="custom-control custom-radio">
                        @if ($about2->icon === "ion-ios-list-outline")
                            <input class="custom-control-input" type="radio" id="customRadio2" name="icon" value="ion-ios-list-outline" checked>
                        @else
                            <input class="custom-control-input" type="radio" id="customRadio2" name="icon" value="ion-ios-list-outline">
                        @endif
                        <label for="customRadio2" class="custom-control-label"><i class="far fa-list-alt"></i></label>
                        </div>
    
                        <div class="custom-control custom-radio">
                        @if ($about2->icon === "ion-ios-eye-outline")
                            <input class="custom-control-input" type="radio" id="customRadio3" name="icon" value="ion-ios-eye-outline" checked>
                        @else
                            <input class="custom-control-input" type="radio" id="customRadio3" name="icon" value="ion-ios-eye-outline">
                        @endif
                        <label for="customRadio3" class="custom-control-label"><i class="far fa-eye"></i></label>
                        </div>
    
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