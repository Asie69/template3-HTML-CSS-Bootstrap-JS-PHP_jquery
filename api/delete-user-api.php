<?php
$result = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['id'];
    require('../connection.php');
    $q_delete_user = "DELETE FROM users where id='$user_id'";

    if (mysqli_query($conn, $q_delete_user)) {
        $result['status'] = 200;
        $result['msg'] = "record $user_id deleted";
        mysqli_close($conn);
        echo json_encode($result);
        
    } else {
        $result['status'] = 500;
        $result['msg'] = "record $user_id did not delete";
        mysqli_close($conn);
        echo json_encode($result);
        
    }
} else {
    $result['status'] = 500;
    $result['msg'] = "method must be post";
    mysqli_close($conn);
    echo json_encode($result);
    
}
