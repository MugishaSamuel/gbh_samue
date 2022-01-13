<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\VacationHome;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'title'=>'required',
        //     'message'=>'required'
        // ]);

        $post = new VacationHome;
        $image = $request->file('image');
        $image_name = time().'.'.$image->getClientoriginalExtension();
        print_r($image_name);
        $request->file('image')->move('property',$image_name);

        $post->property_name = $request->input('property_name');
        $post->price = $request->input('price');
        $post->property_description = $request->input('property_description');
        $post->rooms = $request->input('rooms');
        $post->room_capacity = $request->input('room_capacity');
        $post->image = $image_name;
        $post->status = "Available";
        $post->user_id = auth()->user()->id;
        $post->save();
        return redirect('/manage-property')->with('Success','New Record Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = VacationHome::find($id);
        return view('pages.property_details')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = VacationHome::find($id);
        if(auth()->user()->id !== $post->user_id){
            return redirect('/manage-property');
        }
        return view('agents.edit')->with('post',$post);
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
        $post = VacationHome::find($id);
        $post->property_name = $request->input('property_name');
        $post->price = $request->input('price');
        $post->property_description = $request->input('property_description');
        $post->rooms = $request->input('rooms');
        $post->room_capacity = $request->input('room_capacity');
        $post->status = $request->input('status');
        $post->save();
        return redirect('/manage-property')->with('Success','Posts Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = VacationHome::find($id);
        $post->delete();
        return redirect('/manage-property')->with('Error','Record Deleted!');
    }
}
