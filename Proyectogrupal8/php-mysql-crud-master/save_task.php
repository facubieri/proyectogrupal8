<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $curso = $_POST['curso'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $query = "INSERT INTO task('','$curso','','$nombre','$apellido', '$email') VALUES ('','$curso','','$nombre','$apellido', '$email')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');

}

?>
