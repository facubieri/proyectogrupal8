<?php
include("db.php");
$curso = '';
$email= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM task WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $curso = $row['curso'];
    $email = $row['email'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $curso = $_POST['curso'];
  $email = $_POST['email'];

  $query = "UPDATE task set curso = '$curso', email = '$email' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="curso" type="text" class="form-control" value="<?php echo $curso; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <textarea name="email" class="form-control" cols="30" rows="10"><?php echo $email;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
