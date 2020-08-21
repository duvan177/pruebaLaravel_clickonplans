<?php

namespace App\Http\Controllers;

use App\movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = movies::where('status',0)->get();
        return view('registers.movies', compact('movies'));
    }   

    public function destroy($id)
    {
        $actor = movies::find($id);
        $actor->update(['status'=> 1]);
        $actors = movies::where('status',0)->get();
        return response()->json(['msg' => true , 'data' => $actors]);
    }
}
