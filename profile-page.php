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
	 <?php include "navbarregister.php";
	 	$id = $_SESSION['user'];
	 	$sql = "SELECT * FROM users where id = '$id'";
	 	$res = mysqli_query($con,$sql);
	 	$ard = mysqli_fetch_assoc($res);
	 	

	  ?> 
<div class="dvbtn">
	<button class="log-in">Add collection</button>	
</div>
<div class="container">
  <div class="row userRow">
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"> 
        <div>
          <?php if($ard['image']): ?>
            <img src='images/<?php echo $ard['image']?>' class="img-fluid user_img"> 
          <?php else: ?>
            <p>Add your image</p>
          <?php endif ?>
        </div>    	
      		
        <br>
        <button class="add" data-toggle="modal" data-target="#exampleModall">Edit</button> 
      </div>
      <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12" style="word-break: break-all">  
    	<h4 class="parag-log"><?php echo $ard['name']?>
        
      </h4>
        <p class="parag-log"><?php echo $ard['country']?></p>
        <p class="parag-log">
        	<?php 
        		if($ard['more']){
        			echo $ard['more'];		
        		}else{
        			echo "Add more information";
        		}
        	?>
        		
        	</p>
        	
      </div>
  </div>
</div>

  <div class="discdiv">
  <img src="images/disc.png" class="img-responsive">
  <p class="collect">NO COLLECTIONS</p>
</div>


<div class="modal fade" id="exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <form action="profile-page-image-upload.php" method="post" enctype="multipart/form-data">

                  <input type="hidden" name="id" value="<?php echo $id?>">
                  <input type="text" class="form-control" name="name" value="<?php echo $ard['name']?>"> 
                  <br>                  
    		        	<textarea  name="text" cols="50" class="form-control">
  		        		<?php 
  			        		if($ard['more']){
  			        			echo $ard['more'];		
  			        		}else{
  			        			echo "Add more information";
  			        		}
          				?>
  		        	</textarea>
  		        	<br>
                <input type="file" name="image" class="form-control">        
          			<button type="submit" name="send" class="add">Add</button>
        		</form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modalbody2">

            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>
</body>
</html>