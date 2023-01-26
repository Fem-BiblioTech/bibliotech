<?php include("db.php")
?>

<?php include("applications/header.php")
?>

<?php 
$query = "SELECT * FROM books";
$result_books = mysqli_query ($conn, $query);

while ($row = mysqli_fetch_array ($result_books)) {
?>

<div class="card" style="width: 18rem;">
  <img src= <?php echo $row ['image']?> class="card-img-top">
  <div class="card-body">
    <h3 class="card-title"><?php echo $row ['title'] ?></h3>
    <h5 class="card-text"><?php echo $row ['author_name'] ?></h5>
  </div>
</div>
<?php } ?> 
<?php include("applications/footer.php")
?>  
