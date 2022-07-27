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
   <div class="container" style="margin-top: 80px">
   	  <nav aria-label="breadcrumb">
   	  	<ol class="breadcrumb">
   	  		<li class="breadcrumb-item"><a href="/">Shop</a></li>
   	  		<li class="breadcrumb-item active" aria-current="page">Cart</li> 
   	  	</ol>
   	  </nav>
    @if(session()->has('success_msg'))
       <div class="alert alert-success alert-dismissible fade show" role="alert">
       	  {{ session()->get('success_msg') }}
       	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       	  	<span aria-hidden="true"></span>
       	  </button>
       </div>	
      @endif
      @if(session()->has('alert_msg'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
      	   {{ session()->get('alert_msg') }}
      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      		<span aria-hidden="true"></span>
      	</button>
      </div>
     @endif
     @if(count($errors) > 0 )
            @foreach($errors0>all() as $error)
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            	{{ $error }}
            	 <button type="button" class="close" daata-dismiss="alert" aria-label="Close">
            	 	<span aria-hidden="true"><font color="white"></font></span>
            	 </button>
            </div>
           @endforeach
           @endif
         <div class="row justify-content-center">
         	<div class="col-lg-7">
         		<br>
         		@if(\Cart::getTotalQuantity()>0)
         		<h4>{{ \Cart::getTotalQuantity()}} Item(s) In Your Cart</h4><br>
         		@else
         		 <h4>No Item(s) In Your Cart</h4><br>
         		 <a href="/" class="btn btn-dark">Continue Shopping</a>
                 @endif

                @foreach($cartCollection as $item)
                 <div class="row">
                 	<div class="col-lg-3">
                 		<img src="/images/{{ $item->attributes->image }}" class="img-thumbnail" width="200" height="200">
                 	</div>
                 	<div class="col-lg-5">
                 		<p>
                 			<b><a href="/shop/{{ $item->attributes->slug }}">{{ $item->name }} </a></b><br>
                 			<b>Price: </b>${{ $item->price }}<br>
                 			<b>Sub Total : </b>${{ \Cart::get($item->id)->getPriceSum() }}<br>
                 			{{--     <b>With Discount:  </b>${{ \Cart::get($item->id)->getPriceSumWithConditions() }}--}}
                 		</p>
                 	</div>
                 	<div class="col-lg-4">
                 		<div class="row">
                 			<form action=" {{ route('cart.update') }} " method="POST">
                 				
                 			   {{ csrf_field() }}
                              <div class="form-group row">
                              <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                              <input type="number" class="form-control form-control-sm" value="{{ $item->quantity }}" id="quantity" name="quantity" style="width: 70px; margin-right: 10px;">
                              <button class="btn btn-secondary btn-sm" style="margin-right: 25px;background-color:green;color:white;"><i class="fa fa-edit" >Update</i>
                              	
                              </button>
                          </div>
                 			</form>
                 			<form  action="{{ route('cart.remove') }}" method="POST">
                 				{{ csrf_field() }}
                 			<input type="hidden" value="{{ $item->id }}" id="id" name="id">
                 			<button class="btn btn-dark btn-sm" style="margin-right:10px;background-color:red;color:white;"><i class="fa fa-trash">Remove</i></button>
                 			</form>
                 		</div>
                 	</div>
                 </div> 
                 <hr>
                 @endforeach
                 @if(count($cartCollection)>0)
                 <form action="{{ route('cart.clear') }}" method="POST">
                 	{{ csrf_field() }}
                 	<button class="btn btn-secondary btn-md"> Clear Cart</button>
                 </form> 
                 @endif
         	</div>
           @if(count($cartCollection)>0)
              <div class="col-lg-5">
              	<div class="card">
              		<ul class="list-group list-group-flush">
              		<li class="list-group-item"><b>Total: </b>${{ \Cart::getTotal() }}</li>
              		</ul>
              	</div>
              	<br><a href="/" class="btn btn-dark" style="background-color:black;">Continue Shopping</a>
              	<a href="/" class="btn btn-success" style="background-color:blue;">Proceed To Checkout</a>
              </div>
              @endif
         </div>
          <br><br>
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


