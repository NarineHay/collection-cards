<?php
include "header.php";
include "config/con1.php";
/*if(isset($_COOKIE['user']) || isset($_SESSION['user'])){ // qcume er profile-page.php ejy
  header('location:profile-page.php');
}*/

?>
<link rel="stylesheet" type="text/css" href="css/navbar-body.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="carusel/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
 
  <link href="carusel/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include "cookie.php";?>
	 <?php 
// 	 if(isset($_SESSION['user'])){
// 	     $id=$_SESSION['user'];
// 	 }
	 	$id = $_SESSION['user'];
	 	$sql = "SELECT * FROM users where id = $id";
	 	$res = mysqli_query($con,$sql);
	 	$ard = mysqli_fetch_assoc($res);

    $sql1 = "SELECT * FROM custom_name_checklist WHERE user_id = $id";
    $res1 = mysqli_query($con,$sql1);
    $row = mysqli_num_rows($res1);

    $sql2 = "SELECT * FROM personal_name_checklist WHERE user_id = $id";
    $res2 = mysqli_query($con,$sql2);
    $row2 = mysqli_num_rows($res2);

    

	  ?> 
<div class="dvbtn">
	<button class="log-in">Add collection</button>	
</div>
<div class="container">
  <div class="row userRow">
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"> 
        <div>
          <?php if($ard['image']): ?>
            <img src='images_users/<?php echo $ard['image']?>' class="img-fluid user_img"> 
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
    <section id="testimonials" class="top-collections">
      <h2 class="text-center text-uppercase">CUSTOM CHECKLIST</h2>
    <div class="container">
       
        <div class="owl-carousel testimonials-carousel">

          
          
<?php if($row >= 1):
  while($tox1=mysqli_fetch_assoc($res1)){
  ?>
                <div class="testimonial-item">
                <div class="row-d" >
                <div class="collect-card carusel-card">
                <div class="img-card">
                   <a href="customchecklist.php?id=<?php echo $tox1['id']?>" class = "customLink"> <img src="img/<?php echo $tox1['image']?>"></a>
                </div>
                <div class="description-card">
                  <div class="d-flex justify-content-between">
                      <span>Description</span>
                      <div class="plus-icon">+</div>
                  </div>
                  <p><?php echo $tox1['description']?></p>
                </div>
                <div class="d-flex collector-cad bd-highlight mb-3">
                    <div class="author-avatar p-2 bd-highlight"></div>
                    <div class="p-2 bd-highlight">
                        <p class="author-name">Author name</p>
                        <p class="country">Country</p>
                    </div>
                    <div class="align-self-center ml-auto p-2 bd-highlight">
                        <span class="star"><i class="fa fa-star-o"></i></span>
                        <span class="star"><i class="fa fa-star-o"></i></span>
                        <span class="star"><i class="fa fa-star-o"></i></span>
                        <span class="star"><i class="fa fa-star-o"></i></span>
                        <span class="star"><i class="fa fa-star-o"></i></span>
                    </div>
                </div>
            </div>
            </div> 
            </div>
            


  <?php } ?>

      
      
      </div>
      </div>
    </section>
      </div>
<?php 

else:
 ?>
  <div class="discdiv">
  <img src="images/disc.png" class="img-responsive">
  <p class="collect">NO COLLECTIONS</p>
</div>
<?php endif ?>

      <!----------------personal cecklist----------------------------->
      
          
<div class="discdiv">
    <section id="testimonials" class="top-collections personalSection">
      <h2 class="text-center text-uppercase">PERSONAL CHECKLIST</h2>
    <div class="container">
       
        <div class="owl-carousel testimonials-carousel">

          
          
<?php if($row2 >= 1):
  while($tox2=mysqli_fetch_assoc($res2)){
  ?>
                <div class="testimonial-item">
                <div class="row-d" >
                <div class="collect-card carusel-card">
                <div class="img-card">
                    <a href="personalchecklist.php?id=<?php echo $tox2['id']?>" class = "customLink"> <img src="img/<?php echo $tox2['image']?>"></a>
                </div>
                <div class="description-card">
                  <div class="d-flex justify-content-between">
                      <span>Description</span>
                      <div class="plus-icon">+</div>
                  </div>
                  <p><?php echo $tox2['description']?></p>
                </div>
                <div class="d-flex collector-cad bd-highlight mb-3">
                    <div class="author-avatar p-2 bd-highlight"></div>
                    <div class="p-2 bd-highlight">
                        <p class="author-name">Author name</p>
                        <p class="country">Country</p>
                    </div>
                    <div class="align-self-center ml-auto p-2 bd-highlight">
                        <span class="star"><i class="fa fa-star-o"></i></span>
                        <span class="star"><i class="fa fa-star-o"></i></span>
                        <span class="star"><i class="fa fa-star-o"></i></span>
                        <span class="star"><i class="fa fa-star-o"></i></span>
                        <span class="star"><i class="fa fa-star-o"></i></span>
                    </div>
                </div>
            </div>
            </div> 
            </div>
            


  <?php } ?>

      
      
      </div>
      </div>
    </section>
      </div>
<?php 

else:
 ?>
  <div class="discdiv">
  <img src="images/disc.png" class="img-responsive">
  <p class="collect">NO COLLECTIONS</p>
</div>
<?php endif ?>




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
<script src="carusel/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="carusel/js/main.js"></script>
</body>
</html>