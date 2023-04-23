@extends('layouts.app')
@section('content')
<form action="/blog/{{$kenan->id}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('Put')
      	<div class="container">
      	  <div class="text-center text-light">
      	    <h2>تعديل المنشور</h2>
         <div class="input-cnt">
            <i class="material-icons">title</i>
            <br>
            <input style="width:80%;" type="text" value="{{$kenan->title}}" name="title" />
         </div>
         
         
         
         <div class="input-cnt">
            <i class="material-icons textarea-icon">description</i>
      <br>      <textarea style="width:80%; height:300px;" value="{{$kenan->description}}" name="description"></textarea>
         </div>
         
<br>
         <div class="input-cnt">
            <i class="material-icons">photo</i>
          <br>  <input type="file" placeholder="photo" name="image_path" />
         </div>
  <br>
         
         <div class="input-cnt">
            <input type="submit" />
         </div>
         </form>
         </div>
         </div>
@endsection