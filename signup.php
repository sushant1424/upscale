<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="signup.css">
  <link rel="stylesheet" href="header.css">
  <title>Sign Up</title>
</head>
<body>
  <?php
  require_once "header.php";
  ?>
  <div class="main">
    <div class="container">
      <h1>Sign up for an account!</h1>
      <p class="login_link">or <a href="login.php">Sign in to your existing account</a></p>
      <form action="" method="post">
      <div class="txt-field">
        <input type="text" required>
        <span></span>
        <label for="username">Username</label>
      </div>
      <div class="txt-field">
        <input type="email" required>
        <span></span>
        <label for="email">Email</label>
      </div>
      <div class="txt-field">
        <input type="password" required>
        <span></span>
        <label for="password">Password</label>
      </div>
      <div class="txt-field">
        <input type="password" required>
        <span></span>
        <label for="confirm">Password Confirmation</label>
      </div>
      <p class="terms">By signing up, you agree to our terms of use.</p>
      <button>Sign Up</button>
    
      </form>
    </div>
  </div>
</body>
</html>