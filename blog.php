<?php include('header.php');
require('connection.php');
$per_page = 10;
$q_count = "SELECT COUNT(*) as count FROM posts";

$res_count = mysqli_query($conn, $q_count);
$fetch = mysqli_fetch_array($res_count);
$total = $fetch['count'];
$total_page = ceil($total / $per_page);
if (!isset($_GET['page'])) {
    $current_page = 1;
} else {
    $current_page = $_GET['page'];
}
$offset = ($current_page - 1) * 10;
$q_select_post = "SELECT * FROM posts ORDER BY id DESC LIMIT $per_page OFFSET $offset";
$res = mysqli_query($conn, $q_select_post);
?>

<div class="container my-5 pt-5">
    <div class="row">
        <?php while ($item = mysqli_fetch_assoc($res)) : ?>

            <div class="col-lg-3 my-3">
                <div class="card h-100">
                    <a href="singlePost.php?id=<?= $item['id'] ?>" target="_blank">
                        <img src="assets/img/boy.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-truncate"><?= $item['title'] ?></h5>
                        <p class="card-text"><?= substr($item['body'], 0, 30) ?>...</p>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
        <div class="col-12">
            <nav class="w-100">
                <ul class="pagination justify-content-center flex-wrap" id="paginationUl">
                    <li class="page-item <?= $current_page == 1 ? 'disabled' : '' ?>"><a class="page-link" href="blog.php?page=<?= $current_page == 1 ? 1 : $current_page - 1 ?>">Previous</a></li>
                    <?php for ($i = 1; $i <= $total_page; $i++) { ?>
                        <li class="page-item <?= $i == $current_page ? 'active' : '' ?>"><a class="page-link" href="blog.php?page=<?= $i; ?>">
                                <?php echo $i; ?>
                            </a></li>
                    <?php } ?>
                    <li class="page-item <?= $current_page == $total_page ? 'disabled' : '' ?>"><a class="page-link" href="blog.php?page=<?= $current_page + 1 ?>">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>








<?php include('footer.php'); ?>


/* insert post data to database-start */

<!-- $file=file_get_contents('data.json');
$json=json_decode($file,true);
require_once('connection.php');
foreach($json as $item){
$q_insert_post="INSERT INTO
   posts(user_id,title,body)VALUES('".$item["userId"]."','".$item["title"]."','".$item["body"]."')";
mysqli_multi_query($conn,$q_insert_post);
} -->
/*insert post data to database-end */