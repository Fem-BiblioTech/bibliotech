<?php
include("../db.php");
 if (isset($_GET['isbn'])) {
    $id = $_GET['isbn'];
     $query = "DELETE FROM books WHERE isbn=".$id."";
     $result = mysqli_query($conn, $query);
     header ("Location: /bibliotech/");
       }
    else 
        echo("Búsqueda fallida");

    $_SESSION['message'] = "Libro eliminado con éxito";
    $_SESSION['message_type'] = 'success';

?>