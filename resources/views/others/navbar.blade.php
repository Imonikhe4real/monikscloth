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



<nav class="navbar navbar-expand-md  navbar-dark fixed-top shadow-sm w3-light-grey">
	 <div class="container">
	 	<a class="navbar-brand" href="{{ url('/') }}" style="color:black;">
	 	       <center><b>MONIKS CLOTHINGS</b></center>  
	 	 </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{_('Toggle navigation') }}">
       	    <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
       	   <ul class="navbar-nav ml-auto">
       	   	   <li class="nav-item">
       	   	   	  <a class="nav-link" href="{{ route('shop') }}" style="color:black">SHOP</a>
       	   	   </li>
               <li class="nav-item dropdown">
               	  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('cart.index') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black;"> 
                 <span class="badge badge-pill badge-dark">
                 	<i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}
                    </span></a>
                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DAOA2">
                   	  <ul class="list-group" style="margin: 20px;">
                   	  	@include('others.cart-drop')
                   	  </ul>
                   </div>


               </li>
       	   </ul>
       </div>
</div>
</nav>

</body>
</html>

