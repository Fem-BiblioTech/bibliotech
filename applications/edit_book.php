<?php 
// include("../db.php");

$id = $_POST ['isbn'];
$query = "SELECT * FROM books WHERE isbn = $id";
$result = mysqli_query($conn, $query);
// if (mysqli_num_rows($result) == 1) {
//     echo ('Puedes editar el libro');
//  }
if (isset($_POST['update'])) {
    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $author_name = $_POST['author_name'];
    $author_lastName = $_POST['author_lastname'];
    $description = $_POST['description'];
    $image_name = basename($_FILES['image']['name']);
    $image_file = $_FILES['image']['tmp_name'];
    $query = "UPDATE books set title = '$title', author_name = '$author_name', author_lastname = ' $author_lastName', description = '$description', image = '$image_file' WHERE isbn = $isbn";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Libro actualizado con éxito';
    $_SESSION['message_type'] = 'warning';
    header("Location: second_page.php");
}
?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="applications/save_book.php">
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" name="title" id="title" class="form-control"
                            placeholder="Actualiza el título" autofocus value="<?php echo $title; ?>" </div>
                        <div class="form-group">
                            <label for="author_name">Nombre autor</label>
                            <input type="text" name="author_name" id="author_name" class="form-control"
                                placeholder="Actualiza el nombre" autofocus value="<?php echo $author_name; ?>" </div>
                            <div class="form-group">
                                <label for="author_lastName">Apellido autor</label>
                                <input type="text" name="author_lastname" id="author_lastName" class="form-control"
                                    placeholder="Actualiza el apellido" autofocus
                                    value="<?php echo $author_lastname; ?>" </div>
                                <div class="form-group">
                                    <label for="isbn">ISBN</label>
                                    <input type="text" name="isbn" id="isbn" class="form-control"
                                        placeholder="Actualiza ISBN" autofocus value="<?php echo $isbn; ?>" </div>

                                    <div class="form-group">
                                        <label for="description">Descripción</label>
                                        <textarea name="description" id="description" rows="2" class="form-control"
                                            placeholder="Actualiza una descripción" autofocus
                                            value="<?php echo $description; ?>"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Imagen</label>
                                        <input type="file" name="image" id="image">
                                    </div>

                                    <input type="submit" class="btn btn-success btn-block" name="update" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</div>