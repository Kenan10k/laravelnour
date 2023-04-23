@extends('layouts.app')
@section('content')
@if(session()->has('message'))
<div class="container">
	<div class="alert alert-success" role="alert">
  	{{session()->get('message')}}
</div>
	@endif

  <div class="text-light">
<h1 style=" color:#720026;"> {{$kenan->title}} </h1>
 
<p style=" color:#720026;">by: {{$kenan->user->name}} on : {{$kenan->created_at}}
</p>
<br>
{{$kenan->description}}


</div>

<br>
  <img style="width:100%; border-radius: 20px;
  margin-left: 10px;
         margin-right: 10px;
         height: auto;
  " src="/Img/{{$kenan->image_path}}" alt="Card image cap">
  <br>
  <br>
 @if(Auth::user() && Auth::user()->id == $kenan->user_id)
 <a href="/blog/{{$kenan->id}}/edit" class="btn btn-success">  edit</a>
 @endif
 <br>
  @if(Auth::user() && Auth::user()->id == $kenan->user_id)
 <form action="/blog/{{$kenan->id}}" method="post" >
 	@csrf
 	@method('delete')
 	<button class="btn btn-danger" type="submit">delete</button>
 	
 </form>
 @endif
 
 
</div>




@endsection
