@extends('layouts.default')

@section('content')






            <div class="row">
            <div class="col-sm-12">
                <h3 class="m-2 text-center display-4"> Add Listing</h3>

                <form  method="POST" action="/listings">
                        @csrf()

                    <div class="form-group   ">
                      <label for="name">Name</label>
                      <input type="text" class="form-control {{$errors->has('name')? 'is-invalid':''}} " id="name" name="name" value="{{old('name')}}" >
                    </div>

                    <div class="form-group">
                      <label for="Address">Address</label>
                      <input type="text" class="form-control {{$errors->has('address')? 'is-invalid':''}}" id="address" name="address" value="{{old('address')}}">
                    </div>

                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" class="form-control" id="website" name="website">
                      </div>

                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control {{$errors->has('email')?'is-invalid':''}}" id="email" name="email" value="{{old('email')}}">
                      </div>

                      <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control {{$errors->has('phone')?'is-invalid':''}}" id="phone" name="phone" value="{{old('phone')}}">
                      </div>


                      <div class="form-group">
                      <label for="Bio">Bio:</label>
                      <textarea class="form-control"  id="bio" name="bio"></textarea>
                      </div>


                    <button type="submit" class="btn btn-primary">Add Listings </button>
                  </form>

            </div>
            </div>


             @endsection
