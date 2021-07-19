<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="" name="curso" class="form-control" placeholder="Nivel del curso" autofocus required="">
          </div>
          <div class="form-group">
            <input type="text" name="DNI" class="form-control" placeholder="DNI" required="">
          </div>
          <div class="form-group">
          <input type="text" name="nombre" rows="2" class="form-control" placeholder="Nombre"required="" >
          </div>
          <div class="form-group">
          <input type="text" name="apellido" rows="2" class="form-control" placeholder="Apellido" required="">
          </div>
          <div class="form-group">
          <input type="text" name="email" rows="2" class="form-control" placeholder="E-mail" required="">
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Inscribirse">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Curso</th>
            <th>E-mail</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM task";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['curso']; ?></td>
            <td><?php echo $row['email']; ?></td>
            
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
