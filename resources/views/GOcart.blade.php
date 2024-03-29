<!DOCTYPE html>
<html>
<title>Cursor</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery-3.4.0.min.js"></script>
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
.container{
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 0px solid lightgrey;
  border-radius: 5px;

}
</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><a href="{{route('Cursor')}}" style="text-decoration: none;"><b>Cursor</b></a></h3>
  </div>

  <div class="w3-large w3-text-grey" ><a href="{{route('shoppage')}}" class="w3-bar-item w3-button">Shop now </a></div>
  <div class="w3-padding-32 w3-large w3-text-grey" > Category
    <a href="nonno" class="w3-bar-item w3-button">nonno</a>
    <a href="men_nonno" class="w3-bar-item w3-button">Men's nonno</a>
    <a href="anan" class="w3-bar-item w3-button">anan</a>
    <a href="seventeen" class="w3-bar-item w3-button">Seventeen</a>
    <a href="jelly" class="w3-bar-item w3-button">Jelly</a>
    <a href="leane" class="w3-bar-item w3-button">リンネル</a>
  </div>
  <div class="w3-large w3-text-grey" ><a href="#footer" class="w3-wide w3-bar-item w3-button w3-padding">Contact</a></div>
  <div class="w3-large w3-text-grey" ><a href="{{ route('admin')}}" class="w3-wide w3-bar-item w3-button w3-padding">ADMIN</a></div>
</nav>


<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide"><a href="{{route('Cursor')}}" style="text-decoration: none;">Cursor</a></div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>

  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left"><a href="{{route('Cursor')}}" style="text-decoration: none;">Cursor<a></p>
    <p class="w3-right">
        @if(Auth::check())
        <a href="#">{{ Auth::user()->uid }} profile</a>
        <a href="{{route('userlogout')}}">logout</a>
        @else
        <a href="{{route('user.signin')}}">Login<i class="fa fa-sign-in w3-margin-right"></i></a>
        @endif
      <a href="#"><i class="fa fa-shopping-cart w3-margin-right"></i></a>
      <a href="search"><i class="fa fa-search"></i></a>
    </p>
  </header>

  <div class="col-25">
    <div class="container">
      <h4>Cursor's Cart <span class="price" style="color:black;float:right;"><i class="fa fa-shopping-cart"></i><b>{{ Session::has('cart')? Session::get('cart')->totalQty : ''}}</b></span></h4>
      @if(Session::has('cart'))
        @foreach((array)$products as $product)
          <p>quan: {{ $product['quan'] }}</p>
          <p>title:  {{ $product['product']['ptitle']}}
            title: {{ $product['product']['pname']}}
            <img src="/uploads/{{ $product['product']['main']}}" style="width:15%;">
        @endforeach
      @else
      <p><a href="#"></a></p>


      @endif

      totalPrice: {{ $totalPrice }}
      totalQty: {{ Session::has('cart')? Session::get('cart')->totalQty : ''}}

    </div>

  </div>




  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
        <h4>Contact</h4>
        <p>Questions? Go ahead.</p>
        <!--find id  email X-->
        <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="title" name="title" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="text" name="text" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Send</button>
        </form>
      </div>

      <div class="w3-col s4">
        <h4>About</h4>
        <p><a href="#">About us</a></p>
        <p><a href="#">We're hiring</a></p>
        <p><a href="#">Support</a></p>
        <p><a href="#">Shipment</a></p>
        <p><a href="#">Payment</a></p>
        <p><a href="#">Help</a></p>
      </div>

      <div class="w3-col s4 w3-justify">
        <h4>Store</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Cursor </p>
        <p><i class="fa fa-fw fa-phone"></i> 010-000-0000 </p>
        <p><i class="fa fa-fw fa-envelope"></i> admin@cursor.co.jp </p>
        <h4>We accept</h4>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
        <br>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
      </div>
    </div>
  </footer>

  <div class="w3-black w3-center w3-padding-24">copyright Cursor</div>

  <!-- End page content -->
</div>

<script>
// Accordion
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";

}

</script>

</body>
</html>
