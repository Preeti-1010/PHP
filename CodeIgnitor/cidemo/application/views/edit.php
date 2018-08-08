<div class="container">
    <div class="col-xs-12">
    <?php 
        if(!empty($success_msg)){
            echo '<div class="alert alert-success">'.$success_msg.'</div>';
        }elseif(!empty($error_msg)){
            echo '<div class="alert alert-danger">'.$error_msg.'</div>';
        }
    ?>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading"><?php echo $action; ?> Data <a href="<?php echo site_url('user/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div> 
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php echo !empty($post['name'])?$post['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php echo !empty($post['email'])?$post['email']:''; ?>">
                            <?php echo form_error('email','<p class="text-danger">','</p>'); ?>
                        </div>
                         <div class="form-group">
                            <label for="Pass">Password</label>
                            <input type="password" name="pass" class="form-control" placeholder="Enter Password" value="<?php echo !empty($post['pass'])?$post['pass']:''; ?>">
                            <?php echo form_error('pass','<p class="text-danger">','</p>'); ?>
                        </div>
                         <div class="form-group">
                            <label for="Age">Age</label>
                            <input type="text" name="age" class="form-control" placeholder="Enter Age" value="<?php echo !empty($post['age'])?$post['age']:''; ?>">
                            <?php echo form_error('age','<p class="text-danger">','</p>'); ?>
                        </div>
                         <div class="form-group">
                            <label for="Mobile_NO">Mobile_No.</label>
                            <input type="number" name="mobile_no" class="form-control" placeholder="Enter Mobile-No." value="<?php echo !empty($post['mobile_no'])?$post['mobile_no']:''; ?>">
                            <?php echo form_error('mobile_no','<p class="text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Option">Option</label>
                            <input type="text" name="opt" class="form-control" placeholder="Enter Option" value="<?php echo !empty($post['opt'])?$post['opt']:''; ?>">
                            <?php echo form_error('opt','<p class="text-danger">','</p>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="pic">Profile</label>
                            <input class="form-control" type="file" name="picture"  value="<?php echo !empty($post['image'])?$post['image']:''; ?>">
                            <?php echo form_error('picture','<p class="text-danger">','</p>'); ?>
                        </div>

                        <input type="submit" name="postSubmit" class="btn btn-primary" value="Submit"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>