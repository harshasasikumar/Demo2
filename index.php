<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spotify Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <form>
      <label for="email" class="label">Email or username</label>
      <input type="text" id="email" name="email" placeholder="Email or username" class="input-field" required>

      <label for="password" class="label">Password</label>
      <div class="password-wrapper">
        <input type="password" id="password" name="password" placeholder="Password" class="input-field" required>
        <button type="button" class="password-toggle">
          <img src="https://upload.wikimedia.org/wikipedia/commons/e/e8/Visibility_eye.svg" alt="Toggle Visibility" class="icon">
        </button>
      </div>

      <button type="submit" class="login-btn">Log In</button>

      <a href="#" class="forgot-link">Forgot your password?</a>
      <p class="signup-text">
        Don't have an account? <a href="#" class="signup-link">Sign up for Spotify</a>
      </p>
    </form>
  </div>
</body>
</html>
