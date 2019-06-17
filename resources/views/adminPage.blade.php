<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery-3.4.0.min.js"></script>
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><a href="{{route('adminpage')}}" style="text-decoration: none;"><b>Cursor</b></a></h3>
  </div>

  <div class="w3-padding-32 w3-large w3-text-grey" >
    <a href="{{route('upload')}}" class="w3-bar-item w3-button">Product_create</a>
    <a href="{{route('product.list')}}" class="w3-bar-item w3-button">Product_view</a>
    <a href="#" class="w3-bar-item w3-button">ORDER</a>
    <a href="#" class="w3-bar-item w3-button">STAFF</a>
    <a href="#" class="w3-bar-item w3-button">PAYMENT</a>
  </div>
  <div class="w3-large w3-text-grey" ><a href="{{ URL('logout')}}" class="w3-wide w3-bar-item w3-button w3-padding">LOGOUT</a></div>
</nav>



<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>

    <h2>Admin CRUD</h2>
    <p>Welcome {{ Session::get('adminid') }}様</p>

    <!-- Header -->
 <header class="w3-container" style="padding-top:22px">
   <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
 </header>

 <div class="w3-row-padding w3-margin-bottom">
   <div class="w3-quarter">
     <div class="w3-container w3-blue w3-padding-16">
       <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
       <div class="w3-right">
         <h3>99</h3>
       </div>
       <div class="w3-clear"></div>
       <h4>Views</h4>
     </div>
   </div>
   <div class="w3-quarter">
     <div class="w3-container w3-teal w3-padding-16">
       <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
       <div class="w3-right">
         <h3>23</h3>
       </div>
       <div class="w3-clear"></div>
       <h4>Orders</h4>
     </div>
   </div>
   <div class="w3-quarter">
     <div class="w3-container w3-orange w3-text-white w3-padding-16">
       <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
       <div class="w3-right">
         <h3>50</h3>
       </div>
       <div class="w3-clear"></div>
       <h4>Users</h4>
     </div>
   </div>
 </div>


  </body>
</html>
