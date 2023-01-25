<?php include("../db.php");


 if (isset($_POST['save_task']))
 {
   $isbn = $_POST['isbn'] ;
   $title = $_POST['title'] ;
   $author_name = $_POST['author_name'] ;
   $author_lastName = $_POST['author_lastname'] ;
   $description = $_POST['description'] ;
   $image = $_POST['image'] ;
   $query = "INSERT INTO Books (isbn,title,author_name,author_lastName,description,image) VALUES ('$isbn','$title','$author_name','$author_lastName','$description','$image')";
   $result = mysqli_query($conn, $query);
   if (!$result)  {
    die("query fallido");
   }
   $_SESSION['message'] = 'Libro agregado satisfactoriamente';
   $_SESSION['message_type'] = 'success';
   header ("Location:form.php");
  }
    