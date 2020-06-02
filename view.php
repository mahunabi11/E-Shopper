<?php
include_once "apps/db.php";
  
 $sql = "SELECT * FROM shop";
 $data = $connection ->query($sql);

?>
<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Website by bootstrap</title>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />


</head>

<body>

  
       <?php
     
         if(isset($_GET['id'])){
             
             $id = $_GET['id'];
             
         }
          $sql = "SELECT * FROM shop WHERE id = '$id'";   
        $data = $connection -> query($sql);
        
      $single_data =  $data -> fetch_assoc();
   
    ?> 


    <!--  Product Part-->
    <div class="section">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 py-5 ">
                    <div class="view text-center">
                        <h3><?php echo $single_data['titel']; ?></h3>
                        <img style="width:480px; height:620px;" src="photos/<?php echo $single_data['photo'];?>" alt="">
                        <h4><span>Price=</span><?php echo $single_data['price']; ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
<!--  Product Part-->

















    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>

    </script>
</body>

</html>
