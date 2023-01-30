<?php include ("../db.php");

if(!isset($_POST['search'])){
    $_POST['search'] = "";
    $search = $_POST['search'];
}

$search= $_POST['search'];

$query = "SELECT * FROM books WHERE author_name LIKE '%$search%' OR author_lastname LIKE '%$search%' OR isbn LIKE '%$search%'OR title LIKE '%$search%'";

$result = mysqli_query($conn,$query);
if (!$result)  {
    die("query fallido");
   }

?>