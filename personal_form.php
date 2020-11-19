<?php
	session_start();
	$uid = $_SESSION['user'];
	include "config/con1.php";
	if(isset($_POST['name-collection'])){
		$user_id = mysqli_real_escape_string($con, $_POST['user_id']);
		$name_collection = mysqli_real_escape_string($con, $_POST['name-collection']);
		$description	 = mysqli_real_escape_string($con, $_POST['description']);
		$file_name = $_FILES['file']['name'];
		$tmp = $_FILES['file']['tmp_name'];
		$type = $_FILES['file']['type'];
		$size = $_FILES['file']['size'];
		$size = round($size/1024);
		$test = explode('.', $file_name);
		$extension = end($test);
		$name2 = md5(rand(0,1000). rand(0,1000). rand(0,1000). rand(0,1000)).'.'.$extension;
		$chanaparh = 'img/'.$name2;

		$t1 = mysqli_real_escape_string($con, $_POST['title1']);
		$t2 = mysqli_real_escape_string($con, $_POST['title2']);
		$t3 = mysqli_real_escape_string($con, $_POST['title3']);
		// if($size <= 200){
		// 	if($extension=='png' || $extension=='jpg' || $extension=='jpeg'){
				move_uploaded_file($tmp, $chanaparh);
				$sql = "INSERT INTO `personal_name_checklist`
				(`user_id`, `name_of_checklist`, `description`, `image`, `title1`, `title2`, `title3`) 
				VALUES 
				('$user_id','$name_collection','$description','$name2','$t1','$t2','$t3')";
				$query = mysqli_query($con, $sql);
		// 	}
		// }
		$sqlid = "SELECT MAX(id) as id FROM personal_name_checklist";
		$resid = mysqli_query($con, $sqlid);
		$tox = mysqli_fetch_assoc($resid);
		$cid = $tox['id'];
		
		for($i=0;$i<count($_POST['basechecklist']);$i++){
			$rid[$i]	 		 = mysqli_real_escape_string($con, $_POST['rid'][$i]);
			$basechecklist[$i]	 = mysqli_real_escape_string($con, $_POST['basechecklist'][$i]);
			$sport_type1[$i]	 = mysqli_real_escape_string($con, $_POST['sport_type'][$i]);
			$card_number1[$i]    = mysqli_real_escape_string($con, $_POST['card_number'][$i]);
			$card_name1[$i]      = mysqli_real_escape_string($con, $_POST['card_name'][$i]);
			$team1[$i]			 = mysqli_real_escape_string($con, $_POST['team'][$i]);
			$set_type1[$i]		 = mysqli_real_escape_string($con, $_POST['set_type'][$i]);
			$parallel1[$i]		 = mysqli_real_escape_string($con, $_POST['parallel'][$i]);
			$print_run1[$i]		 = mysqli_real_escape_string($con, $_POST['print_run'][$i]);

			$d1[$i]	= mysqli_real_escape_string($con, $_POST['description1'][$i]);
			$d2[$i]	= mysqli_real_escape_string($con, $_POST['description2'][$i]);
			$d3[$i]	= mysqli_real_escape_string($con, $_POST['description3'][$i]);
			
			$base1 = "SELECT * FROM collections WHERE id=$basechecklist[$i]";
			$res = mysqli_query($con, $base1);
			$tox[$i] = mysqli_fetch_assoc($res);
			$base[$i] = $tox[$i]['name_of_collection'];
			$sport_type[$i] = $tox[$i]['sport_type'];
			echo $sport_type[$i]."---".$rid[$i];
			$cnumber = "SELECT card_number FROM base_checklist WHERE id=$card_number1[$i]";
			$res = mysqli_query($con, $cnumber);
			$tox2[$i] = mysqli_fetch_assoc($res);
			$card_number[$i] = $tox2[$i]['card_number'];

			$cname = "SELECT card_name FROM base_checklist WHERE id=$card_name1[$i]";
			$res = mysqli_query($con, $cname);
			$tox3[$i] = mysqli_fetch_assoc($res);
			$card_name[$i] = $tox3[$i]['card_name'];

			$set_type2 = "SELECT set_type FROM base_checklist WHERE id=$set_type1[$i]";
			$res = mysqli_query($con, $set_type2);
			$tox4[$i] = mysqli_fetch_assoc($res);
			$set_type[$i] = $tox4[$i]['set_type'];

			$parallel2 = "SELECT parallel FROM base_checklist WHERE id=$parallel1[$i]";
			$res = mysqli_query($con, $parallel2);
			$tox5[$i] = mysqli_fetch_assoc($res);
			$parallel[$i] = $tox5[$i]['parallel'];

			$prun = "SELECT print_run FROM base_checklist WHERE id=$print_run1[$i]";
			$res = mysqli_query($con, $prun);
			$tox6[$i] = mysqli_fetch_assoc($res);
			$print_run[$i] = $tox6[$i]['print_run'];
			
			$team2 = "SELECT team FROM base_checklist WHERE id=$team1[$i]";
			$res = mysqli_query($con, $team2);
			$tox7[$i] = mysqli_fetch_assoc($res);
			$team[$i] = $tox7[$i]['team'];

			

			$sql2 = "INSERT INTO `personal_checklist`
			(`cid`,`rid`, `base_checklist_name`, `sport_type`, `card_number`, `card_name`, `team`, `set_type`, `parallel`, `print_run`, `description1`, `description2`, `description3`) 
			VALUES ('$cid','$rid[$i]','$base[$i]','$sport_type[$i]','$card_number[$i]','$card_name[$i]','$team[$i]','$set_type[$i]','$parallel[$i]','$print_run[$i]','$d1[$i]','$d2[$i]','$d3[$i]')";

			$res = mysqli_query($con, $sql2);

		}
	}
	if(isset($_POST['upd_id'])){
		$upd_id = mysqli_real_escape_string($con, $_POST['upd_id']);
		$base1 = mysqli_real_escape_string($con, $_POST['base']);
		$sel = "SELECT * FROM collections WHERE id = '$base1' ";
		$res = mysqli_query($con, $sel);
		$tox = mysqli_fetch_assoc($res);
		$base = $tox['name_of_collection'];
		$sport_type = $tox['sport_type'];

		/*$sport_type = mysqli_real_escape_string($con, $_POST['sport_type']);
		$card_number = mysqli_real_escape_string($con, $_POST['card_number']);
		$card_name = mysqli_real_escape_string($con, $_POST['card_name']);
		$team = mysqli_real_escape_string($con, $_POST['team']);
		$set_type = mysqli_real_escape_string($con, $_POST['set_type']);*/
		$parallel = mysqli_real_escape_string($con, $_POST['parallel']);
		$print_run = mysqli_real_escape_string($con, $_POST['print_run']);

		$d1 = mysqli_real_escape_string($con, $_POST['d1']);
		$d2 = mysqli_real_escape_string($con, $_POST['d2']);
		$d3 = mysqli_real_escape_string($con, $_POST['d3']);
		if($parallel==$print_run){


			$id = $parallel;
			$sql = "SELECT * FROM `base_checklist`WHERE id='$id'";
			$res = mysqli_query($con, $sql);
			$tox = mysqli_fetch_assoc($res);
			$set_type = trim($tox['set_type']);
			$card_number = trim($tox['card_number']);
			$card_name = trim($tox['card_name']);
			$team = trim($tox['team']);
			$parallel = trim($tox['parallel']);
			$print_run = trim($tox['print_run']);

			$upd = "UPDATE `personal_checklist` SET `base_checklist_name`= '$base',`sport_type`='$sport_type',`card_number`='$card_number',`card_name`='$card_name',`team`='$team',`set_type`='$set_type',`parallel`='$parallel',`print_run`='$print_run',`description1`='$d1',`description2`='$d2',`description3`='$d3' WHERE id=$upd_id";
			$res = mysqli_query($con, $upd);
		}

		
	}
	if(isset($_POST['btn_save_chenge'])){
		$id 			 = mysqli_real_escape_string($con, $_POST['id']);
		$name_collection = mysqli_real_escape_string($con, $_POST['name']);
		$description	 = mysqli_real_escape_string($con, $_POST['desc']);
		$file_name = $_FILES['file']['name'];
		$tmp = $_FILES['file']['tmp_name'];
		$type = $_FILES['file']['type'];
		$size = $_FILES['file']['size'];
		$size = round($size/1024);
		$test = explode('.', $file_name);
		$extension = end($test);
		$name2 = md5(rand(0,1000). rand(0,1000). rand(0,1000). rand(0,1000)).'.'.$extension;
		$chanaparh = 'img/'.$name2;

		$t1 = mysqli_real_escape_string($con, $_POST['t1']);
		$t2 = mysqli_real_escape_string($con, $_POST['t2']);
		$t3 = mysqli_real_escape_string($con, $_POST['t3']);

		if (!file_exists($_FILES['file']['tmp_name']) || !is_uploaded_file($_FILES['file']['tmp_name'])) 
		{
		    $sql = "UPDATE `personal_name_checklist` SET `name_of_checklist`='$name_collection',`description`='$description',`title1`='$t1',`title2`='$t2',`title3`='$t3' WHERE id='$id' AND `user_id`='$uid'";
				$query = mysqli_query($con, $sql);
				if($query){
					header('location:personalchecklist.php?id='.$id.'');
				}else {
					echo "sxal";
				}
			}
		else
		{
		// if($size <= 200){
		// 	if($extension=='png' || $extension=='jpg' || $extension=='jpeg'){
				move_uploaded_file($tmp, $chanaparh);
				$sql = "UPDATE `personal_name_checklist` SET `name_of_checklist`='$name_collection',`description`='$description',`image`='$name2',`title1`='$t1',`title2`='$t2',`title3`='$t3' WHERE id='$id' AND `user_id`='$uid'";
				$query = mysqli_query($con, $sql);
				if($query){
					header('location:personalchecklist.php?id='.$id.'');
				}else {
					echo "sxal";
				}
		//	}
		//}
		}
	}
	if(isset($_POST['copy'])){
		$cid = mysqli_real_escape_string($con, $_POST['copy']);
		$rid = mysqli_real_escape_string($con, $_POST['rrid']);
		$base = mysqli_real_escape_string($con, $_POST['basename']);
		$sport_type = mysqli_real_escape_string($con, $_POST['sport_type']);
		$card_number = mysqli_real_escape_string($con, $_POST['card_number']);
		$card_name = mysqli_real_escape_string($con, $_POST['card_name']);
		$team = mysqli_real_escape_string($con, $_POST['team']);
		$set_type = mysqli_real_escape_string($con, $_POST['set_type']);
		$parallel = mysqli_real_escape_string($con, $_POST['parallel']);
		$print_run = mysqli_real_escape_string($con, $_POST['print_run']);
		$d1 = mysqli_real_escape_string($con, $_POST['d1']);
		$d2 = mysqli_real_escape_string($con, $_POST['d2']);
		$d3 = mysqli_real_escape_string($con, $_POST['d3']);
		$sql2 = "INSERT INTO `personal_checklist`
			(`cid`,`rid`, `base_checklist_name`, `sport_type`, `card_number`, `card_name`, `team`, `set_type`, `parallel`, `print_run`, `description1`, `description2`, `description3`) VALUES ('$cid','$rid','$base','$sport_type','$card_number','$card_name','$team','$set_type','$parallel','$print_run','$d1','$d2','$d3')";

			$res = mysqli_query($con, $sql2);
			if($res){
				header('location:personalchecklist.php');
			}
	}
	if(isset($_POST['del_td'])){
		$id = mysqli_real_escape_string($con, $_POST['id']);
		$did = mysqli_real_escape_string($con, $_POST['del_td']);
		$del = "DELETE FROM `personal_checklist` WHERE id=$did";
		$res = mysqli_query($con, $del);

		
		if($res){
			header('location:personalchecklist.php?id='.$id.'');
		}

	}
?>