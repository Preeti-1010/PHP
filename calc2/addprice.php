<?php include('header.php'); ?>

<div class="outer-w3-agile col-xl mt-3">

   <?php $states[] = array(
    'AL'=>'Alabama',
    'AK'=>'Alaska',
    'AZ'=>'Arizona',
    'AR'=>'Arkansas',
    'CA'=>'California',
    'CO'=>'Colorado',
    'CT'=>'Connecticut',
    'DE'=>'Delaware',
    'DC'=>'District of Columbia',
    'FL'=>'Florida',
    'GA'=>'Georgia',
    'HI'=>'Hawaii',
    'ID'=>'Idaho',
    'IL'=>'Illinois',
    'IN'=>'Indiana',
    'IA'=>'Iowa',
    'KS'=>'Kansas',
    'KY'=>'Kentucky',
    'LA'=>'Louisiana',
    'ME'=>'Maine',
    'MD'=>'Maryland',
    'MA'=>'Massachusetts',
    'MI'=>'Michigan',
    'MN'=>'Minnesota',
    'MS'=>'Mississippi',
    'MO'=>'Missouri',
    'MT'=>'Montana',
    'NE'=>'Nebraska',
    'NV'=>'Nevada',
    'NH'=>'New Hampshire',
    'NJ'=>'New Jersey',
    'NM'=>'New Mexico',
    'NY'=>'New York',
    'NC'=>'North Carolina',
    'ND'=>'North Dakota',
    'OH'=>'Ohio',
    'OK'=>'Oklahoma',
    'OR'=>'Oregon',
    'PA'=>'Pennsylvania',
    'RI'=>'Rhode Island',
    'SC'=>'South Carolina',
    'SD'=>'South Dakota',
    'TN'=>'Tennessee',
    'TX'=>'Texas',
    'UT'=>'Utah',
    'VT'=>'Vermont',
    'VA'=>'Virginia',
    'WA'=>'Washington',
    'WV'=>'West Virginia',
    'WI'=>'Wisconsin',
    'WY'=>'Wyoming',
); 
     $res = json_encode($states);   
?>         
                            <h4 class="tittle-w3-agileits mb-4">Price List</h4>
                            <form action="" method="post">
                                
                                <div class="form-group">
                                    <label for="pkg">Package Name</label>
                                      <select class="form-control" id="package" name="package">
                                        <option value="101">SEO</option>
                                        <option value="102">SMO</option>
                                        <option value="103">SMM</option>
                                        <option value="104">PPC</option>
                                      </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Country Name</label>
                                      <select class="form-control" id="name" name="name">
                                     <option value=" <?php $res;  ?>">All Country</option>
                                      </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" name="price" placeholder="" required="">
                                </div>

                                  <div class="form-group">
                                    <label for="name">Plan Name</label>
                                     <select class="form-control" id="seoplan" name="seoplan">
                                        <option value="SEO Starter plan">SEO Starter plan</option>
                                        <option value="SEO Value Plan">SEO Value Plan</option>
                                        <option value="SEO Silver Plan">SEO Silver Plan</option>
                                        <option value="SEO Platinium Plan">SEO Platinium Plan</option>
                                        <option value="SEO Gold Plans">SEO Gold Plans</option>
                                      </select> 
                                       <select class="form-control" id="smoplan" name="smoplan">
                                        <option value="102">SMO Basic plan</option>
                                        <option value="102">SMO Plus plan</option>
                                        <option value="102">SMO Pro plan</option>
                                        <option value="102">SMO Silver plan</option>
                                        <option value="102">SMO Gold plan</option>
                                        <option value="102">SMO Platinum plan</option>
                                        <option value="102">SMO Titanium plan</option>
                                        <option value="102">SMO Enterprise plan</option>
                                      </select>
                                       <select class="form-control" id="smmplan" name="smmplan">
                                        <option value="103">SMM Starter Plan</option>
                                        <option value="103">SMM Value Plan</option>
                                        <option value="103">SMM Silver Plan</option>
                                        <option value="103">SMM Gold Plan</option>
                                      </select>
                                       <select class="form-control" id="ppcplan" name="ppcplan">
                                        <option value="104">PPC Starter plan</option>
                                        <option value="104">PPC Growth Plan</option>
                                      </select>
                                </div>
                                <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-6">
                                        <button type="submit" class="btn btn-style my-2 my-sm-0" name="btnsave" id="btnsave">Save</button></div>

                                       <div class="col-md-6">
                                        <button type="submit" class="btn btn-style my-2 my-sm-0"  name="btnreset" id="btnreset" >Reset</button></div>
                                   </div>
                                </div>
                            </form>
                        </div>

                <?php

                 include 'db.php';
                   

                 if(isset($_POST['btnsave'])){

                    if ($_POST['seoplan'] == 101) {
                        $planname = $_POST['seoplan'];
                    }else if ($_POST['smoplan'] == 102) {
                       $planname = $_POST['smoplan'];
                    }else if ($_POST['smmplan'] == 103) {
                        $planname = $_POST['smmplan'];
                    }else if ($_POST['ppcplan'] == 104) {
                        $planname = $_POST['ppcplan'];
                    }

                    $sql = "INSERT into state (plan_id, country_name, price, plan_name) VALUES(
                    '".$_POST["package"]."','".$_POST["name"]."','".$_POST["price"]."','".$planname."')";
                    
                    $result = mysqli_query($db,$sql);

                    if ($result == TRUE) {

                        echo'Your Data is Saved';
                    } else {
                        echo "Error: " . $sql . "<br>" . $db->error;
                    }
                }
                ?>


<?php include('footer.php'); ?>

<script>
    
    $(function() {
    $('#seoplan').show();
    $('#smoplan').hide();
    $('#smmplan').hide();
    $('#ppcplan').hide();

    $('#package').change(function() {
        if ($(this).val()){
            $('#smoplan').show();
            $('#seoplan').hide();
            $('#smmplan').hide();
            $('#ppcplan').hide();
        }else  if ($(this).val()){
            $('#smmplan').show();
            $('#seoplan').hide();
            $('#smoplan').hide();
            $('#ppcplan').hide();
        }else if ($(this).val()){
             $('#ppcplan').show();
            $('#seoplan').hide();
            $('#smoplan').hide();
            $('#smmplan').hide();
        }
    });
});
</script>