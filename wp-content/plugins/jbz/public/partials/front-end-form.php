<?php 
global $wpdb;
$results = $wpdb->get_results("SELECT * FROM jbz_table");
//var_dump($results);

?>


<div class="container">
<!--Add New Button trigger modal -->
<button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#exampleModalCenter">
Add New
</button>

<!-- Form -->
<table id="table1" class="table table-striped table-dark">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  <?php
  foreach ($results as $key=>$print) {
    // echo " ?>
      <tr id="jbz-row-<?php echo $print->id ?>">
            <th scope='row'><?php echo $key; ?></th>
            <td id="preset_name-<?php echo $print->id;?>"><?php echo $print->name; ?></td>
            <td id="preset_email-<?php echo $print->id;?>"><?php echo $print->email; ?></td>
            <td>
              <button type='button' style='color:white' onclick='add_atr("<?php echo $print->name; ?>","<?php echo $print->email; ?>","<?php echo $print->id; ?>")' data-toggle="modal" data-target="#exampleModalCenter" class='btn btn-secondary btn-sm'>Update</button>
              <button type='button' onclick='form_f("<?php echo $print->id; ?>")' style='color:white' class='btn btn-secondary btn-sm'>DELETE</button>
            </td>
      </tr>
  <?php  // ";
  }

?>
    
      
      <td>
      <!-- <button type="button" class="btn btn-success">Read</button> -->
      
      </td>
    </tr>
    </tr>
  </tbody>
</table>
</dv>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Modal Body -->
      <div class="container">
        <div class="modal-body">
        <form  method="POST" id="model_form">
        <?php $nonce = wp_create_nonce( "wp1_nonce_nonce" ); ?>
              <div class="form-group">
                <label>Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" id="email"  class="form-control" name="email" placeholder="Enter Email">
                <input type="hidden" name="wp1_nonce" id="wp1_nonce_nonce" value="<?php echo $nonce; ?>">
                <input type="hidden" name="update_check" id="update_check" value="">
              </div>
              <button type="submit" name="insert" class="btn btn-primary">Submit</button>
              <button type="button" onclick='clear_data()' class="btn btn-secondary" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>

