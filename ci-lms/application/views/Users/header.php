

<!DOCTYPE html>
<html>
<head>

  <title>Library | RK University</title>

    <?= link_tag("assets/css/open-iconic-bootstrap.min.css")?>
    <?= link_tag("assets/css/animate.css")?>
    <?= link_tag("assets/css/owl.carousel.min.css")?>
    <?= link_tag("assets/css/owl.theme.default.min.css")?>
    <?= link_tag("assets/css/magnific-popup.css")?>
    <?= link_tag("assets/css/aos.css")?>
    <?= link_tag("assets/css/ionicons.min.css")?>
    <?= link_tag("assets/css/flaticon.css")?>
    <?= link_tag("assets/css/icomoon.css")?>
    <?= link_tag("assets/css/style.css")?>
    <?= link_tag("assets/css/bootstrap.min.css")?>
    <?= link_tag("assets/css/bootstrap1.min.css")?>

</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">

    <ul class="navbar-nav mr-auto" style="font-weight: bold;">
    
      <li class="nav-item" >
        <a class="nav-link" href="<?= site_url("users/index")?>">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url("users/about")?>">ABOUT</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url("users/login")?>">LOGIN</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url("users/registration")?>">REGISTRATION</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url("users/contact")?>">CONTACT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url("users/adminlogin")?>">ADMIN</a>
      </li>
      
    </ul>
    
  </div>
  <div>
    
    <a class="navbar-brand" href="<?= site_url("users/index")?>">RK UNIVERSITY</a>

  </div>
</nav>
</body>
</html>