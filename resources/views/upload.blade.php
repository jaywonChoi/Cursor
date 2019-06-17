<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery-3.4.0.min.js"></script>
<script type="text/javascript">
function back() {
  window.history.back(); //back to list
}
</script>
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

    <h2>Product CRUD</h2>
    <!--<p>Welcome {{ Session::get('adminid') }}様</p>-->
    <input type="button" style="float:right;margin-right:10px" onclick="back()" class="w3-button w3-khaki" value="Back to list">
    <form action="{{ route('image.upload.product')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <table>
        <tr>
          <td>Category</td>
          <td>
            <select name="category" id="category">
              <option value="nonno">nonno</option>
              <option value="men_nonno">Men's nonno</option>
              <option value="anan">anan</option>
              <option value="seventeen">Seventeen</option>
              <option value="jelly">Jelly</option>
              <option value="leane">リンネル</option>
              <option value="nylon">NYLON</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Name</td>
          <td><input type="text" name="pname" id="pname" placeholder="名前を入力してください。"></td>
        </tr>
        <tr>
          <td>Title</td>
          <td><input type="text" name="ptitle" id="ptitle" placeholder="タイトルを入力してください。"></td>
        </tr>
        <tr>
          <td>Text</td>
          <td><textarea name="ptext" id="ptext" placeholder="商品の説明文を入力してください。" rows="8" cols="80"></textarea></td>
        </tr>
        <tr>
          <td>Price</td>
          <td><input type="text" name="price" id="price" placeholder="税込み価額を入力してください。"></td>
        </tr>
        <tr>
          <td>Quantity</td>
          <td><input type="text" name="quan" id="quan" placeholder="在庫を入力してください。"></td>
        </tr>

      </table>

      Main Image <input type="file" name="main" id="main" ><br><br>
      sub Image1 <input type="file" name="sub1" id="sub1" ><br><br>
      sub Image2 <input type="file" name="sub2" id="sub2" ><br><br>

      <input type="submit" id="save" value="save">
    </form>




  </body>
</html>
