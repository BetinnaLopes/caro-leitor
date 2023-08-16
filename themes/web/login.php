<!DOCTYPE html>
<html>
<head>
  <title>Página de Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      margin-top: 100px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .container form input[type="text"],
    .container form input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }
    
    .container form input[type="submit"] {
      width: 100%;
      padding: 10px;
      border-radius: 3px;
      border: none;
      background-color: #4caf50;
      color: #fff;
      cursor: pointer;
    }
    
    .container form input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form action="login_process.php" method="POST">
      <input type="text" name="username" placeholder="Usuário" required>
      <input type="password" name="password" placeholder="Senha" required>
      <input type="submit" value="Entrar">
    </form>
  </div>
</body>
</html>
