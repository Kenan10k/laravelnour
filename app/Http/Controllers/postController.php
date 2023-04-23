<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\post;




class postController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
   
return view('blog')->with('posts',post::all());
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
   $request->validate([
'title'=>'required',
'description'=>'required',
'image_path'=>'required'
]);



$newImage=uniqid().'-'.$request->title.'.'.$request->image_path->extension();
$request->image_path->move(public_path('Img'),$newImage);
post::create([

'title'=>$request->input('title')
,'description'=>$request->input('description')
,'image_path'=>$newImage
,'user_id'=>Auth()->user()->id
]);
return redirect('/blog');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       return view('Show')->with('kenan',post::where('id',$id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
return view('edit')->with('kenan',post::where('id',$id)->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $request->validate([
'title'=>'required',
'description'=>'required',
'image_path'=>'required'
]);



$newImage=uniqid().'-'.$request->title.'.'.$request->image_path->extension();
$request->image_path->move(public_path('Img'),$newImage);
    
    
post::where('id',$id)->update([

'title'=>$request->input('title')
,'description'=>$request->input('description')
,'image_path'=>$newImage
,'user_id'=>Auth()->user()->id
]);
return redirect('/blog/'.$id)->with('message','تم التعديل بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        post::where('id',$id)->delete();
        return redirect('/blog')->with('message','تم حذف الموضوع بنجاح');
    }
}
