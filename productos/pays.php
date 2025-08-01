<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../interfaz/productos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
     
 <?php include'../navbar.php'; ?>

 <section class="container text-center my-5">
    <h2 class="mb-4 fw-bold text-uppercase text-dark">Productos</h2>
    <div class="row g-3 justify-content-center">
      
      <div class="col-6 col-md-3">
        <a href="galletas.php" class="d-block p-4 bg-danger text-white fw-bold rounded text-decoration-none boton-producto">GALLETAS</a>
      </div>

      <div class="col-6 col-md-3">
        <a href="pasteles.php" class="d-block p-4 bg-warning text-white fw-bold rounded text-decoration-none boton-producto">PASTELES</a>
      </div>

      <div class="col-6 col-md-3">
        <a href="flanes.php" class="d-block p-4 bg-success text-white fw-bold rounded text-decoration-none boton-producto">FLANES</a>
      </div>

      <div class="col-6 col-md-3">
        <a href="pays.php" class="d-block p-4 bg-primary text-white fw-bold rounded text-decoration-none boton-producto">PAYS</a>
      </div>

      <div class="col-6 col-md-3">
        <a href="tartas.php" class="d-block p-4 bg-secondary text-white fw-bold rounded text-decoration-none boton-producto">TARTAS</a>
      </div>


    </div>
  </section>        




<div class="container py-5">
  <h2 class="mb-5 fw-bold">PAYS</h2>

  <!-- Producto 1 -->
  <div class="producto">
    <img src="../interfaz/img/Pay de Limón Cremoso.jpg" alt="Pay de Limón Cremoso">
    <div class="producto-info">
      <h5>Pay de Limón Cremoso</h5>
      <p>Una base crujiente de galleta con un relleno cremoso y refrescante de limón natural, coronado con un merengue dorado flameado o crema batida. El equilibrio perfecto entre dulce y ácido que te hace cerrar los ojos al probarlo.</p>
      <p class="precio">50Bs <span class="text-muted">por Unidad</span></p>
      <label class="form-label">CANTIDAD:</label>
      <input type="number" class="form-control w-50 mb-2" value="1" min="1">
      <button class="btn bg-warning  btn-reservar" data-bs-toggle="modal" data-bs-target="#formReserva">
        RESERVAR 🛒
      </button>
    </div>
  </div>

  <!-- Producto 2 -->
  <div class="producto reverso">
    <img src="../interfaz/img/Pay de Manzana Estilo Casero.jpg" alt="Pay de Manzana Estilo Casero">
    <div class="producto-info">
      <h5>Pay de Manzana Estilo Casero</h5>
      <p>Relleno de manzanas caramelizadas con canela, envueltas en una masa dorada y crujiente al horno. Este clásico americano tiene ese sabor a hogar que conquista desde el primer bocado.</p>
      <p class="precio">$50<span class="text-muted">por pieza</span></p>
      <label class="form-label">CANTIDAD:</label>
      <input type="number" class="form-control w-50 mb-2" value="1" min="1">
      <button class="btn bg-warning  btn-reservar" data-bs-toggle="modal" data-bs-target="#formReserva">
  RESERVAR 🛒
</button>
    </div>
  </div>

  <!-- Producto 3 -->
  <div class="producto">
    <img src="../interfaz/img/Pay de Queso con Frutos Rojos.jpg" alt="Pay de Queso con Frutos Rojos">
    <div class="producto-info">
      <h5>Pay de Queso con Frutos Rojos</h5>
      <p>Un pay suave y cremoso de queso (cheesecake estilo horneado), sobre base de galleta de mantequilla, decorado con una brillante cobertura de frutos rojos naturales. Dulce, ácido, elegante y adictivo.</p>
      <p class="precio">80Bs <span class="text-muted">por pieza</span></p>
      <label class="form-label">CANTIDAD:</label>
      <input type="number" class="form-control w-50 mb-2" value="1" min="1">
      <button class="btn bg-warning  btn-reservar" data-bs-toggle="modal" data-bs-target="#formReserva">
        RESERVAR 🛒
      </button>
    </div>
  </div>
</div>

<!-- Modal Formulario Reserva -->
<div class="modal fade" id="formReserva" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content border-0 shadow">
      <div class="modal-header bg-light">
        <img src="interfaz/img/logodulceantojito.png" alt="Logo Dulce Antojito">
      </div>
      <div class="modal-body">
        <h5 class="text-center fw-bold mb-4">Formulario de Reserva - Pastelería Dulce Antojito</h5>
        <form id="reservaForm">
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label">Nombre completo</label>
              <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Teléfono</label>
              <input type="tel" class="form-control" name="telefono" required>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" name="correo" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Sabor</label>
            <select class="form-select" name="sabor" required>
              <option>Chocolate</option>
              <option>Vainilla</option>
              <option>Oreo</option>
            </select>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label">Cantidad</label>
              <input type="number" class="form-control" name="cantidad" min="1" required>
            </div>
            <div class="col-md-3">
              <label class="form-label">Fecha</label>
              <input type="date" class="form-control" name="fecha" required>
            </div>
            <div class="col-md-3">
              <label class="form-label">Hora</label>
              <input type="time" class="form-control" name="hora" required>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Mensaje adicional</label>
            <textarea class="form-control" name="mensaje" rows="2"></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Finalizar Reserva</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="reservaExitosa" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center p-4">
      <h5 class="fw-bold text-success">✅ ¡Reserva Exitosa!</h5>
      <p class="mb-2">Tu recibo ha sido descargado correctamente.</p>
      <p class="mb-3">Gracias por reservar con <strong>Dulce Antojito</strong> 🍰</p>
      <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cerrar</button>
    </div>
  </div>
</div>

  <?php include '../footer.php'; ?>
</body>
</html>
  
  
 