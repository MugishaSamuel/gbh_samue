<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VacationHome;
use Illuminate\Support\Facades\Auth;

class AgentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display Agent Dashboard.
     *
     */
    public function index(){
        if (Auth::check()) {
            $posts = VacationHome::where('user_id',auth()->user()->id)->get();
            return view('agents.index')->with('posts',$posts);
        }
    	return redirect()->back();
    }


    /**
     * Vacational homes Management.
     *
     */

    public function manage_property(){
        $posts = VacationHome::where('user_id',auth()->user()->id)->orderBy('created_at','desc')->get();
    	return view('agents.manage_property')->with('posts',$posts);
    }

    /**
     * Manage Vacational Homes Client Booking.
     *
     */

    public function manage_bookings(){
    	return view('agents.bookings');
    }


    /**
     * Upload new property.
     *
     */

    public function add_property(){
    	return view('agents.add_property');
    }
}
