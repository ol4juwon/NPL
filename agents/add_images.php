<?php 
require '../api/config/config.php';
require '../config.php';
include('header.php');
 $agent_id = $_SESSION['user_email_address'];

if(isset($_POST['addProp'])){
	 //var_dump($_POST);
	$SQL = 'INSERT INTO listings ';
	$SQL .= '(title,location, category,price,date_added,agent_id,parking,Description,number_beds,number_toilets,furnished,serviced,type)';
	$SQL .= 'VALUES';
	$SQL .= '(?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$title = $_POST['title'];
	$location = $_POST['location'];
	$price = $_POST['price'];
	$bedrooms = $_POST['bedrooms'];
	$bath = $_POST['baths'];
	$toilet = $_POST['toilets'];
	$park = $_POST['park'];
	$serviced = $_POST['serviced'] == 'Yes' ? 1:0;
	$furnished = $_POST['furnished'] == 'Yes'? 1 : 0;
	$description = $_POST['description'];
	$date = date("y-m-d h:i:s");
	$type = 'flat';
	$category = 'rent';
	try{
	$agSql = "select id from users where email = '".$agent_id."'";

	// echo $agSql;
	
	$agres = $pdo->query($agSql);
	$row =$agres->fetch();
	$agent_id =  $row['id'];
	// var_dump($agres);
	}catch(PDOException | Exception $re){
		echo $re;
	}
	$data = [$title,$location,$category,$price,$date,$agent_id , $park,$description,$bedrooms,$toilet,$furnished,$serviced,$type];
	// $title = $_POST['title'];
	// $title = $_POST['title'];
	//  var_dump($data);
// echo $SQL;
	try{
		$query =  $pdo->prepare($SQL)->execute($data);
		$last_id = $pdo->lastInsertId();
	
	}catch(PDOException $e){
		echo $e;
	}catch(Exception $e){
		echo $e;
	}

}


?>
<title>Nigeria Property Link :: Add images</title>
<script type="text/javascript" src="scripts/jquery.form.js"></script>
<script type="text/javascript" src="scripts/upload_image.js"></script>
<link type="text/css" rel="stylesheet" href="style.css" />
<?php include('container.php');?>
<link type="text/css" rel="stylesheet" href="style.css" />
<div class="container">
	<h2>Upload Images for your property</h2>
	<br>
	<br>	
	<form method="post" name="image_upload_form" id="image_upload_form" enctype="multipart/form-data" action="upload_image.php">   
    <label>Choose Multiple Images to Upload</label>
	<br>
	<br>
    <input type="file" name="images[]" id="upload_files" multiple >
    <input type="hidden" name="l_id" value="<?php echo $last_id; ?>">
	<div class="image_uploading hidden">
        <label>&nbsp;</label>
        <img src="image_upload_status.gif" alt="Image Uploading......"/>
    </div>

	</form>
	<br>
	<div id="images_preview"></div>
	<br>	
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="../agents/Profile.php">Back to Dashboard</a>		
	</div>
</div>
<?php include('footer.php');?>
