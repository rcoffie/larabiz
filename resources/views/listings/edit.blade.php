@extends('layouts.default')

@section('content')






            <div class="row">
            <div class="col-sm-12">
                <h3 class="m-2 text-center display-4"> Add Listing</h3>

                <form  method="POST" action="/listings/{{$listing->id}}">
                    @method('PATCH')
                    @csrf

                    <div class="form-group   ">
                      <label for="name">Name</label>
                      <input type="text" class="form-control {{$errors->has('name')? 'is-invalid':''}} " id="name" name="name" value="{{$listing->name}}" >
                    </div>

                    <div class="form-group">
                      <label for="Address">Address</label>
                      <input type="text" class="form-control {{$errors->has('address')? 'is-invalid':''}}" id="address" name="address" value="{{$listing->address}}">
                    </div>

                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" class="form-control" id="website" name="website" value="{{$listing->website}}">
                      </div>

                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control {{$errors->has('email')?'is-invalid':''}}" id="email" name="email" value="{{$listing->email}}">
                      </div>

                      <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control {{$errors->has('phone')?'is-invalid':''}}" id="phone" name="phone" value="{{$listing->phone}}">
                      </div>


                      <div class="form-group">
                      <label for="Bio">Bio:</label>
                      <textarea  class="form-control"  id="bio" name="bio"> {{$listing->bio}} </textarea>
                      </div>


                    <button type="submit" class="btn btn-primary">Update Listings </button>
                  </form>

            </div>
            </div>


             @endsection
