<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Sign;
use Illuminate\Support\Facades\Input;
use DB;

class SignController extends Controller
{
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user_count = 1000;
        //$user = new Sign;
        $user = DB::table('signs')->count();
       
        return view('welcome', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Sign;

        $user->id=Input::get('id');
        $user->sign=Input::get('sign');

         $user->name=Input::get('name');

        //  if(Input::hasFile('image')){
        //     $file=Input::file('image');
        //     $file->move(public_path(). '/', $file->getClientOriginalName());

        //     $user->img=$file->getclientOriginalName();
            
        // }

         //print_r($_POST);
     

        $user->save();
        return redirect("show");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    public function show()
    {
        $user = DB::table('signs')
                ->orderBy('id', 'DESC')
                ->paginate(1);

        
        
        

        return view('show', compact('user'));
    }

     public function share($id){
        //fetch post data
        $users = Sign::find($id);
        
        //pass posts data to view and load list view
        return view('share', ['users' => $users]);
    }

    public function count(){

        $counts = DB::table('signs')->select(DB::raw('count(id) as user_count,sign'))->groupBy('sign')->get();

        return view('show',compact('counts'));

    }
}
