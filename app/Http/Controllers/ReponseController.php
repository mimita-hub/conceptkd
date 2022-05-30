<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sujet;
use App\Models\User;
use App\Models\Reponse;
use Auth;
class ReponseController extends Controller
{
    public function __construct()
     {
        $this->middleware('auth');
     }
    public function index()
    {
        $data=Reponse::all();

       $user=Auth::user();
        return view('Reponses.index',compact('data','user'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Reponse
     */
    public function create( $id)
    {

        $user=Auth::user();
        $data=Sujet::find($id);
        return view('Reponses.create',compact('user','data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $id_user=Auth::id();


            // 1. La validation
            $this->validate($request,[
                'reponse1',
            ]);

            // 3. On enregistre les informations du Post
            Reponse::create([
                'reponse1'=> $request->reponse1,
                'user_id' => $id_user,
                'sujet_id'=>$id

            ]);

            // 4. On retourne vers tous les posts : route("posts.index")
            return redirect(route('Reponses.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Reponse
     */
    public function show(Reponse $Reponse)
    {


     return view("Reponses.show", compact('Reponse'));
    }

    public function noter(Request $request, Reponse $Reponse)
    {


     return view("Reponses.note", compact('Reponse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Reponse
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
     * @return \Illuminate\Http\Reponse
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Reponse
     */
    public function destroy($id)
    {
        //
    }
}
