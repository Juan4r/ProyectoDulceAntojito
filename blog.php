<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="interfaz/blog.css">
    <link rel="icon" href="interfaz/img/logodulceantojito.png" type="image/png" />
 <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
    <title>Pasteleria Dulce Antojito</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="blog.php">BLOG DE DULCE ANTOJITO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="nosotros.php">Nosotros</a></li>
          <li class="nav-item"><a class="nav-link active" href="productos.php">Productos</a></li>
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Blog Section -->
  <section class="container mt-5">
    <h2 class="text-center mb-4">Últimas entradas del blog</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card">
          <img src="interfaz/img/cafe en grano.jpg" class="card-img-top" alt="Café en grano">
          <div class="card-body">
            <h5 class="card-title">El arte del café artesanal</h5>
            <p class="card-text">Descubre cómo preparamos nuestro café paso a paso, desde el grano hasta tu taza.</p>
            <a href="#" class="btn  btn-warning">Leer más</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="interfaz/img/pastel dulce.jpg" class="card-img-top" alt="Pastel dulce">
          <div class="card-body">
            <h5 class="card-title">Nuestros pasteles más vendidos</h5>
            <p class="card-text">Te contamos cuáles son las delicias que más aman nuestros clientes.</p>
            <a href="#" class="btn btn-warning">Leer más</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="interfaz/img/baristaspreparandocafe.jpg" class="card-img-top" alt="Barista preparando café">
          <div class="card-body">
            <h5 class="card-title">Conoce a nuestros baristas</h5>
            <p class="card-text">Ellos son quienes hacen magia detrás de la barra. ¡Te los presentamos!</p>
            <a href="#" class="btn  btn-warning">Leer más</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Opiniones Section -->
  <section class="container opinion-form">
    <h3 class="text-center mb-4">Deja tu Opinión</h3>
    <form>
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" required>
      </div>
      <div class="mb-3">
        <label for="correo" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="correo" required>
      </div>
      <div class="mb-3">
        <label for="mensaje" class="form-label">Tu opinión</label>
        <textarea class="form-control" id="mensaje" rows="4" required></textarea>
      </div>
      <div class="text-center">
        <button type="submit" class="btn  btn-warning">Enviar Opinión</button>
      </div>
    </form>
  </section>

  <?php include 'footer.php'; ?>
  <script src="https://kit.fontawesome.com/4f3b0b6e44.js" crossorigin="anonymous"></script>

</body>
<script src="interfaz/funciones.js"></script>
</html>