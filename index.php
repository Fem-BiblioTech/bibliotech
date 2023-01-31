<?php include("db.php")
?>

<?php include("applications/header.php")
?>

<?php include("applications/nav.php");
include("applications/banner.php")
?>

<div class= "containerBook">
<?php 
$query = "SELECT * FROM books";
$result_books = mysqli_query ($conn, $query);

while ($row = mysqli_fetch_array ($result_books)) {
?>
<div class="card" style="width: 18rem;">

    <div>
      <a href="/bibliotech/applications/see_description.php?isbn=<?= $row['isbn']?>">
        <figure>
          <img src= <?php echo $row ['image']?> class="card-img-top">
          <div class="layer">
            <button  class="btn btn-light" type="submit" value="VER FICHA">VER FICHA</button>
          </div>
        </figure>
      </a>
    </div>


  <div class="card-body">
    <h3 class="card-title"><?php echo $row ['title'] ?></h3>
    <h5 class="card-text"><?php echo $row ['author_name'] . ' ' . $row['author_lastname'] ?></h5>
  </div>
</div>
<?php } ?>
</div> 

<?php include("applications/footer.php")
?>