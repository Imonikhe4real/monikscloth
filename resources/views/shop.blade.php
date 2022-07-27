<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/w3.css">
    <script src="/js/jquery-3.5.1.js"></script>
    <title></title>
</head>
<body>


@include('others.navbar')
     <div class="container" style="margin-top:80px;">
     	 <nav aria-label="breadcrumb">
     	 	<ol class="breadcrumb">
     	 		<li class="breadcrumb-item"><a href="/">Home</a></li>
     	 		<li class="breadcrumb-item active" aria-current="page">Shop</li>
     	 	</ol>
     	 </nav>
     	 <div class="row justify-content-center">
     	 	<div class="col-lg-12">
     	 		<div class="row">
     	 			<div class="col-lg-7">
     	 				<h4>Items In Our Store</h4>
     	 			</div>
     	 		</div>
     	 		<hr>
                   <div class="row">
                    @foreach($products as $pro)
                        <div class="col-lg-3">
                         <div class="card" style="margin-bottom:20px;height: auto;">
                              <img src="/images/{{$pro->image_path }}"
                              class="card-img-top mx-auto"
                              style="height:150px; width:150px;display:block;" alt="{{ $pro->image_Path }}">


<div class="card-body">
     <a href=""><h6 class="card-title">{{ $pro->name}}</h6></a>
    <p>${{ $pro->price }}</p>
    <form action="{{ route('cart.store') }}" method="POST">

          {{ csrf_field() }}
          <input type="hidden"  value="{{ $pro->id }}" id="id" name="id">
          <input type="hidden"  value="{{ $pro->name }}" id="name" name="name">
          <input type="hidden"  value="{{ $pro->price }}" id="price" name="price">
          <input type="hidden"  value="{{ $pro->image_path }}" id="img" name="img">
          <input type="hidden"  value="{{ $pro->slug }}" id="slug" name="slug">
          
          <input type="hidden" value="1" id="quantity" name="quantity">
          <div class="card-footer" style="background-color:white;">
              <div class="row">
                   <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart" style="color:black;background-color:yellow;font-weight:bolder;">
                        <i class="fa fa-shopping-cart"></i>Add to cart
                   </button>
              </div> 
          </div>
    </form>
   </div>
  </div>
</div>              
@endforeach
</div>
</div>
</div>
</div>
<br>
<center><div class="w3-border" style="width:200px;height:100px;background-color:green;border-radius:30px;">
     <br><br>
     <center><a href="/contact" style="color:white;font-weight:bolder;text-decoration:none;">Contact US</a></center>
</div></center>
<br>
<br>
<div class="w3-border" style="border-top-color:lightgrey;"></div>
<footer class="w3-border-0" style="width:100%;height:200px;">
  <br>
  <br>
  <center>All right reserved</center>
  <br>
  <br>
  <center>
  <a href="https://www.instagram.com/moniksclothing">
  <img src="/images/IGwhite.jpeg" style="height:25px;width:25px;"><font color="white"></font></a>
  <a href="https://www.linkedin.com/in/moniksclothing">
  <img src="/images/LDwhite.png" style="height:25px;width:25px;"><font color="white"></font></a>
<a href="https://wa.me/+2349140030032">
  <img src="/images/WAwhite.png" style="height:25px;width:25px;"><font color="white"></font>
</a>
<a href="https://www.facebook.com/moniksclothing">
  <img src="/images/FBwhite.png" style="height:25px;width:25px;"><font color="white"></font>
</a>
  </center>
</footer>
<footer class="w3-border-0 w3-light-grey" style="width:100%;height:50px;">
     
</footer>
</body>
</html>



