<?php include ("../db.php");

if(!isset($_POST['search'])){
    $_POST['search'] = "";
    $search = $_POST['search'];
}

$search= $_POST['search'];

$SQL_READ = "SELECT * FROM books WHERE author_name LIKE '%$".search."%' OR author_lastname LIKE '%$".search."%' OR isbn LIKE '%$".search."%'OR title LIKE '%$".search."%'";

$sql_query = mysqli_query($conn,$SQL_READ);
header ("Location:pages/second_page");

?>