<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="interfaz/productos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
     
<?php include 'navbar.php'; ?>

  <section class="container text-center my-5">
    <h2 class="mb-4 fw-bold text-uppercase text-dark">Productos</h2>
    <div class="row g-3 justify-content-center">
      
      <div class="col-6 col-md-3">
        <a href="productos/galletas.php" class="d-block p-4 bg-danger text-white fw-bold rounded text-decoration-none boton-producto">GALLETAS</a>
      </div>

      <div class="col-6 col-md-3">
        <a href="productos/pasteles.php" class="d-block p-4 bg-warning text-white fw-bold rounded text-decoration-none boton-producto">PASTELES</a>
      </div>

      <div class="col-6 col-md-3">
        <a href="productos/flanes.php" class="d-block p-4 bg-success text-white fw-bold rounded text-decoration-none boton-producto">FLANES</a>
      </div>

      <div class="col-6 col-md-3">
        <a href="productos/pays.php" class="d-block p-4 bg-primary text-white fw-bold rounded text-decoration-none boton-producto">PAYS</a>
      </div>

      <div class="col-6 col-md-3">
        <a href="productos/tartas.php" class="d-block p-4 bg-secondary text-white fw-bold rounded text-decoration-none boton-producto">TARTAS</a>
      </div>

    

    </div>
  </section>        


  <?php include 'footer.php'; ?>
</body>
</html>
  
  
 