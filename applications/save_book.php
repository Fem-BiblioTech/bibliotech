<?php include("../db.php");

 if (isset($_POST['save_book']))
 {
   $isbn = $_POST['isbn'] ;
   $title = $_POST['title'] ;
   $author_name = $_POST['author_name'] ;
   $author_lastName = $_POST['author_lastname'] ;
   $description = $_POST['description'] ;
   $image_name = basename($_FILES['image']['name']);
   $image_file= $_FILES['image']['tmp_name'];
   
   $directory_route = '../assets/img/'. $image_name;
   $db_image_route = 'assets/img/'. $image_name;
   move_uploaded_file($image_file,$directory_route);

   
   $query = "INSERT INTO books (isbn, title, author_name, author_lastname, description, image) VALUES ('$isbn','$title','$author_name','$author_lastName','$description','$db_image_route')";
   $result = mysqli_query($conn, $query);
   if (!$result)  {
    echo("query fallido");
   }
   $_SESSION['message'] = 'Libro agregado sfactoriamatisente';
   $_SESSION['message_type'] = 'success';
   $_SESSION['message_title'] = 'Buen trabajo';
   header ("Location: /bibliotech");
  }
  