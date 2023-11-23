@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Profile</h1>
    </div>

    <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <!-- <img class="profile-user-img img-fluid img-circle" src="{{ asset('images/user1-128x128.jpg') }}" alt="User profile picture"> -->
                            <img class="profile-user-img img-fluid img-circle" src="{{  asset('/storage/images/1.jpg')}}" alt="User profile picture" style="width:250px">
                        </div>
                         

                    <form class="w-px-500 p-3 p-md-3" action="{{ route('updateProfile') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Upload Picture</label>
                            <div class="col-sm-9">
                              <input type="file" class="form-control" name="image" @error('image') is-invalid @enderror>
                            </div>
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </div>
                      </form>

                    </div>
                </div>
                 
            </div>
            <div class="col-md-3">
            </div>
             
        </div>
    </div>
</section>
@endsection
