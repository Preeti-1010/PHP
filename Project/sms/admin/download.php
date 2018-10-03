

	<?php
		include("inc/db.php");
           
			$fetch_user=$con->prepare("select * from bulk_sms ");
			$fetch_user->setFetchMode(PDO::FETCH_ASSOC);
			$fetch_user->execute();
			$row=$fetch_user->fetch();
				
?>
 <?php
         $filename = $row['phone'];
         $file = fopen( $filename, "r" );
         
         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $filename );
         $filetext = fread( $file, $filesize );
         fclose( $file );
         
         echo ( "File size : $filesize bytes" );
         echo ( "<pre>$filetext</pre>" );
      ?>
      
?>