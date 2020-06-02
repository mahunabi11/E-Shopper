
<?php include_once "apps/db.php";?>
<?php include_once "apps/functions.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style2.css">
	
</head>
<body>
	
	<?php 
    
        if(isset($_POST['add'])){
            
            $titel = $_POST['titel'];
            $price = $_POST['price'];
            
            
          $data = fileUpload($_FILES['photo'], 'photos/', ['jpg', 'png']);  
          $photo = $data['file_name'];
         $sql = "INSERT INTO shop(titel, price, photo)VALUES('$titel', '$price', '$photo')";
         $connection -> query($sql);
              
           
        } 
        
    ?>
	
	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>The Way Shop</h2>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Titel</label>
						<input name="titel" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Price</label>
						<input name="price" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Photo</label>
						<input name="photo"  type="file">
					</div>
				
					<div class="form-group">
						<input name="add" class="btn btn-primary" type="submit" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	

	






	<!-- JS FILES  -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>