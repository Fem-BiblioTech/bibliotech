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
            
            <!--boostrap modal openning-->
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                <div class="modal-body">
            

            <div class="card card-body"> 
            <form action="save_task.php" method="POST">
            
            <div class="form-group"><label for="title">Título</label>
            <input type="text" name="title" id="title" class= "form-control" placeholder="Agrega el título" autofocus></div>

            <div class="form-group"><label for="author_name">Nombre autor</label>
            <input type="text" name="author_name" id="author_name" class= "form-control" placeholder="Agrega el nombre" autofocus></div>

            <div class="form-group"><label for="author_lastName">Apellido autor</label>
            <input type="text" name="author_lastName" id="author_lastName" class= "form-control" placeholder="Agrega el apellido" autofocus></div>
            
            <div class="form-group"><label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn" class= "form-control" placeholder="Agrega ISBN" autofocus></div>

            <div class="form-group"><label for="description">Descripción</label>
            <textarea name="description" id="description" rows="2" class="form-control" placeholder="Agrega una descripción"></textarea>
            </div>

            <div class="form-group"><label for="image">Imagen</label>
            <input type="file" name="image" id="image"></div>

            <input type="submit" class="btn btn-success btn-block" name="save_task" value="Agregar registro"> 
            </form>

        </div>
        </div>


        <!--boostrap modal closing-->
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
        </div>
        </div>



        <div class="col-md-8"> 
        
        </div>

     </div>

</div>

