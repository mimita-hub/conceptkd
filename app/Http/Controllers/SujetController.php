<?php

namespace App\Http\Controllers;

use App\Models\Sujet;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class SujetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

     public function __construct()
     {
         $this->middleware('auth');
     }
    public function index()
    {
        $data=Sujet::all();

       $user=Auth::user();
        return view('Sujets.index',compact('data','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Sujets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     $id=Auth::id();

            // 1. La validation
            $this->validate($request, [
                'titre',
                'qst1',
                'rep1',
            ]);

            // 3. On enregistre les informations du Post
            Sujet::create([
                'titre' => $request->titre,
                'qst1' => $request->qst1,
                'rep1' => $request->rep1,
                'user_id' => $id,


            ]);

            // 4. On retourne vers tous les posts : route("posts.index")
            return redirect(route("Sujets.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function show(Sujet $Sujet)
    {
        return view("Sujets.show", compact('Sujet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function edit(Sujet $sujet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sujet $sujet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sujet $sujet)
    {
        //
    }
}
