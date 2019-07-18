@extends('layouts.default')

@section('content')


  <div class="row">

    <div class="col-10 ">
            @forelse ($listings as $listing)
            <div class="card mt-4 rounded-sm border border-dark">




                    <h5 class=" card-header bg-dark text-white">{{$listing->name}}</h5>
                    <div class="card-body">

                      <p class="card-text">{{$listing->bio}}</p>
                      <a href="/listings/{{$listing->id}}" class="btn btn-dark">view</a>
                    </div>


                  </div>
                  @empty

                  @endforelse
    </div>
  </div>



             @endsection
