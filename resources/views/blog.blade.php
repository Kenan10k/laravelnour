@extends('layouts.app')
@section('content')

<div class="container">
@if(session()->has('message'))

	<div class="alert alert-danger" role="alert">
  	{{session()->get('message')}}
</div>
	@endif

  <h1 class="text-center text-light">جميع الموضوعات</h1>
  @if(Auth::check())
  <div class="text-center">
    <a href="/blog/create" class="btn btn-success" >أضف موضوعا</a>
  </div>
  <hr>
  @endif
  @foreach($posts as $x)
  <div class="text-light">
  <div class="card " style="width: 18rem;  margin: 0 auto; background-image: radial-gradient(rgb(47,68,64), rgb(97,58,34), rgb(47,38,64));">
  <img class="card-img-top" src="/Img/{{$x->image_path}}" alt="Card image cap">
  <div class="card-body">
    <h1> {{$x->title}} </h1>
 
<p style=" color:green;">by: {{$x->user->name}} on : {{$x->created_at}}
</p>
 
    <p class="card-text">{{$x->description}}</p>
  
    <a href="/blog/{{$x->id}}" class="btn btn-primary" >G
    show</a>

  </div>
</div>
</div>
<hr><br>
 @endforeach
  





@endsection