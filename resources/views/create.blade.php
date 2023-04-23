@extends('layouts.app')
@section('content')
<form action="/blog" method="POST" enctype="multipart/form-data">
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
            <i class="material-icons">photo</i>
          <br>  <input type="file" placeholder="photo" name="image_path" />
         </div>
         
         <div class="input-cnt">
            <i class="material-icons textarea-icon">description</i>
      <br>      <textarea style="width:80%; height:300px;" placeholder="description" name="description"></textarea>
         </div>
         
         <div class="input-cnt">
            <input type="submit" />
         </div>
         </form>
         </div>
         </div>
@endsection