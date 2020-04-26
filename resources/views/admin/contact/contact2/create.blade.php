@extends('adminlte::page')
@section('content')
    <form action="{{route('contact2.store')}}" method="POST" enctype="multipart/form-data">
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

                    {{-- Address --}}
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{old('address')}}" id="address" placeholder="" >
                        @error('address')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                    {{-- Titre Address --}}
                    <div class="form-group">
                        <label for="">Titre Address</label>
                        <input type="text" name="titreAddress" class="form-control @error('titreAddress') is-invalid @enderror" value="{{old('titreAddress')}}" id="titreAddress" placeholder="">
                        @error('titreAddress')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    {{-- Icon Address --}}
                    <div class="form-group">
                        <label for="">Icon Address</label>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="address1" name="iconAddress" value="ion-ios-bookmarks-outline">
                          <label for="address1" class="custom-control-label"><i class="ion-ios-bookmarks-outline"></i></label>
                        </div>
    
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="address2" name="iconAddress" value="ion-ios-stopwatch-outline">
                          <label for="address2" class="custom-control-label"><i class="ion-ios-stopwatch-outline"></i></label>
                        </div>
    
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="address3" name="iconAddress" value="ion-ios-heart-outline">
                          <label for="address3" class="custom-control-label"><i class="ion-ios-heart-outline"></i></label>
                        </div>

                        @error('iconAddress')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    {{-- ----------------------------- --}}
                    {{-- Email --}}
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email" placeholder="" >
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                    {{-- Titre Email --}}
                    <div class="form-group">
                        <label for="">Titre Email</label>
                        <input type="text" name="titreEmail" class="form-control @error('titreEmail') is-invalid @enderror" value="{{old('titreEmail')}}" id="titreEmail" placeholder="">
                        @error('titreEmail')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    {{-- Icon Email --}}
                    <div class="form-group">
                        <label for="">Icon Email</label>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="email1" name="iconEmail" value="ion-ios-bookmarks-outline">
                          <label for="email1" class="custom-control-label"><i class="ion-ios-bookmarks-outline"></i></label>
                        </div>
    
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="email2" name="iconEmail" value="ion-ios-stopwatch-outline">
                          <label for="email2" class="custom-control-label"><i class="ion-ios-stopwatch-outline"></i></label>
                        </div>
    
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="email3" name="iconEmail" value="ion-ios-heart-outline">
                          <label for="email3" class="custom-control-label"><i class="ion-ios-heart-outline"></i></label>
                        </div>

                        @error('iconEmail')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    {{-- ---------------------------------- --}}
                    {{-- Phone --}}
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}" id="phone" placeholder="" >
                        @error('phone')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                    {{-- Titre Phone --}}
                    <div class="form-group">
                        <label for="">Titre Phone</label>
                        <input type="text" name="titrePhone" class="form-control @error('titrePhone') is-invalid @enderror" value="{{old('titrePhone')}}" id="titrePhone" placeholder="">
                        @error('titrePhone')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    {{-- Icon Email --}}
                    <div class="form-group">
                        <label for="">Icon Phone</label>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="phone1" name="iconPhone" value="ion-ios-bookmarks-outline">
                          <label for="phone1" class="custom-control-label"><i class="ion-ios-bookmarks-outline"></i></label>
                        </div>
    
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="phone2" name="iconPhone" value="ion-ios-stopwatch-outline">
                          <label for="phone2" class="custom-control-label"><i class="ion-ios-stopwatch-outline"></i></label>
                        </div>
    
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="phone3" name="iconPhone" value="ion-ios-heart-outline">
                          <label for="phone3" class="custom-control-label"><i class="ion-ios-heart-outline"></i></label>
                        </div>

                        @error('iconPhone')
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