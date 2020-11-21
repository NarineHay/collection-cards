<?php
include "header.php";
include "config/con1.php";
if(isset($_COOKIE['user']) || isset($_SESSION['user'])){
	
}else{
	header('location:index.php');
}
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

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="//unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css" type="text/css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/file.css">

</head>
<body>
<?php include "cookie.php"; ?>
<section class="file">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-5 p-0 mt-0">
						<div class=" bord">
							<img src="images/icon/tools-07.png" class="img-icon">
							<div class="icon-text">Resize</div>
						</div>
					</div>
					<div class="col-md-5 p-0 mt-0">
						<div class=" bord">
							<img src="images/icon/tools-08.png" class="img-icon">
							<div class="icon-text">Crop</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 p-0">
						<div class=" bord">
							<img src="images/icon/tools-04.png" class="img-icon">
							<div class="icon-text">Transform</div>
						</div>
					</div>
					<div class="col-md-5 p-0">
						<div class=" bord">
							<img src="images/icon/tools-03.png" class="img-icon">
							<div class="icon-text">Draw</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 p-0">
						<div class=" bord">
							<img src="images/icon/tools-02.png" class="img-icon">
							<div class="icon-text">Text</div>
						</div>
					</div>
					<div class="col-md-5 p-0">
						<div class=" bord">
							<img src="images/icon/tools-12.png" class="img-icon">
							<div class="icon-text">Shapes</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 p-0">
						<div class=" bord">
							<img src="images/icon/tools-01.png" class="img-icon">
							<div class="icon-text">Frames</div>
						</div>
					</div>
					<div class="col-md-5 p-0">
						<div class=" bord">
							<img src="images/icon/tools-10.png" class="img-icon">
							<div class="icon-text">Corners</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 p-0">
						<div class=" bord">
							<img src="images/icon/tools-09.png" class="img-icon">
							<div class="icon-text">Background</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 bord2">
				<div class="bord-dotted">
					<div id='divHabilitSelectors' class="input-file-container">
						<input class="input-file" id="fileupload" name="files" type="file" multiple> 
						<label for="fileupload" class="input-file-trigger" id='labelFU' tabindex="0">
							<div class="upload_div">
								<img src='images/icon/upload.png' class="img_upload">
								<br>
								Please select a file
							</div>
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	// ajout de la classe JS à HTML
document.querySelector("html").classList.add('js');
 
// initialisation des variables
var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
 
// action lorsque la "barre d'espace" ou "Entrée" est pressée
button.addEventListener( "keydown", function( event ) {
    if ( event.keyCode == 13 || event.keyCode == 32 ) {
        fileInput.focus();
    }
});
 
// action lorsque le label est cliqué
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});
 
// affiche un retour visuel dès que input:file change
fileInput.addEventListener( "change", function( event ) {  
    //the_return.innerHTML = this.value;
    $('#labelFU').text("Choosen file : " + this.value);
});


</script>
<?php
include "footer.php";
?>
</body>
</html>