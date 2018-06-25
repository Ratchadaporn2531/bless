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
        return view('index', compact('user'));
    }

    public function sign()
    {
        return view('sign', compact('user'));
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

        $user->id= $request->id;
        $user->sign=$request->sign;
        $user->name=$request->name;

        $token = $request->input('g-recaptcha-response');
        if($token)
        {
            
            
            $user->save();
            return redirect("show");
        }
        else
        {
            return redirect("sign");
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show()
    {
        // $user = Sign::inRandomOrder()->where('id', '<=', 2)->get();
        // $var = Sign::inRandomOrder()->get();
        // $tmp = Sign::inRandomOrder()->get();
        // Sign::all()->random();
        // $user = Sign::where('id')->inRandomOrder()->first();

        $user = DB::table('signs')
                ->orderBy('id', 'DESC')
                ->get();

        return view('show', compact('user'));
    }
}
