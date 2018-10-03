

<?php

    if(empty($_SESSION['sa_name'])){
        echo "<script>window.open('index.php','_self')</script>";
    }
	
	$sa_name=$_SESSION['sa_name'];


?>

 <?php
		include("inc/db.php");
			$data=$con->prepare("select * from profile where sa_name='$sa_name' ");
			$data->setFetchMode(PDO::FETCH_ASSOC);
			$data->execute();
            $row3=$data->fetch();
?>



   	<div class="inner1000">
    	<div class="user" title="Last Login : 03 Nov 2017 07:59:50 PM
Last Login IP : 122.161.173.20">
<a href="#" class="white" style="text-decoration:none">Hello <?php echo $row3['sa_name'] ?></a></div>
        <ul>
        	<li><a href="welcome.php"><img src="icon/home.png" border="0"></a></li>
        	<li><a href="#">NDNC</a></li>
            <li><a href="#">Products</a></li>
           <!-- <li><a href="#">Developers API</a></li> -->
            <li><a href="#">Support</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <div class="clear"></div>
</div>