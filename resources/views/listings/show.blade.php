@extends('layouts.default')

@section('content')


<div class="row">

    <div class="col-10">

            <form >
                <div class="form-group">
                  <label for="Name">Name</label>
                  <input type="text" class="form-control" value="{{$listing->name}}" disabled>
                </div>

                <div class="form-group">
                  <label for="Address">Address</label>
                  <input type="text" class="form-control" value="{{$listing->address}}" disabled>
                </div>


                <div class="form-group">
                        <label for="Address">Address</label>
                        <input type="text" class="form-control" value="{{$listing->website}}" disabled>
                      </div>

                      <div class="form-group">
                            <label for="Address">Phone</label>
                            <input type="text" class="form-control" value="{{$listing->phone}}" disabled>
                          </div>

                          <div class="form-group">
                                <label for="Address">Bio</label>
                                <input type="text" class="form-control" value="{{$listing->bio}}" disabled>
                              </div>

              </form>


    </div>


</div>


@endsection
