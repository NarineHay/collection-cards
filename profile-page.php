<?php
 /*if(!isset($_COOKIE['user']) || !isset($_SESSION['user'])){
            header('location:index.php');
        }*/
include "header.php";
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