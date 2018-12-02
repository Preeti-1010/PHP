
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <!-- Page content -->
    <div class="container-fluid mt--12">
      <div class="row">
        <div class="col-xl-12 order-xl-1" style="margin-top: 20px">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="<?php echo base_url(); ?>admin/addquestion" class="btn btn-sm btn-primary">Add Question</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="container-fluid">
                <div class = "card-header bg-white border-0">List of Questions</div><br>
                <?php 
                //echo "<pre>"; print_r($data['question']);die;?>

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Question</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($question as $value) {?>
                    <tr>
                      <td><?php echo $value->question_id; ?></td>
                      <td class="quesover"><?php echo $value->question; ?></td>
                      <td>
                        <div class="text-right">
                          <a href="<?php echo base_url(); ?>admin/editquestion/<?php echo $value->question_id;?>" class="btn btn-sm btn-primary">Edit</a>
                        </div>
                      </td>
                       <td>
                        <div class="text-right">
                          <a href="<?php echo base_url(); ?>admin/deletequestion/<?php echo $value->question_id;?>" class="btn btn-sm btn-primary">Delete</a>
                        </div>
                      </td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>   
    