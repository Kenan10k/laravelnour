@extends('layouts.app')
@section('content')

<div class="container" >
  <div style="background-color:#457eac; margin-top: -23px;
  padding:40% 100px ;

  min-width: 100%;
  
  " class=" text-center">
    <h3 style="color:white;">welcome to my blog</h3>
    <a style="background-color:#c2aff0;" class="btn " href="/blog">learn more</a>
  </div>
 </div>
 
 <hr>
 
  <div class="container" >
    <div class="row">
    <div class="col card" style="width: 18rem;
    background-color:#457eac;
    ">
  <img class="card-img-top" src="{{asset('Img/FB_IMG_16773947624030499.jpg')}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="color:white;"><b>Card title</b></h5>
    <p class="card-text"style="color:white;" >Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="/blog/create" class="btn btn-success">try create</a>

    </div>
    </div>
    <br>
     
 
     <div class="col card" style="
     background-color:#457eac;
     width: 18rem;">
  <img class="card-img-top" src="{{asset('Img/FB_IMG_16655679199093703.jpg')}}" alt="Card image cap">
  <div class="card-body">
    <h5 style="color:white;" class="card-title"><b>Card two</b></h5>
    <p style="color:white;" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="/comment" class="btn btn-success">about</a>
  </div>
</div>
</div>


</div>

<hr>

<div class="container">
  <div class="row">
   <div class="col-8" style="background-color:#457eac;">
     <img class="card-img-top" src="{{asset('Img/FB_IMG_16636621760143279.jpg')}}">
     <hr>
     <img class="card-img-top" src="{{asset('Img/FB_IMG_16770102365835651.jpg')}}">
   </div> 
   <div class="col-4" style="background-color:#457eac;
overflow:scroll;
       
   ">
     <h2 style="color:white;"><b>Installation</b></h2>
     
       
       
       
    
         <div style="
         width:auto;
         height:10px;
       
       color:white;
       font-size: 10px;
         ">
          The Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment

<p id="hidden-text" class="hidden-text">
  The Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.
The Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.
The Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.
The Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.
The Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.
The Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.
The Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.

However, if you are not using Homestead, you will need to make sure your server meets the following requirements:
  
</p>
<button class="btn btn-success" onclick="toggleText()">read more..</button>

           
           




         </div>
       



     
   </div>
    
  </div>
  
</div>
<br>

<div class="container" style="background-color:#457eac;">
  <h5 style="background-color:#006d77;" class="text-light text-center "> this is some Ideal </h5>
  <hr>
  <div class="row" >
   <div class="col text-danger"><b>java script</b></div> 
   <div class="col text-danger"><b>vue js</b></div> 
   <div class="col text-danger"><b>laravel</b></div> 
   <div class="col text-danger"><b>iunic</b></div> 
    
  </div>
  
</div>
<hr>

<div class="container">
  <h2 class="text-light text-center">Recent posts</h2>
  <p class="text-center text-info">The Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.</p>
</div>
<hr><br>
<div class="container " style="background-color:#457eac;">
  <br>
  <div class="row">
    <div class="col">
  <ul class="row" style="background-color:#457eac;">
    <li class="col text-dark">css</li>
    <li class="col text-dark">js</li>
    <li class="col text-dark">html</li>
    

  </ul>
  <div class="text-light ">
    <p class="text-center">The Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.</p>
    <a href="/blog" class="btn btn-success">mu blog</a>
  </div>
  </div>
  <div class="col">
   <img style="
   
         border-radius: 5px;
         
         width: 100%;
   " src="{{asset('Img/FB_IMG_16655679199093703.jpg')}}">
  </div>
 </div> 
</div>
<br>





@endsection