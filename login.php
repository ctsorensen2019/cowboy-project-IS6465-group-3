<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In | Cowboy Property Management</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header class="login-header">
    <i class="fa-solid fa-house-chimney"></i>
    <h1>Cowboy Property Management</h1>
  </header>

  <main class="login-body">
    <h2>Sign In</h2>

    <form action="index.php" method="post">
      <div class="login-field">
        <i class="fa-regular fa-user"></i>
        <input type="text" name="username" placeholder="Username" aria-label="Username">
      </div>

      <div class="login-field">
        <i class="fa-solid fa-lock"></i>
        <input type="password" name="password" placeholder="Password" aria-label="Password">
      </div>

      <button type="submit" class="btn btn-primary btn-block">Log In</button>
    </form>

    <a href="#" class="forgot">Forgot your password?</a>
  </main>
</body>
</html>
