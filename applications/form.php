<?phpinclude("../db.php")?>

<div class="container p-10"> 
    <div class="row"> 
      <div class="col-md-4"> 

            <?php if (isset($_SESSION['message'])){ ?>
            <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php session_unset(); } ?>

            <div class="card card-body"> 
            <form action="save_task.php" method="POST" enctype='multipart/form-data'>
            <div class="form-group">
            <input type="text" name="isbn" class= "form-control" placeholder="Agrega ISBN" autofocus></div>

            <div class="form-group">
            <input type="text" name="title" class= "form-control" placeholder="Agrega el título" autofocus></div>

            <div class="form-group">
            <input type="text" name="author_name" class= "form-control" placeholder="Agrega el nombre del autor" autofocus></div>

            <div class="form-group">
            <input type="text" name="author_lastname" class= "form-control" placeholder="Agrega el apellido del autor" autofocus></div>

            <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Agrega la descripción"></textarea>
            </div>

            <div class="form-group">
            <input type="file" name="image"></div>

            <input type="submit" class="btn btn-success btn-block" name="save_task" value="Guardar"> 
            </form>

        </div>
        <div class="col-md-8"> 
        
        </div>

     </div>

</div>

