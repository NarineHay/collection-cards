<?php
include "header.php";
?>  
<link rel="stylesheet" href="//unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css" type="text/css" />
<script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/login-register.css">
</head>
<body>
    <?php include "navbar.php"; ?>
<section class="log-reg">
	<div class="container">
		<div class="row">
			 <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 " align="center">
			 	<div class="login">
			 		<div class="header-log">
			 			<p class="first-par">LOG IN</p>
			 		</div>
			 		<div class="divpad">
			 			<form id="login">
			 				<br>
				 			<p class="parag-log">Welcome back,please login<br>to your account</p>
				 			<br>
				 			<div class="input-group dvlog">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-user inp7" aria-hidden="true"></i></span>
							</div>
							<input type="text" placeholder="Name/Nickname" class="form-control" name="login_name"  pattern=".{4,}" title="Cuatro(4) o mas caracteres" required="" class="inpname">
							</div>
							<br>
							<div class="input-group dvlog">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-lock inp7" aria-hidden="true"></i></span>
							</div>
							<input type="password" name="login_password" class="form-control " placeholder="Password" pattern=".{4,}" title="Cuatro(4) o mas caracteres" required="">
							</div>
							<div class="checkbox checkbox-primary check">
							<input id="checkbox_remember" type="checkbox" name="remember">
							<label for="checkbox_remember" class="label"> Remember me</label>
							</div>
							<br>
							<br>
							<button class="log-in">LOG IN</button>
							<br>
							<br>
							<p class="label">Forgot password or name <a href="#">click here</a></p>
			 			</form>
			 		</div>
			 	</div>
			 </div>
			 <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 log" align="center">
			 	<div class="login">
			 		<div class="header-log">
			 			<p class="first-par">REGISTER</p>
			 		</div>
			 		<div class="divpad">
			 			<form>
				 			<p class="parag-log">Let's get you in board</p>
				 			<div class="input-group dvlog">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-user inp7" aria-hidden="true"></i></span>
								</div>
								<input type="text" placeholder="Name/Nickname" class="form-control" name="register_name"  pattern=".{4,}" title="Cuatro(4) o mas caracteres" required="" class="inpname">
							</div>
							
							<div class="input-group dvlog dvmarg">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-map-marker inp7" aria-hidden="true"></i></span>
								</div>
								<select class="selectpicker countrypicker selpiker" data-flag="true"></select>
							</div>
							
							<div class="input-group dvlog dvmarg">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-envelope-o inp7" aria-hidden="true"></i></span>
							</div>
							<input type="email" placeholder="Email" class="form-control" name="register_email"  pattern=".{4,}" title="Cuatro(4) o mas caracteres" required="" class="inpname">
							</div>
							
							<div class="input-group dvlog dvmarg">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-lock inp7" aria-hidden="true"></i></i></span>
							</div>
							<input type="password" name="register_password" class="form-control " placeholder="Password" pattern=".{4,}" title="Cuatro(4) o mas caracteres" required="">
							</div>
							
							<div class="input-group dvlog dvmarg">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-lock inp7" aria-hidden="true"></i></i></span>
							</div>
							<input type="password" name="confirm_password" class="form-control " placeholder="Confirm Password" pattern=".{4,}" title="Cuatro(4) o mas caracteres" required="">
							</div>
							<br>
							<button class="btn log-in">REGISTER</button>
							<br>
							<br>
							<p class="label">If you don't receive email, please try again</p>
						</form>
			 		</div>
			 	</div>
			 </div>
		</div>
	</div>
</section>
<?php
include "footer.php";
?>
<script>
    $('.countrypicker').countrypicker();
  </script>
</body>
</html>