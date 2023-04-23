@extends('layouts.app')
@section('content')
<h1 style="color:white;">do you love math??</h1>
<br>




<br>
@foreach($sandra as $x)
<p style="color:white;">
  
  {{$x->user->name}}
  
  <br>
  title is :
{{$x->title}}
<br>
description is :
{{$x->comment}}
<br>
date : {{$x->created_at}}

<hr>
</p>
@endforeach
<br>
<form action="/comment" method="POST" enctype="multipart/form-data">
  @csrf
  @method('POST')
      	<div class="container">
      	  <div class="text-center text-light">
      	    <h2>اضف موضوعا جديدا</h2>
         <div class="input-cnt">
            <i class="material-icons">title</i>
            <br>
            <input style="width:80%;" type="text" placeholder="title" name="title" />
         </div>
         
        
         
         <div class="input-cnt">
            <i class="material-icons textarea-icon">comment</i>
      <br>      <textarea style="width:80%; height:300px;" placeholder="comment" name="comment"></textarea>
         </div>
         
         <div class="input-cnt">
            <input type="submit" />
         </div>
         </form>
         </div>
         </div>

@endsection