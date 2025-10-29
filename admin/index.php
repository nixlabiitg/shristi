<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shristi International Society</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="bg-dark text-dark d-flex align-items-center justify-content-center" style="min-height: 100vh;">

  <div class="card shadow-lg border-0" style="max-width: 400px; width: 100%; background-color: #a4bee0ff;">
    <div class="card-body text-center p-4">
      <img src="assets/img/logo/logo-dark.png" alt="Shristi Logo" class="mb-3" style="max-height: 80px;">
      <h4 class="mb-4 fw-bold">Admin Login</h4>

      <form action="system/index" method="POST">
        <div class="mb-3 text-start">
          <label class="form-label text-dark">Email Address</label>
          <input type="email" class="form-control bg-transparent text-dark border-secondary" placeholder="Enter email">
        </div>
        <div class="mb-3 text-start">
          <label class="form-label text-dark">Password</label>
          <input type="password" class="form-control bg-transparent text-dark border-secondary" placeholder="Enter password">
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label text-dark" for="rememberMe">Remember Me</label>
          </div>
          <a href="forgot-password" class="small">Forgot Password?</a>
        </div>

        <button type="submit" class="btn btn-warning w-100 fw-bold">Login</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
