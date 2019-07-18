@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                @include('inc.message')
            <div class="card">
                <div class="card-header">Dashboard  <span class="btn btn-success btn-md float-right"><a class="text-light" href="/listings/create">Add Listing</a> </span> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h3> You are welcome  <strong> {{ Auth::user()->name }}  </strong>  !</h3>




                    <table class="table">
                            <thead class="thead-dark">
                              <tr>

                                <th scope="col"> Company</th>
                                <th scope="col"> Edit</th>
                                <th scope="col"> Delete</th>

                              </tr>
                            </thead>
                            <tbody>

                                @forelse ($listings as $listing)


                              <tr>

                                <td>{{$listing->name}}</td>
                                <td> <a class="btn btn-success" href="/listings/{{$listing->id}}/edit">Edit</a> </td>

                                <td>
                                 <form method="POST"   onclick="return confirm('Are you sure?')" action="/listings/{{$listing->id}}">
                                    @method('DELETE')
                                    @csrf

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                  </form>
                                </td>
                              </tr>

                              @empty

                              <div class="alert alert-warning">
                                    <strong>You havent posted any listing yet !</strong>.
                                  </div>

                              @endforelse
                            </tbody>
                          </table>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
