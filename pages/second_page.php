<?php include("../db.php")
?>

<?php include("../applications/header.php")
?>

<?php include ("../applications/read.php");

while ($row= mysqli_fetch_array($sql_query)){?>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src= <?php echo $row ["image"]?> class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title"><?php echo $row ["title"] ?></h3>
        <h5 class="card-text"><?php echo $row ["author_name"] ?></h5>
        <p class="card-text"><?php echo $row ["isbn"] ?></p>
        <p class="card-text"><?php echo $row ["description"] ?></p>
        <a href = "edit_book.php? id= <?php echo $row ["id"] ?>" class= "btn btn-secundary"> 
        Editar
        </a>
        <a href = "delete_book.php? id= <?php echo $row ["id"] ?>" class= "btn btn-secundary">
        Eliminar
        </a>

        
      </div>
    </div>
  </div>
</div>

<?php }
?>  

<?php include("../applications/footer.php")
?> 