

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
      <h4 class="mb-4 fw-bold">Forgot Password</h4>
      <p class="text-secondary mb-4">Enter your registered email address and we'll send you instructions to reset your password.</p>

      <form action="index" method="POST">
        <div class="mb-3 text-start">
          <label class="form-label text-dark">Email Address</label>
          <input type="email" class="form-control bg-transparent text-dark border-secondary" placeholder="Enter email" required>
        </div>
        <button type="submit" class="btn btn-warning w-100 fw-bold">Reset Password</button>
      </form>

      <div class="mt-3">
        <a href="index" class="small">← Back to Login</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
