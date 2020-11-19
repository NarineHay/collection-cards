<?php
include "header.php";
include "config/con1.php";
/*if(isset($_COOKIE['user']) || isset($_SESSION['user'])){ // qcume er profile-page.php ejy
  header('location:profile-page.php');
}*/
$msg = '';
if(isset($_POST['login'])){
     
    $name = $con-> real_escape_string($_POST['name']);
  $password = $con-> real_escape_string($_POST['password']);
  $password=md5($password);
    if($name=='' || $password==''){
    $msg="Please check your inputs!";
  }else{
      
    $object=mysqli_query($con,"SELECT*FROM users where name='$name' and password='$password'");
    if(mysqli_num_rows($object)==0){
      $msg='Wrong name or password';
    }else{
      $fetch=mysqli_fetch_assoc($object);
      
      if($fetch['isEmailConfirmed']==0){
          $msg="Please verify your email!";
        }
        else{
          $msg="You have been logged in!";
          session_start();
          $_SESSION['user']=$fetch['id'];
              if(isset($_POST['remember'])){
                setcookie('user',$fetch['id'],time()+86400*30);
                
              }
        echo "<script>location.href='./profile-page.php'; </script>";
        //header('http://localhost/collection-cards/profile-page.php');
        }
    }
  }
}	
?>
<link rel="stylesheet" type="text/css" href="css/navbar-body.css">
</head>
<body>
	 <?php include "navbarregister.php"; ?> 
<div class="dvbtn">
	<button class="log-in">Add collection</button>	
</div>
<div class="discdiv">
	<img src="images/disc.png" class="img-responsive">
	<p class="collect">NO COLLECTIONS</p>
</div>

<?php
include "footer.php";
?>
</body>
</html>