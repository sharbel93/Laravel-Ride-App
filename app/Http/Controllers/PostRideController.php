<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\PostRide;
use Illuminate\Support\Facades\Mail;
use App\Mail\RideMessages;

class PostRideController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $user = auth()->user();
//        \Mail::to($user)->send(new RideMessages($user));

        $posts = PostRide::all();
        return view('pages.getride')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.giveride');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation

        $this->validate($request,[
            'origin' => 'required',
            'destination' => 'required',
            'capacity' => 'required|max:2'
        ]);

//        // Create postride posts
        $post = new PostRide;
        $post->origin = $request->input('origin');
        $post->destination = $request->input('origin');
        $post->capacity = $request->input('capacity');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/posts')->with('success', 'Your Ride has Been Created '); // redirect after getting the details followed with a success message
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $this->validate($request, [
           'origin' => 'required',
           'destination'=>'required',
           'capacity' => 'required'
        ]);

        // Create postride posts
        $post = new PostRide;
        $post->origin = $request->input('origin');
        $post->destination = $request->input('origin');
        $post->capacity = $request->input('capacity');
        $post->save();

        return redirect('/posts')->with('success', 'Updated '); // redirect after getting the details followed with a success message



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function mail()
    {


        $user = auth()->user();
        Mail::to($user)->send(new RideMessages($user));
        return 'Email was sent';



    }
}
