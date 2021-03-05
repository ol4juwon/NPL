<?php
ini_set('display_errors',true);
//var_dump($config);
require '../config.php';
// var_dump($_SESSION);
var_dump($_POST);
echo $l_id = $_POST['l_id'];
$agent_id = $_SESSION['user_email_address'];
// (new UploadApi())->upload($_FILES['images']['name']);
include_once("db_connect.php");
   $images = array();
   $targetDir = "uploads/";
   try{
	$agSql = "select id from users where email = '".$agent_id."'";

	// echo $agSql;
	
	$agres = $pdo->query($agSql);
	$row =$agres->fetch();
	$ag_id =  $row['id'];
	// var_dump($agres);
	}catch(PDOException | Exception $re){
		echo $re;
	}
// $fileName = $_FILES["images"]["name"];
// $targetFilePath = $targetDir . $fileName;
// $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
   foreach($_FILES['images']['name'] as $key=>$val){        
        $upload_dir = "uploads/";
        $upload_image = $upload_dir.$_FILES['images']['name'][$key];
		echo $filename = $_FILES['images']['name'][$key];		
        if(move_uploaded_file($_FILES['images']['tmp_name'][$key],$upload_image)){
            $images[] = $upload_image;
			$insert_sql = "INSERT INTO pictures ( image1, listing_id,agent_id) VALUES
			( '".$filename."', '".$l_id."', '".$ag_id."')";
			
			try{
			$upload = $pdo->prepare($insert_sql);
			$upload->execute();
			}catch(PDOException | Exception $e){
				echo $e;
			}


			
			}
    }
?>
<div class="row">
	<div class="image_gallery">
		<?php
		if(!empty($images)){ 
			foreach($images as $image){ ?>
			<ul>
				<li >
					<img class="images" src="<?php echo $image; ?>" alt="">
				</li>
			</ul>
		<?php }	}?>
	</div>
</div>
