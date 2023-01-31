<?php include("../applications/header.php"); include  ("../applications/read.php"); include ("../applications/nav.php"); 


?>

<?php 

while ($row= mysqli_fetch_array($result)){?>

<div class="card mb-3 shadow" style="max-width: 50%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src= "../<?php echo $row ["image"]?>" class="card-img-top rounded-start" alt="Portada libro <?php echo $row ["title"] ?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title"><?php echo $row ["title"] ?></h3>
        <h5 class="card-text"><?php echo $row ["author_name"]. ' ' . $row['author_lastname'] ?></h5>
        <p class="card-text"><?php echo $row ["isbn"] ?></p>
        <p class="card-text"><?php echo $row ["description"] ?></p>

        <a href = "../applications/edit_book.php?isbn= <?php echo $row['isbn'] ?>" class="btn btn-secondary"> 
        Editar
        </a>
       <a href = "../applications/delete_book.php?isbn=<?= $row['isbn']?>" class="btn btn-danger">
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