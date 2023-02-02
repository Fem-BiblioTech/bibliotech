<?php include("../applications/header.php"); include  ("../applications/read.php"); include ("../applications/nav.php"); 


?>

<?php if(isset($_SESSION['message'])) {
  $msg = $_SESSION['message'];
  $type = $_SESSION['message_type'];
  $title = $_SESSION['message_title'];?>
<script>
  Swal.fire({
    icon: '<?php echo $type; ?>',
    title: '<?php echo $title; ?>',
    text: '<?php echo $msg; ?>',
    confirmButtonColor: '#000000'
  })
</script>
<?php session_unset(); }?>

<?php 

while ($row= mysqli_fetch_array($result)){?>

<div class="card mb-3 shadow mx-auto verticalMargin" style="max-width: 60%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src= "../<?php echo $row ["image"]?>" class="card-img-top rounded-start" alt="Portada libro <?php echo $row ["title"] ?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title"><?php echo $row ["title"] ?></h3>
        <h5 class="card-text gray-text"><?php echo $row ["author_name"]. ' ' . $row['author_lastname'] ?></h5>
        <p class="card-text gray-text"><?php echo $row ["isbn"] ?></p>
        <p class="card-text"><?php echo $row ["description"] ?></p>

        <a href = "../applications/edit_book.php?isbn= <?php echo $row['isbn'] ?>" class="btn btn-secondary desktop-icons"> 
        Editar
        </a>
        <a href = "../applications/edit_book.php?isbn= <?php echo $row['isbn'] ?>" class="btn btn-secondary mobile-icons"> 
        <i class="fa-solid fa-pen-to-square"></i>
        </a>
        <a href = "../applications/delete_book.php?isbn=<?= $row['isbn']?>" class="btn btn-danger desktop-icons">
        Eliminar
           </a>
        <a href = "../applications/delete_book.php?isbn=<?= $row['isbn']?>" class="btn btn-danger mobile-icons">
        <i class="fa-solid fa-trash-can"></i>
           </a>
                  
      </div>
    </div>
  </div>
</div>

<?php }
?>  

<?php include("../applications/footer.php")
?> 