<!DOCTYPE html>
<html lang="en">
  <title>Library | RK University</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= link_tag("assets/css/w3.css")?>
    <?= link_tag("assets/css/poppins.css")?>

  <style>
      
      body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
      body {font-size:16px;}
      .w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
      .w3-half img:hover{opacity:1}
      body{
        background-image: url('<?= base_url('assets/img/images.jpg')?>');
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-size: 100% 100%;
    scroll-behavior: smooth;
      }
  </style>

  <body>

<!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-white w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;background-image: url('<?= base_url('assets/img/rk7.jpg')?>');
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-size: 100% 100%;
    scroll-behavior: smooth;" id="mySidebar"><br>
      <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close</a>
      <div class="w3-container">
        
        
        <img src="<?= base_url('assets/img/logo.png')?>" class="w3-round-small" style="width:100%">
      
      </div>
      <div class="w3-bar-block">
        <a href="<?= site_url('admin/index')?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red">Home</a> 
        <a href="<?= site_url('admin/student')?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red">Students</a> 
        <a href="<?= site_url('admin/book')?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red">Books</a> 
        <a href="<?= site_url('admin/addstudent')?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red">Add Student</a> 
        <a href="<?= site_url('admin/addbook')?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red">Add book</a> 
        <a href="<?= site_url('users/adminlogin')?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-red">Logout</a>
      </div>
    </nav>

    <!-- Top menu on small screens -->
    <header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
      <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
      <span>RK UNIVERSITY</span>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:340px;margin-right:40px;
    
    ">

      <!-- Header -->
      
      
      
</div>





<script src="<?= base_url("assets/js/sidebar.js")?>"></script>


</body>
</html>
