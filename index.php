<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="interfaz/style.css">
    <link rel="icon" href="interfaz/img/logodulceantojito.png" type="image/png" />
 <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
    <title>Pasteleria Dulce Antojito</title>
</head>

<body>
<header>
    <?php include 'navbar.php'; ?>
</header>
<h1>HOLAAAAA ETO ES LO QUE CORREGI</h1>
<h1>HOLAAAAA ETO ES LO QUE CORREGI</h1>
<h1>HOLAAAAA ETO ES LO QUE CORREGI</h1>
    <!--carrusel-->
  <section class="carrusel">
      <div class="slide active">
        <img src="interfaz/img/torta1carrusel.jpg" alt="Torta 1" />
        <div class="texto-carrusel">
          <h2>NUESTROS<br /><strong>ESPECIALES</strong></h2>
          <p>Especiales para cualquier ocasión y disfrutar<br />con las personas que más quieres.</p>
          <button>Ver más</button>
        </div>
      </div>

      <div class="slide">
        <img src="interfaz/img/torta2carrusel.jpg" alt="Torta 2" />
        <div class="texto-carrusel">
          <h2>PASTELES<br /><strong>ARTESANALES</strong></h2>
          <p>Hechos a mano con ingredientes frescos<br />y decorados con amor pastelero.</p>
          <button>Explorar</button>
        </div>
      </div>

      <div class="slide">
        <img src="interfaz/img/torta3carrusel.jpg" alt="Torta 3" />
        <div class="texto-carrusel">
          <h2>CELEBRA<br /><strong>CON SABOR</strong></h2>
          <p>Haz tus celebraciones inolvidables<br />con nuestras dulces creaciones.</p>
          <button>Descubrir</button>
        </div>
      </div>

      <!-- Bolitas -->
      <div class="paginacion">
        <span class="punto-paginacion active" onclick="cambiarSlide(0)"></span>
        <span class="punto-paginacion" onclick="cambiarSlide(1)"></span>
        <span class="punto-paginacion" onclick="cambiarSlide(2)"></span>
      </div>
    </section>



    <!--lista de lo  mas comprado-- ---------------------------------------------------->

  <!-- Sección: Lo más comprado -->
  <section class="container py-5" id="lomascomprado">
    <h2 class="text-center fw-bold mb-4">LO MÁS COMPRADO</h2>
    <div class="row g-4">
      <!-- Producto 1 -->
      <div class="col-md-4 col-sm-6">
        <a href="producto1.html" class="text-decoration-none">
          <div class="card producto-card">
            <img src="interfaz/img/cupcakedezanahoria.jpg" class="card-img-top img-ajustada" alt="Cupcake de zanahoria">
            <div class="nombre-producto">Cupcake de zanahoria</div>
          </div>
        </a>
      </div>

      <!-- Producto 2 -->
      <div class="col-md-4 col-sm-6">
        <a href="producto2.html" class="text-decoration-none">
          <div class="card producto-card">
            <img src="interfaz/img/paydelimon.jpg" class="card-img-top img-ajustada" alt="Pay de limón">
            <div class="nombre-producto">Pay de limón</div>
          </div>
        </a>
      </div>

      <!-- Producto 3 -->
      <div class="col-md-4 col-sm-6">
        <a href="producto3.html" class="text-decoration-none">
          <div class="card producto-card">
            <img src="interfaz/img/flandevailla.jpg" class="card-img-top img-ajustada" alt="Flan de vainilla">
            <div class="nombre-producto">Flan de vainilla</div>
          </div>
        </a>
      </div>

      <!-- Producto 4 -->
      <div class="col-md-4 col-sm-6">
        <a href="producto4.html" class="text-decoration-none">
          <div class="card producto-card">
            <img src="interfaz/img/galletasdefresa.jpg" class="card-img-top img-ajustada" alt="Galletas de fresa">
            <div class="nombre-producto">Galletas de fresa</div>
          </div>
        </a>
      </div>

      <!-- Producto 5 -->
      <div class="col-md-4 col-sm-6">
        <a href="producto5.html" class="text-decoration-none">
          <div class="card producto-card">
            <img src="interfaz/img/gelatinas.jpg" class="card-img-top img-ajustada" alt="Gelatinas">
            <div class="nombre-producto">Gelatinas</div>
          </div>
        </a>
      </div>

      <!-- Producto 6 -->
      <div class="col-md-4 col-sm-6">
        <a href="producto6.html" class="text-decoration-none">
          <div class="card producto-card">
            <img src="interfaz/img/pastelimposible.jpg" class="card-img-top img-ajustada" alt="Pastel imposible">
            <div class="nombre-producto">Pastel imposible</div>
          </div>
        </a>
      </div>
    </div>

    <!-- Botón Ver más -->
  <div class="text-center mt-4">
    <button class="btn px-4" style="background-color: #bd8092; color: white;">
      Ver más
    </button>
  </div>

  <?php include 'footer.php'; ?>

</body>
<script src="interfaz/funciones.js"></script>
</html>