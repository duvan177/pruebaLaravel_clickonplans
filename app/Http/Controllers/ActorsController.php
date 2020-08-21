<?php

namespace App\Http\Controllers;

use App\actors;
use Illuminate\Http\Request;

class ActorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actors = actors::where('status',0)->get();

        return view('registers.actors' , compact('actors'));

    }


    public function destroy( $id)
    {
        $actor = actors::find($id);
        $actor->update(['status'=> 1]);
        $actors = actors::where('status',0)->get();
        return response()->json(['msg' => true , 'data' => $actors]);
    
 
        
    }
}
