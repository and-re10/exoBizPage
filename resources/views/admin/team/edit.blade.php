@extends('adminlte::page')
@section('content')
    <form action="{{route('team1.update', $team1->id)}}" method="POST" enctype="multipart/form-data">
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
                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{editError($team1->description, "description")}}" id="description" placeholder="" >
                        @error('description')
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