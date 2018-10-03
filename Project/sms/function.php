<?php
	function view_user_messages(){
			include("inc/db.php");
			$fetch_user=$con->prepare("select * from profile");
					$fetch_user->setFetchMode(PDO::FETCH_ASSOC);
					$fetch_user->execute();
					$i=1;
					while($row=$fetch_user->fetch()) :
						
						echo "
						<tr>
                        <td>".$i++."</td>
                        <td>".$row['sa_name']."</td>
                        <td>".$row['sa_email']."</td>
                        <td>".$row['sa_phone']."</td>
                        <td>".$row['sa_password']."</td>
						<td>".$row['sa_gender']."</td>
						<td>".$row['sa_credit']."</td>
                        <td>".$row['sa_address']."</td>
						
                       
                        
						<td><a href='edit-user.php?edit_user=".$row['sa_id']."'>Edit </a></td>
                        <td><a href='delete-detail.php?delete_user=".$row['sa_id']."'>Delete</a></td>
                      </tr>
						";
					endwhile;
		}
		

?>