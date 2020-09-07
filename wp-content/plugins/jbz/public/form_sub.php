<?php 

add_action( "wp_ajax_sub_form_wp", "sub_form_wp12" );
add_action( "wp_ajax_nopriv_sub_form_wp", "sub_form_wp12" );

//Insert Function
function sub_form_wp12(){
  
    global $wpdb;
    $name = isset( $_POST['name'] ) ? $_POST['name'] : '' ;
    $email = isset( $_POST['email'] ) ? $_POST['email'] : '';
    $id = isset( $_POST['id']) ? $_POST['id'] : ''; //to check record already exists or not
    
   $table = 'jbz_table';
    
    $data = array(
                'name' => $name, 
                'email' => $email
              );
    $data1 = array('id' => $id);
    // $format = array('%s','%d');

    //Insert Query
    
    if(!$id){ //if record doesn't exist 
          $insert_id = $wpdb->insert( $table,$data );
          $insert_id = $wpdb->insert_id;
          $html_1 = '';
          $html_1 .= '<tr id="jbz-row-<?php echo $insert_id ?>">';
          $html_1 .= '<th scope="row"></th>';
          $html_1 .= '<td>'.$name.'</td>';
          $html_1 .= '<td>'.$email.'</td>';
          $html_1 .=  '<td>
                      <button type="button" style="color:white" class="btn btn-secondary btn-sm">Update</button>';
                      $html_1 .= '<button type="button" onclick="form_f("'.$insert_id.'")" style="color:white" class="btn btn-secondary btn-sm">DELETE</button>
                      </td>
                      </tr>';
        if($insert_id){
            $response = array('success' => 'yes', 'message' => 'You have successfuly inserted.', 'data_html' => $html_1);
          }
        else{
            $response = array('error' => 'yes', 'message' => 'data not inserted.');
          }
      }
      //Code for Update request
      if($id){
        $update_id = $wpdb->update($table, $data, $data1);
        if($update_id){
          $response = array('success' => 'yes', 'message' => 'You have successfuly inserted.');
        }
      else{
          $response = array('error' => 'yes', 'message' => 'data not inserted.');
        }
      }
    echo json_encode( $response );
    exit();

}

//Delete Query
add_action( "wp_ajax_del_data", "del_data" );
add_action( "wp_ajax_nopriv_del_data", "del_data" );

function del_data(){
  // print_r($_POST);
  global $wpdb;
  $table = 'jbz_table';
  $id = isset( $_POST[id]) ? $_POST[id] : '' ;
    
    $data = array(
                'id' => $id, 
              );
    $delete_id = $wpdb->delete( $table,$data);
    $response = array('success' => 'delete', 'message' => 'Data Deleted Successfully');

    if($delete_id)
    {
      $response = array('success' => 'delete', 'message' => 'Data Deleted Successfully');
    }
    else {
      $response = array('error' => 'delete', 'message' => 'Data not Deleted');
    }

    echo json_encode( $response );
    exit();
}