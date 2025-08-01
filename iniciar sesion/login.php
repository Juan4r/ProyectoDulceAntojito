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
   :root {
      --bg-color: #ffd5b2ff;
      --card-bg: #ffffff;
      --primary-color: #d95b84;
      --text-color: #333;
      --border-color: #ddd;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Quicksand', sans-serif;
    }

    body {
      background-color: var(--bg-color);
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 20px;
    }

    .login-container {
      width: 100%;
      max-width: 400px;
    }

    .login-card {
      background-color: #eb8dd3ff;
      border: 1px solid var(--border-color);
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
      padding: 30px 25px;
      text-align: center;
      animation: fadeIn 0.7s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .logo-container img {
      max-width: 120px;
      margin-bottom: 20px;
    }

    .icono-acceso {
      text-align: right;
      margin-bottom: 10px;
    }

    .icono-acceso .icono {
      font-size: 24px;
      color: var(--primary-color);
      text-decoration: none;
      transition: transform 0.3s ease;
    }

    .icono-acceso .icono:hover {
      transform: scale(1.2);
    }

    h2 {
      color: var(--text-color);
      margin-bottom: 20px;
    }

    .form-group {
      text-align: left;
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: var(--text-color);
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid var(--border-color);
      border-radius: 8px;
      font-size: 1rem;
    }

    .btn-login {
      width: 100%;
      padding: 12px;
      background-color: var(--primary-color);
      color: white;
      border: none;
      border-radius: 8px;
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s;
    }

    .btn-login:hover {
      background-color: #c94c75;
      transform: translateY(-2px);
    }

    .register-link {
      margin-top: 15px;
      font-size: 0.9rem;
    }

    .register-link a {
      color: var(--primary-color);
      text-decoration: none;
      font-weight: bold;
    }

    @media (max-width: 480px) {
      .login-card {
        padding: 25px 20px;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="login-card">
        
      <div class="logo-container">
        <img src="../interfaz/img/logodulceantojito.png" alt="Logo Pastelería" />
      </div>
      <h2>Iniciar Sesión</h2>
      <form action="login.php" method="POST">
        <div class="form-group">
          <label for="usuario">Usuario</label>
          <input type="text" id="usuario" name="usuario" required />
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" id="password" name="password" required />
        </div>
        <button type="submit" class="btn-login">Entrar</button>

        <!-- ENLACE PARA REGISTRARSE -->
        <p class="register-link">¿No tienes cuenta? <a href="register.php">Crear Cuenta</a></p>
      </form>
    </div>
  </div>
</body>
<script src="interfaz/funciones.js"></script>
</html>