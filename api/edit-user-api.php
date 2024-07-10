<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = valid($_POST['username']);
    $email = valid($_POST['email']); 
    $phoneNumber = valid($_POST['phoneNumber']); 
    $user_id = $_POST['id'];
    $msg=array();
    $isUpload = true;
    

    if(isset($_FILES['image_profile'])){
        $dir ="../uploads/";
        $dir_db="uploads/";
        $target_file = $dir.basename($_FILES['image_profile']['name']);
        $target_file_db = $dir_db.basename($_FILES['image_profile']['name']);
        $type_file = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $checkImg = getimagesize($_FILES["image_profile"]["tmp_name"]);
    
        if($type_file !='jpg' && $type_file !='jpeg' && $type_file !='svg' && $type_file !='png'){
            $msg['result']="نوع فایل اشتباه است";
            $msg['status']=500;
            echo json_encode($msg);
            $isUpload = false;
            die;
    
        }
        if(!$checkImg){
            $msg['result']="فایل عکس نیست";
            $msg['status']=500;
            echo json_encode($msg);
            $isUpload = false;
            die;
        }
        if(file_exists($target_file)){
            $msg['result']="فایل قبلا آپلود شده است";
            $msg['status']=500;
            echo json_encode($msg);
            $isUpload = false;
            die;
        }
        if($_FILES['image_profile']['size']>500000){
            
            $msg['result']="حجم فایل بیشتر از حد مجاز است";
            $msg['status']=500;
            echo json_encode($msg);
            $isUpload = false;
            die;
        }
        if($isUpload){
            if(move_uploaded_file($_FILES['image_profile']['tmp_name'],$target_file)){
                require('../connection.php');
                $q_update_user="UPDATE users SET username='$username',email='$email',phoneNumber='$phoneNumber',image_profile='$target_file_db' where id='$user_id'";
               
                if(mysqli_query($conn,$q_update_user)){
                    $msg['result']="رکورد مورد نظر تغییر کرد";
                    $msg['status']=200;
                    mysqli_close($conn);
                    echo json_encode($msg);
    
                }else{
                    $msg['result']="خطای سروری رخ داده است";
                    $msg['status']=500;
                    mysqli_close($conn);
                    echo json_encode($msg);
                    
    
                }
                
            }else{
                $msg['result']="آپلود به مشکل خورده است";
                $msg['status']=500;
                mysqli_close($conn);
                echo json_encode($msg);
                
    
            }
        }
    }else{
        require('../connection.php');
                $q_update_user="UPDATE users SET username='$username',email='$email',phoneNumber='$phoneNumber' where id='$user_id'";
               
                if(mysqli_query($conn,$q_update_user)){
                    $msg['result']="رکورد مورد نظر تغییر کرد";
                    $msg['status']=200;
                    mysqli_close($conn);
                    echo json_encode($msg);
    
                }else{
                    $msg['result']="خطای سروری رخ داده است";
                    $msg['status']=500;
                    mysqli_close($conn);
                    echo json_encode($msg);
                }
    }

   
}



function valid($val){
    $val = trim($val);
    $val = stripslashes($val);
    $val = htmlspecialchars($val);
    return $val;
    
}