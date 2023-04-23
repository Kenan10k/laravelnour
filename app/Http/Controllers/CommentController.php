<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        return view('about')->with('sandra',comment::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
     $request->validate([
     'title'=>'required',
     'comment'=>'required',
     ]);
     comment::create([
     'title'=>$request->input('title'),
     'comment'=>$request->input('comment'),
     'user_id'=>Auth()->user()->id
     ]);
     return redirect('/comment');
     
     
    }

    /**
     * Display the specified resource.
     */
    public function show(comment $comment): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comment $comment): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, comment $comment): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comment $comment): RedirectResponse
    {
        //
    }
}
