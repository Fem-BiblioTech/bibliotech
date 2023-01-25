<?phpinclude("db.php")?>

<div class="container p-10"> 

    <div class="row"> 
        <div class="col-md-10"> 
        </div>
        <div class="card card-body"> 

        <form action="save_task.php" method="POST">

<div class="form-group">
<input type="text" name="ISBN" class= "form-control" placeholder="Agrega ISBN" autofocus></div>

<div class="form-group">
<input type="text" name="title" class= "form-control" placeholder="Agrega el título" autofocus></div>

<div class="form-group">
<input type="text" name="author-name" class= "form-control" placeholder="Agrega el nombre del autor" autofocus></div>

<div class="form-group">
<input type="text" name="author-lastName" class= "form-control" placeholder="Agrega el apellido del autor" autofocus></div>

<div class="form-group">
<textarea name="description" rows="2" class="form-control" placeholder="Agrega la descripción"></textarea>
</div>

<input type="submit" class="btn btn-success btn-block" name="save_task" value="Guardar"> 
</form>

        </div>
        <div class="col-md-8"> 
        </div>


        </div>

