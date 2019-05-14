<?php include('header.php'); ?>

<?php include 'db.php';
    
    $id = $_GET['id'];

    $sql =  "SELECT  * FROM state where plan_id ='".$id."'";
    $result =  mysqli_query($db,$sql);
     $array = array();

    // look through query
    while($row = $result->fetch_assoc()){
        $array[] = $row;
    }   
    
  
   ?>
    

        <div class="outer-w3-agile col-xl mt-3">
                            <h4 class="tittle-w3-agileits mb-4">Plans</h4>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="name">Country Name</label>
                                    <select class="form-control" id="name" name="name" disabled="">
                                     <option value="">All Country</option>
                                  </select>
                                </div>

                                 <div class="form-group">
                                    <label for="pkg">Package Name</label>
                                    <?php  foreach ($array as $key => $fdata) {
                                      if ($fdata['plan_name'] == 101;) {
                                          $p =   $fdata['price'];
                                      }
                                          $p =   $fdata['price'];
                                       } ?>
                                      <select class="form-control" id="package" name="package">
                                        <option value="101">SEO</option>
                                        <option value="102">SMO</option>
                                        <option value="103">SMM</option>
                                        <option value="104">PPC</option>
                                        <option value="105">All in one</option>
                                      </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <?php  foreach ($array as $key => $fdata) {
                                          $p =   $fdata['price'];
                                       } ?>
                                    <input type="text" class="form-control" id="price" name="price" value="<?php echo $p ;?>">
                                   
                                    
                                </div>
                                <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-6"><button id="btnprice" name="btnprice" class='btn btn-style my-2 my-sm-0' type="submit">Update</button></div>
                                       <div class="col-md-6"><button class='btn btn-style my-2 my-sm-0' id="btnreset" name="btnreset" type="submit">Reset</button></div>
                                   </div>
                                </div>
                            </form>
                        </div>

                          <?php 

                if (isset($_POST['btnprice'])) {

                    $countryname = $_POST['name'];
                     $pkgname = $_POST['package'];

                    if ( $fdata['p_id'] == '101') {
                        $price = $_POST['seoprice'];
                    }else if($fdata['p_id'] == '102'){
                        $price = $_POST['smoprice'];
                    }else if($fdata['p_id'] == '103'){
                        $price = $_POST['smmprice'];
                    }else if($fdata['p_id'] == '104'){
                        $price = $_POST['ppcprice'];
                    }

                    $updatedata = "UPDATE states SET  p_id = '".$pkgname."',abbr = '".$countryname."', price = '".$price."' WHERE p_id = '".$id."' ";

                    $result =  mysqli_query($db,$updatedata);

                    if($result == TRUE){
                        
                        echo "<meta http-equiv='refresh' content='0'>";
                    }else{

                        echo "Error: " . $updatedata . "<br>" . $db->error;
                    }

                }


             ?>


<?php include('footer.php'); ?>