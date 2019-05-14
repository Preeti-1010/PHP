<?php include('header.php'); ?>

<?php include 'db.php';
    
    $id = $_GET['id'];

    $sql =  "SELECT  * FROM plans where plan_id ='".$id."'";
    $result =  mysqli_query($db,$sql);
     $array = array();

    // look through query
    while($row = $result->fetch_assoc()){
        $array[] = $row;
    }   

    $i =1;
    foreach ($array as $key => $value) {
        
   }



   ?>
    

                        <div class="outer-w3-agile col-xl mt-3">
                            <h4 class="tittle-w3-agileits mb-4">Plans</h4>
                            <form action="" method="post">

                                 <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo $value['p_id'] ?>" disabled="disabled"> 
                                </div>
                                <div class="form-group">
                                    <label for="name">Plan Name</label>
                                    <input type="text" class="form-control" id="name" name="plan" placeholder="" value="<?php echo $value['pkg_plan'] ?>" required=""> 
                                </div>
                                <div class="form-group">
                                    <label for="des">Description</label>
                                    <textarea id="des" name="des"><?php echo $value['description'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" name="price" value="<?php echo $value['price'] ?>" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                   <div class="row">
                                    <div>
                                        <button type="submit" class="btn btn-style my-2 my-sm-0" name="btnupdate" id="btnsave">Update</button></div>

                                       <div class="col-md-6">
                                        <button type="submit" class="btn btn-style my-2 my-sm-0"  name="btnreset" id="btnreset" >Reset</button></div>
                                   </div>
                               </div>
                                   </form>
                                </div>
                            
                      


            <?php 

                if (isset($_POST['btnupdate'])) {

                    $planname = $_POST['plan'];
                    $description = strip_tags($_POST['des']);
                    $price = $_POST['price'];


                    $updatedata = "UPDATE plans SET  pkg_plan = '".$planname."',description = '".$description."', price = '".$price."' WHERE plan_id = '".$id."' ";

                    $result =  mysqli_query($db,$updatedata);

                    if($result == TRUE){
                        
                        echo "<meta http-equiv='refresh' content='0'>";
                    }else{

                        echo "Error: " . $updatedata . "<br>" . $db->error;
                    }

                }


             ?>

           


<?php include('footer.php'); ?>