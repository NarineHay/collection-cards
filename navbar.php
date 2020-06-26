<?php
session_start();
if(isset($_SESSION['language'])){
  $lng=$_SESSION['language'];
}
else{
  $lng='en';
}
?>

<section id="fix">
<header class="navbar navbar-expand-lg navbar-light bg-light" id="head-er">
<div class="container ">
  <a class="navbar-brand" href="#">
    <div id="logo"> 
    <img src="logo-png.png" id="logo">
    </div> 
  </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-controls="navbarSupportedContent1 navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
    <span>  <i class="fa fa-bars" id="icon-bars"></i></span>
  </button>
  <div class="collapse navbar-collapse multi-collapse" id="navbarSupportedContent">
    <form class="form-inline ml-auto">
    <div class="input-group" id="head-search">
      <input type="text" class="form-control" placeholder="Search something">
      
      <div class="input-group-prepend">
        <span class="input-group-text" id="search-border"><i class="fa fa-search" id="icon-search"></i></span>
      </div>
    </div>    
    </form>
    
<div class="d-flex ml-auto" id="header-right">
     <div><a href = "login-register.php" class="register">Register or Log in</a></div>
    <!-- <div >Rus</div> -->
    <!-- -------------------------- -->
    <div data-google-lang="<?php if($lng=='ru'){
            echo 'en';}
        else{
            echo 'ru';}
         ?>" class="language__img" name="lezu" ><?php
        if($lng=='ru'){echo 'Eng';}
        else{echo 'Rus';}
        ?>
        </div>
    <!-- ----------------------------- -->
  </div>
  <div>
  
</div>
</header>
  <!-- --------------------------- -->
  
  <div id="nav" >
    <div class="container" id="container-nav">
<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center" id="sub-nav">
  <div class="collapse navbar-collapse multi-collapse" id="navbarSupportedContent2">
    <ul class="navbar-nav nav-pills nav-fill" id="nav-ul">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Collections</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Checklists</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Template</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Store</a>
      </li><li class="nav-item">
        <a class="nav-link disabled" href="#">Statistics</a>
      </li><li class="nav-item">
        <a class="nav-link disabled" href="#">About</a>
      </li>
      </li><li class="nav-item">
        <a class="nav-link disabled" href="#">Contact us</a>
      </li>
    </ul>
  </div>
</nav>
</div>
</div>
</section>