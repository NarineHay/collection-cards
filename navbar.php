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
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Collections</a>
      </li> -->
      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" id="nav-products" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        
        <!-- -------- -->
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                   
                   <li class="dropdown">
                       <a class="dropdown-item" href="#">Checklists</a>
                       <ul class="dropdown-menu">
                           <li class="dropdown">
                               <a class="dropdown-item" href="#">Baseball</a>
                               <ul class="dropdown-menu">
                                   <li><a class="dropdown-item" href="#">1900-1949</a></li>
                                   <li><a class="dropdown-item" href="#">1950-1979</a></li>
                                   <li><a class="dropdown-item" href="#">1980-1999</a></li>
                                   <li><a class="dropdown-item" href="#">2000-2009</a></li>
                                   <li><a class="dropdown-item" href="#">2010-2018</a></li>
                                   <li><a class="dropdown-item" href="#">2019</a></li>
                                   <li><a class="dropdown-item" href="#">2020</a></li>
                               </ul>
                           </li>
                           <li class="dropdown">
                               <a class="dropdown-item" href="#">Football</a>
                               <ul class="dropdown-menu">
                               <li><a class="dropdown-item" href="#">1900-1949</a></li>
                                   <li><a class="dropdown-item" href="#">1950-1979</a></li>
                                   <li><a class="dropdown-item" href="#">1980-1999</a></li>
                                   <li><a class="dropdown-item" href="#">2000-2009</a></li>
                                   <li><a class="dropdown-item" href="#">2010-2018</a></li>
                                   <li><a class="dropdown-item" href="#">2019</a></li>
                                   <li><a class="dropdown-item" href="#">2020</a></li>
                               </ul>
                           </li>
                           <li class="dropdown">
                               <a class="dropdown-item" href="#">Basketball</a>
                               <ul class="dropdown-menu">
                                   <li><a class="dropdown-item" href="#">1900-1949</a></li>
                                   <li><a class="dropdown-item" href="#">1950-1979</a></li>
                                   <li><a class="dropdown-item" href="#">1980-1999</a></li>
                                   <li><a class="dropdown-item" href="#">2000-2009</a></li>
                                   <li><a class="dropdown-item" href="#">2010-2018</a></li>
                                   <li><a class="dropdown-item" href="#">2019</a></li>
                                   <li><a class="dropdown-item" href="#">2020</a></li>
                               </ul>
                           </li>
                           <li class="dropdown">
                               <a class="dropdown-item" href="#">Hockey</a>
                               <ul class="dropdown-menu">
                                   <li><a class="dropdown-item" href="#">1900-1949</a></li>
                                   <li><a class="dropdown-item" href="#">1950-1979</a></li>
                                   <li><a class="dropdown-item" href="#">1980-1999</a></li>
                                   <li><a class="dropdown-item" href="#">2000-2009</a></li>
                                   <li><a class="dropdown-item" href="#">2010-2018</a></li>
                                   <li><a class="dropdown-item" href="#">2019</a></li>
                                   <li><a class="dropdown-item" href="#">2020</a></li>
                               </ul>
                           </li>
                           <li class="dropdown">
                               <a class="dropdown-item" href="#">Soccerl</a>
                               <ul class="dropdown-menu">
                                   <li><a class="dropdown-item" href="#">1900-1949</a></li>
                                   <li><a class="dropdown-item" href="#">1950-1979</a></li>
                                   <li><a class="dropdown-item" href="#">1980-1999</a></li>
                                   <li><a class="dropdown-item" href="#">2000-2009</a></li>
                                   <li><a class="dropdown-item" href="#">2010-2018</a></li>
                                   <li><a class="dropdown-item" href="#">2019</a></li>
                                   <li><a class="dropdown-item" href="#">2020</a></li>
                               </ul>
                           </li>
                           <li class="dropdown">
                               <a class="dropdown-item" href="#">Fighting</a>
                               <ul class="dropdown-menu">
                                   <li><a class="dropdown-item" href="#">1900-1949</a></li>
                                   <li><a class="dropdown-item" href="#">1950-1979</a></li>
                                   <li><a class="dropdown-item" href="#">1980-1999</a></li>
                                   <li><a class="dropdown-item" href="#">2000-2009</a></li>
                                   <li><a class="dropdown-item" href="#">2010-2018</a></li>
                                   <li><a class="dropdown-item" href="#">2019</a></li>
                                   <li><a class="dropdown-item" href="#">2020</a></li>
                               </ul>
                           </li>
                           <li class="dropdown">
                               <a class="dropdown-item" href="#">Other sports</a>
                               <ul class="dropdown-menu">
                                   <li><a class="dropdown-item" href="#">1900-1949</a></li>
                                   <li><a class="dropdown-item" href="#">1950-1979</a></li>
                                   <li><a class="dropdown-item" href="#">1980-1999</a></li>
                                   <li><a class="dropdown-item" href="#">2000-2009</a></li>
                                   <li><a class="dropdown-item" href="#">2010-2018</a></li>
                                   <li><a class="dropdown-item" href="#">2019</a></li>
                                   <li><a class="dropdown-item" href="#">2020</a></li>
                               </ul>
                           </li>
                       </ul>
                   </li>
                   <!-- -----------------------SETS----------------------- -->
                   
                   <li class="dropdown">
                       <a class="dropdown-item" href="#">Sets</a>
                       <ul class="dropdown-menu">
                           <li class="dropdown">
                               <a class="dropdown-item" href="#">Baseball</a>
                               <ul class="dropdown-menu">
                                   <li><a class="dropdown-item" href="#">1900-1949</a></li>
                                   <li><a class="dropdown-item" href="#">1950-1979</a></li>
                                   <li><a class="dropdown-item" href="#">1980-1999</a></li>
                                   <li><a class="dropdown-item" href="#">2000-2009</a></li>
                                   <li><a class="dropdown-item" href="#">2010-2018</a></li>
                                   <li><a class="dropdown-item" href="#">2019</a></li>
                                   <li><a class="dropdown-item" href="#">2020</a></li>
                               </ul>
                           </li>
                           <li class="dropdown">
                               <a class="dropdown-item" href="#">Football</a>
                               <ul class="dropdown-menu">
                               <li><a class="dropdown-item" href="#">1900-1949</a></li>
                                   <li><a class="dropdown-item" href="#">1950-1979</a></li>
                                   <li><a class="dropdown-item" href="#">1980-1999</a></li>
                                   <li><a class="dropdown-item" href="#">2000-2009</a></li>
                                   <li><a class="dropdown-item" href="#">2010-2018</a></li>
                                   <li><a class="dropdown-item" href="#">2019</a></li>
                                   <li><a class="dropdown-item" href="#">2020</a></li>
                               </ul>
                           </li>
                           <li class="dropdown">
                               <a class="dropdown-item" href="#">Basketball</a>
                               <ul class="dropdown-menu">
                                   <li><a class="dropdown-item" href="#">1900-1949</a></li>
                                   <li><a class="dropdown-item" href="#">1950-1979</a></li>
                                   <li><a class="dropdown-item" href="#">1980-1999</a></li>
                                   <li><a class="dropdown-item" href="#">2000-2009</a></li>
                                   <li><a class="dropdown-item" href="#">2010-2018</a></li>
                                   <li><a class="dropdown-item" href="#">2019</a></li>
                                   <li><a class="dropdown-item" href="#">2020</a></li>
                               </ul>
                           </li>
                           <li class="dropdown">
                               <a class="dropdown-item" href="#">Hockey</a>
                               <ul class="dropdown-menu">
                                   <li><a class="dropdown-item" href="#">1900-1949</a></li>
                                   <li><a class="dropdown-item" href="#">1950-1979</a></li>
                                   <li><a class="dropdown-item" href="#">1980-1999</a></li>
                                   <li><a class="dropdown-item" href="#">2000-2009</a></li>
                                   <li><a class="dropdown-item" href="#">2010-2018</a></li>
                                   <li><a class="dropdown-item" href="#">2019</a></li>
                                   <li><a class="dropdown-item" href="#">2020</a></li>
                               </ul>
                           </li>
                           <li class="dropdown">
                               <a class="dropdown-item" href="#">Soccerl</a>
                               <ul class="dropdown-menu">
                                   <li><a class="dropdown-item" href="#">1900-1949</a></li>
                                   <li><a class="dropdown-item" href="#">1950-1979</a></li>
                                   <li><a class="dropdown-item" href="#">1980-1999</a></li>
                                   <li><a class="dropdown-item" href="#">2000-2009</a></li>
                                   <li><a class="dropdown-item" href="#">2010-2018</a></li>
                                   <li><a class="dropdown-item" href="#">2019</a></li>
                                   <li><a class="dropdown-item" href="#">2020</a></li>
                               </ul>
                           </li>
                           <li class="dropdown">
                               <a class="dropdown-item" href="#">Fighting</a>
                               <ul class="dropdown-menu">
                                   <li><a class="dropdown-item" href="#">1900-1949</a></li>
                                   <li><a class="dropdown-item" href="#">1950-1979</a></li>
                                   <li><a class="dropdown-item" href="#">1980-1999</a></li>
                                   <li><a class="dropdown-item" href="#">2000-2009</a></li>
                                   <li><a class="dropdown-item" href="#">2010-2018</a></li>
                                   <li><a class="dropdown-item" href="#">2019</a></li>
                                   <li><a class="dropdown-item" href="#">2020</a></li>
                               </ul>
                           </li>
                           <li class="dropdown">
                               <a class="dropdown-item" href="#">Other sports</a>
                               <ul class="dropdown-menu">
                                   <li><a class="dropdown-item" href="#">1900-1949</a></li>
                                   <li><a class="dropdown-item" href="#">1950-1979</a></li>
                                   <li><a class="dropdown-item" href="#">1980-1999</a></li>
                                   <li><a class="dropdown-item" href="#">2000-2009</a></li>
                                   <li><a class="dropdown-item" href="#">2010-2018</a></li>
                                   <li><a class="dropdown-item" href="#">2019</a></li>
                                   <li><a class="dropdown-item" href="#">2020</a></li>
                               </ul>
                           </li>
                       </ul>
                   </li>
                   <!-- ----------------New releases calendar--------------------- -->
                   <li class="dropdown">
                       <a class="dropdown-item" href="#">New releases calendar</a>
                   </li>
               </ul>
        <!-- -------------------- -->
        
      </li>
      <!-- ----------------------------- -->
     
      <!-- ---------------------------------- -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Checklists</a>
      </li> -->
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