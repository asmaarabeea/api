<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TasksController extends Controller
{
	
	public function _construct(){
		$this->middleware("auth");
	}
	
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::all();
       // return view("users/index",compact('users'));
		return response()-> json(['users' => $users],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//         return view("users/new");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        		"name" => 'required|min:5|max:30',
        		"email" => 'required|min:14|max:120',
        		"password" => 'required|min:8'
        ]);

        $user= new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password) ;
        $user->save();
//         return redirect("users");
		return response()->json(['user' => $user],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
//         return view("users/show",compact('user'));
		return response()->json(['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
      // return view("users/edit",compact('user'));
        return response()->json(['user'=>$user]);
        
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
        $this->validate($request,[
        		"name" => 'required|min:5|max:30',
        		"email" => 'required|min:14|max:120',
        		"password" => 'required|min:8'
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password) ;
        $user->save();
//         return redirect("users");		
        return response()->json(['user'=>$user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
//         return redirect("users");
        return response()->json(['user'=>$user]);
    }
}
