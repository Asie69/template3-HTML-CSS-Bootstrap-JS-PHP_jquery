<?php include('header.php'); 
require('connection.php');
$post_id=$_GET['id'];
$q_select_post="SELECT * FROM posts where id='$post_id'";
$res=mysqli_query($conn,$q_select_post);
$res_post=mysqli_fetch_assoc($res);

?>


<div class="container">
    <div class="row my-5 py-5">
    <div class="col-10 mx-auto">
    <div class="card border-0">
                    <img src="assets/img/boy.jpg" class="card-img-top" alt="..." width="" height="">
                    <div class="card-body">
                        <div class="w-100 d-flex justify-content-between">
                        <h5 class="card-title text-center"><?= $res_post['title'] ?></h5>
                        <span class="reg-date-post"><?= $res_post['post_date'] ?></span>
                        </div>
                        
                        <p class="card-text text-center"><?= $res_post['body'] ?></p>
                    </div>
                </div>
            </div>
    </div>
</div>


<?php include('footer.php'); ?>
