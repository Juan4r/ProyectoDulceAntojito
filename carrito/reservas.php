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
<style>
  body {
      background-color: #dec1c2;
      font-family: Arial;
    }
    .carrito-container {
      width: 400px;
      margin: auto;
      margin-top: 100px;
      background-color: #bf8e8e;
      border: 10px solid #573333;
      padding: 30px;
      border-radius: 5px;
      position: relative;
    }
    .logo-pasteleria {
      width: 60px;
      height: 60px;
      background-color: #eacccd;
      border-radius: 50%;
      position: absolute;
      top: -40px;
      left: calc(50% - 30px);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      font-weight: bold;
      color: #573333;
    }
    .producto-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 10px;
    }
    .producto-row input {
      width: 50px;
      text-align: center;
      background-color: #a76e6e;
      color: #fff;
      border: none;
    }
    .precio-box {
      background-color: #eacccd;
      padding: 5px 10px;
      border-radius: 5px;
      color: #573333;
    }
    .btn-remove {
      background-color: #b9a9a9;
      border-radius: 50%;
      width: 30px;
      height: 30px;
      font-weight: bold;
      color: white;
      border: none;
    }
    .total {
      background-color: #a76e6e;
      color: white;
      padding: 10px;
      border: none;
    }
    .formulario-reserva {
      display: none;
      margin-top: 20px;
      background-color: #eacccd;
      padding: 15px;
      border-radius: 10px;
    }
  </style>
</head>
<body>

<div class="carrito-container">
  <div class="logo-pasteleria"><img width="50px" src="../interfaz/img/logodulceantojito.png" alt=""></div>
  <h5 class="text-center mb-4 mt-3">CARRITO</h5>

  <div class="producto-row">
    <span><strong>Pay de Limón</strong></span>
    <input type="number" min="1" value="1" onchange="actualizarTotal()">
    <span class="precio-box">$30.00</span>
    <button class="btn-remove" onclick="eliminarProducto(this)">X</button>
  </div>

  <div class="producto-row">
    <span><strong>Flan Capuchino</strong></span>
    <input type="number" min="1" value="1" onchange="actualizarTotal()">
    <span class="precio-box">$150.00</span>
    <button class="btn-remove" onclick="eliminarProducto(this)">X</button>
  </div>


    <div class="producto-row">
    <span><strong>Inboljap</strong></span>
    <input type="number" min="1" value="1" onchange="actualizarTotal()">
    <span class="precio-box">$1.00</span>
    <button class="btn-remove" onclick="eliminarProducto(this)">X</button>
  </div>


  <!-- Agrega más productos aquí si deseas -->

  <div class="d-flex justify-content-between align-items-center mt-4">
    <button class="total">PRECIO TOTAL</button>
    <div class="precio-box" id="total">$180.00</div>
  </div>

  <button class="btn mt-3 w-100" style="background-color: #a76e6e; color: white;" onclick="mostrarFormulario()">RESERVAR</button>

  <!-- FORMULARIO RESERVA -->
  <div class="formulario-reserva" id="formReserva">
    <h6 class="text-center">Formulario de Reserva</h6>
    <input class="form-control mb-2" type="text" placeholder="Nombre completo">
    <input class="form-control mb-2" type="email" placeholder="Correo electrónico">
    <input class="form-control mb-2" type="tel" placeholder="Número de contacto">
    <textarea class="form-control mb-2" rows="3" placeholder="Detalles de tu pedido o reserva..."></textarea>
    <button class="btn btn-dark w-100">Enviar Reserva</button>
  </div>
</div>

</body>
<script src="../interfaz/funciones.js"></script>
</html>