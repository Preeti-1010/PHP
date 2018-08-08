
<div class="container">
    <?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default ">
                <div class="panel-heading">Your Data <a href=" " class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">ID</th>
                            <th width="15%">Name</th>
                            <th width="20%">Email</th>
                            <th width="25%">Password</th>
                            <th width="10%">Age</th>
                            <th width="12%">Mobile_No.</th>
                            <th width="8%">Option</th>
                            <th width="8%">Profile</th>
                           
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php $i=1; if(!empty($posts)): foreach($posts as $post): ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $post['name']; ?></td>
                            <td><?php echo $post['email']; ?></td>
                            <td><?php echo $post['pass']; ?></td>
                            <td><?php echo $post['age']; ?></td>
                            <td><?php echo $post['mobile_no']; ?></td>
                            <td><?php echo $post['opt']; ?></td>
                            <td><img src="<?php echo base_url('./uploads/'. $post['image']);?>" height="100px" width="100px" /></td>
                            <td>
                            <?php
                             
                            ?>
                               
                                <a href="<?php echo site_url('user/edit/'.urlencode($post['id'])) ?>" class="glyphicon glyphicon-edit"></a>
                                 <a href="<?php echo site_url('user/delete/'.urlencode($post['id'])); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete?')"></a>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="4">Post(s) not found......</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

 <ul class="pagination pull-right">
    <?php echo $this->pagination->create_links(); ?>
</ul> 

