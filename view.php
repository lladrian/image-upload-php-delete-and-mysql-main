<?php 

include "db_conn.php"; 

?>
<!DOCTYPE html>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<html>
<head>
	<title>View</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
     <a href="index.php">&#8592;</a>
     	<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close-btn fas fa-times'></button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}

				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close-btn fas fa-times'></button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
     <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $stmt = $conn->query("SELECT * FROM images ORDER BY id DESC");
          if ($stmt->rowCount() > 0) {
          	while ($images = $stmt->fetch()) {  ?>
	             <div class="alb">
	             	<div style="position: relative;">
	             		<a class="close-btn fas fa-times" href="delete.php?url=<?=$images['image_url']?>" style="position: absolute; left: 180px; padding: 2px; font-size: 20px;"></a>
	             		<img src="uploads/<?=$images['image_url']?>">
	             	</div>
	             </div>	
    <?php } }?>

</body>
</html>