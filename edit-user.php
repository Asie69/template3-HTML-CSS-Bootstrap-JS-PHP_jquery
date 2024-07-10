<?php include('header.php'); 
require('connection.php');
$user_id=$_GET['id'];
$q_select_user= "SELECT * FROM users where id= '$user_id'";
$res=mysqli_query($conn,$q_select_user);
$res_user=mysqli_fetch_assoc($res);
?>
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            
            



           
                <label class="form-label" for="userName">نام کاربری</label>
                <input class="form-control" type="text" name="username" id="userName"
                value="<?= $res_user['username'] ?>">
                

                <label class="form-label" for="Email">ایمیل</label>
                <input class="form-control" type="email" name="email" id="Email"
                value="<?= $res_user['email'] ?>">
                

                <label class="form-label" for="phoneNumber">شماره تلفن</label>
                <input class="form-control" type="number" name="phonenumber" id="phoneNumber"
                value="<?= $res_user['phoneNumber'] ?>">
                

                <label class="form-label">عکس پروفایل</label>
                <img src="<?= $res_user['image_profile'] ?>" width="100" height="100" class="my-3 rounded-circle" id="prev-img">
                <input onchange="previewImage()" class="form-control" type="file" name="profile" id="imgInput">
                <button onclick="editUser(<?= $user_id ?>)" class="btn btn-success my-5" type="button">ذخیره</button>
            
        </div>
    </div>
</div>
<?php include('footer.php'); ?>



