<?php

namespace App\Http\Controllers;
use App\Listing;
use Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $listings = Listing::whereUserId(auth()->user()->id)->get();
       // $listings = Listing::whereUserId(Auth::id())->get();


        return view('home')->with('listings',$listings);
    }
}
