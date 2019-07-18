<?php

namespace App\Http\Controllers;
use Auth;
use App\Listing;

use Illuminate\Http\Request;
use function GuzzleHttp\Psr7\readline;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()

     {
          $this->middleware('auth')->except(['index','show']);
     }





    public function index()
    {

        $listings = Listing::get();


        return view ('/listings/index')->with('listings',$listings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/listings/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



     $this->validate($request,
      [
          'name' => 'required',
          'email'=>'email',
          'phone'=> 'required',


      ]);


      $user = Auth::user();
      $user_id = ($user->id);

      $listing = new Listing;
      $listing->name = $request->input('name');
      $listing->address = $request->input('address');
      $listing->website = $request->input('website');
      $listing->email = $request->input('email');
      $listing->phone = $request->input('phone');
      $listing->bio = $request->input('bio');
      $listing->user_id = $user_id;
      $listing->save();


     return  redirect('/home')->with('success','listing added');




   // return ($listing);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::findOrfail($id);


        $this->authorize('update',$listing);

        return view('/listings/show')->with('listing',$listing);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::findOrfail($id);

       $this->authorize('update',$listing);
      //abort_if(\Gate::denies('update',$listing), 403);
        return view ('/listings/edit')->with('listing',$listing);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
        [
            'name' => 'required',
            'email'=>'email',
            'phone'=> 'required ',
            'website'=> 'required',
            'address'=> 'required',
            'bio' => 'required'


        ]);


        $user = Auth::user();
        $user_id = ($user->id);

        $listing = Listing::findOrfail($id);
        $listing->name = $request->input('name');
        $listing->address = $request->input('address');
        $listing->website = $request->input('website');
        $listing->email = $request->input('email');
        $listing->phone = $request->input('phone');
        $listing->bio = $request->input('bio');
        $listing->user_id = auth()->id();
        $listing->save();

        if($listing->user_id !== auth()->id()){
            abort(403);
            }



        $this->authorize('update',$listing);
       //return ($listing);
        return  redirect('/home')->with('success','listing Updated');


      // return "this is the update section";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $listing = Listing::find($id);
        $listing->delete();

        $this->authorize('update',$listing);

        return redirect ('/home')->with('success','Listing deleted');


        return "yes this is the delete page ";
    }
}
