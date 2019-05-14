<?php include('header.php'); ?>

<div class="outer-w3-agile col-xl mt-3">
                            <h4 class="tittle-w3-agileits mb-4">Plans</h4>
                            <form action="#" method="post">

                                <div class="form-group">
                                    <label for="pkg">Package Name</label>
                                      <select class="form-control" id="package" name="package">
                                        <option value="101">SEO</option>
                                        <option value="102">SMO</option>
                                        <option value="103">SMM</option>
                                        <option value="104">PPC</option>
                                        <option value="105">All in one</option>
                                      </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="name">Plan Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="" required=""> 
                                </div>
                                <div class="form-group">
                                    <label for="des">Description</label>
                                    <textarea id="des" name="des"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" name="price" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                   <div class="row">
                                        <div class="col-md-6"><button id="btnadd" name="addplan" class='btn btn-style my-2 my-sm-0' type="submit">Save</button></div>
                                       <div class="col-md-6"><button type="submit" class="btn btn-style my-2 my-sm-0"  name="btnreset" id="btnreset" >Reset</button></div>
                                   </div>
                                </div>
                            </form>
                        </div>


                        <?php

                         include 'db.php';

                         if(isset($_POST['addplan'])){

                            $sql = "INSERT into plans (p_id, pkg_plan,description, price ) VALUES('".$_POST["package"]."',
                            '".$_POST["name"]."', '".strip_tags($_POST["des"])."','".$_POST["price"]."')";
                            
                            $result = mysqli_query($db,$sql);

                            if ($result == TRUE) {

                                echo'Your Data is Saved';
                            } else {
                                echo "Error: " . $sql . "<br>" . $db->error;
                            }
                        }
                        ?>
<?php include('footer.php'); ?>