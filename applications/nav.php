<nav> 
    <nav class= "navbar navbar-dark bg-dark">
        <div class="container">
            <a href="/bibliotech/index.php" class="navbar-brand">BiblioTech </a>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Agregar Libro
                        </button>
                    </li>
                </ul>
           
            <form action="/bibliotech/pages/second_page.php" method="POST" class="d-flex" role="search">
                <input class="form-control me-2" type="search" name= "search" placeholder="Buscar por nombre de autor o por título" aria-label="Search">
                <button class="btn btn-outline-success" value="search" type="submit">Search</button>
            </form>
        </div>
</nav>
<div class= "bannerContainer">
    <img src="assets\project_img\fondo_header.jpg" alt="">
    <h2 class= "styleNav">AÑADE Y ORGANIZA </br> TUS LIBROS</h2>
</div>