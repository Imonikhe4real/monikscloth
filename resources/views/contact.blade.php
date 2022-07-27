<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="/css/w3.css">
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
     	</div>
<div class="w3-border-0" style="height:200px;width:100%;">
	
</div>
<div class="w3-row">
	<div class="w3-half w3-light-grey" style="height:400px;">
	   <div class="w3-card w3-light-grey" style="height:400px;width:100%;" ><br><br><br>
	   	   <center><b style="color:blue">CONTACT US BY FILLING THE CONTACT US FORM WITH YOUR<br> REQUEST AND ORDERS</b></center>
	   </div>	
	</div>
    <div class="w3-half w3-light-grey" style="height:400px;">
		 <div class="w3-card w3-light-grey" style="height:400px;width:100%;" >
	   	  <form action="/contact" method="POST">
	   	  	@csrf
<b style="color:green">@if( $message  = Session::get('success'))
 <div class="alert alert-success">
     <p>{{ $message }}</p>
 </div>
 @endif</b>
	   	  	   <center><br><br><b>CONTACT US </b></center><br>
                <center>
	   	  	   <table>

	   	  	   	   <tr>
	   	  	   	   	<td style="font-weight:bolder;">Name</td>
	   	  	   	   	<td><input type="text"  name="name" placeholder="Type your name here" required></td>
	   	  	   	   </tr>

	   	  	   	   <tr>
	   	  	   	   	<td style="font-weight:bolder;">Email</td>
	   	  	   	   	<td><input type="text"  name="email" placeholder="Type your email here" required></td>
	   	  	   	   </tr>

	   	  	   	   <tr>
	   	  	   	   	<td style="font-weight:bolder;">Phone</td>
	   	  	   	   	<td><input type="text"  name="phone" placeholder="Type your phone here" required></td>
	   	  	   	   </tr>

	   	  	   	   <tr>
	   	  	   	   	<td style="font-weight:bolder;">Address</td>
	   	  	   	   	<td><input type="text"  name="address" placeholder="Type your address here" required></td>
	   	  	   	   </tr>

	   	  	   	   <tr>
	   	  	   	   	<td style="font-weight:bolder;">Orders</td>
	   	  	   	   	<td><input type="text"  name="orders" placeholder="Type what you Ordered for here" required></td>
	   	  	   	   </tr>
                   <center>
	   	  	   	   <tr>
	   	  	   	   	<td><input type="submit"  name="SEND" value="SEND" style="background-color:black;color:white;"></td>
	   	  	   	   </tr>
                    </center>
	   	  	   </table></center>

	   	  </form>

	   </div>
	</div>
</div>
<br>
<br>
<center><div class="w3-border" style="width:200px;height:100px;background-color:red;border-radius:30px;">
     <br><br>
     <center><a href="/" style="color:white;font-weight:bolder;text-decoration:none;">Continue Shopping</a></center>
</div></center>
<div class="w3-border-0" style="height:200px;width:100%;">
	
</div>
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



</body>
</html>