<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://jbz-plugin.com/plugin
 * @since      1.0.0
 *
 * @package    Jbz
 * @subpackage Jbz/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php 
      if(isset($_POST['insert']))
      {
         $enable=$_POST['enable'];

        $sql = update_option( 'jbz_enable', $enable);
        // var_dump($en);
        //var_dump($sql);
       

        // if($sql==true)
        // {
        //   echo "<script>alert('data inserted')</script>";
        // }
        // else 
        // echo "<script>alert('data not inserted')</script>";
      }
      
  ?>

<!-- Content -->
<div class="container">
  <form method="post">
    <br><br>
    <label for="show">Plugin</label>
      <select name="enable">
      <?php $en = get_option('jbz_enable'); 
        if($en == 'on')
        echo "<option value='on' selected >On</option> <option value='off'>off</option>";
        else
          echo "<option value='on'>On</option> <option value='off' selected>off</option> "
        ?>
        
      </select>
      <br><br>
    <label for="input">Value in DB:</label>
      <input type="text" name="text" value=" <?php echo $en ?>">
      <br><br>
      <button class="btn btn-success" type="submit" name="insert">Save</button>
       
  </form>


</div>

