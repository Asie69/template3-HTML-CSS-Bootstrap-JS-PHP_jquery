<?php include('header.php');
require('connection.php');
$user_id = $_SESSION['id_user'];
if (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {
  $q_select_user = "SELECT * FROM users where id= '$user_id'";
} else {
  $q_select_user = "SELECT * FROM users";
}
$result = mysqli_query($conn, $q_select_user);

?>

<div class="container mt-5 pt-5">
  <div class="row">
    <div class="col-12">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">email</th>
              <th scope="col">phone number</th>
              <th scope="col">profile</th>
              <th scope="col">register date</th>
              <th scope="col">role</th>
              <th scope="col">action</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($item = mysqli_fetch_assoc($result)) : ?>
              <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['email'] ?></td>
                <td><?= $item['phoneNumber'] ?></td>
                <td>
                  <img src="<?= $item['image_profile'] ?>" width="100" height="100" class="rounded-circle">
                </td>
                <td class="reg-date-user"><?= $item['reg_date'] ?></td>
                <td><?= $item['role'] ?></td>
                <td>
                  <button class="btn btn-danger" onclick="removeItemUser(<?= $item['id'] ?>,event)">delete</button>
                  <a class="btn btn-success" href="edit-user.php?id=<?= $item['id'] ?>">edit</a>
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

<?php
mysqli_close($conn);
include('footer.php'); ?>