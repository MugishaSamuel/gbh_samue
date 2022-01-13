<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VacationHome;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','about','services','apartments','property_details','checkout','contact']]);
    }

	/**
     * Display a listing of the available vacational homes.
     *
     */
    public function index(){
        $posts = VacationHome::where('approval',"Approved")->orderBy('created_at','desc')->take(4)->get();
        if (Auth::check()) {
            if(auth()->user()->user_type === "1"){
            return redirect('/dashboard');
            }
            elseif (auth()->user()->user_type === "2") {
                return redirect('/admin-dashboard');
            }
        }
        $data = array('posts' => $posts,'index'=>'active' );
        return view('pages.index')->with($data);	
    }

    /**
     * Display the application ABOUT US page.
     *
     */
    public function about(){
    	return view('pages.about');
    }

    /**
     * Display the Contact us page.
     *
     */
    public function contact(){
        return view('pages.contact');
    }

    /**
     * Our Services Page.
     *
     */

    public function services(){
    	return view('pages.services');
    }

    /**
     * Display a listing of all available vacational homes with pagination.
     *
     */

    public function apartments(){
        $posts = VacationHome::where('approval',"Approved")->orderBy('created_at','desc')->paginate(8);
    	return view('pages.rooms')->with('posts',$posts);
    }

    /**
     * Display a single property details..
     *
     */

    public function property_details(){
        return view('pages.property_details');
    }

    /**
     * Initiating vacational home booking.
     *
     */

    public function checkout(Request $request)
    {
        $arrival = $request->input('arrival');
        $departure = $request->input('departure');
        $guests = $request->input('guests');
        $rooms = $request->input('rooms');
        $property_name = $request->input('property_name');
        $price = $request->input('price');
        $deposit = round( (int)$price/2, 2);
        $property_id = $request->input('property_id');

        return view('pages.checkout_page',compact('arrival','departure','guests','rooms','property_name','price','deposit','property_id'));
    }

}
