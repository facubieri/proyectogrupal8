<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'miscursos',
) or die(mysqli_erro($mysqli));

?>
