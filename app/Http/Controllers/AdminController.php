<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VacationHome;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display Administrator Dashboard.
     *
     */

    public function index(){
        if (Auth::check()) {
            $users = User::orderBy('created_at','desc')->get();
            $posts = VacationHome::orderBy('created_at','desc')->get();
            $agents = User::where('user_type','1')->get();
            $all_users = User::orderBy('created_at','desc')->take(4)->get();
            return view('admin.index',compact('users','posts','agents','all_users'));
        }
        return redirect()->back();
    }

    /**
     * Manage Vacational Homes.
     *
     */

    public function manage_property(){
        $posts = VacationHome::orderBy('created_at','desc')->get();
    	return view('admin.manageproperty')->with('posts',$posts);
    }

    /**
     * Manage Application Users.
     */

    public function manage_users(){
        $users = User::orderBy('created_at','desc')->get();
    	return view('admin.manageusers')->with('users',$users);
    }

    /**
     * Manage Booking Requests and transactions to be made.
     *
     */

    public function reservation_requests(){
    	return view('admin.reservations');
    }

    /**
     * Approve Vacational Homes on the site.
     *
     */

    public function property_approval(Request $request, $id)
    {
        $post = VacationHome::find($id);
        $post->approval = $request->input('approval');
        $post->save();
        return redirect('/manage-agents-property')->with('Success','Property Status Updated Successfully!');
    }
}
