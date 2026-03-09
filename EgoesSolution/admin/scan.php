<?php
session_start();
if (($_SESSION['role'] ?? '') !== 'admin') {
    header('Location: ../auth/login.php');
    exit;
}
$name = $_SESSION['display_name'] ?? 'Admin';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Scanning</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../assets/css/style.css" />
  </head>
  <body class="bg-light">
    <header class="eg-topbar d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
        <div class="me-2">
          <div class="eg-logo-box">E</div>
        </div>
        <div>
          <div class="fw-bold eg-wordmark-top">E-GOES</div>
          <div class="text-uppercase eg-wordmark-bottom">Solutions</div>
        </div>
      </div>
      <div class="d-flex align-items-center me-3">
        <div class="me-2 fw-bold fs-5">Admin-<?= htmlspecialchars($name) ?></div>
        <div class="eg-avatar-circle"></div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <aside class="col-12 col-md-3 col-lg-2 eg-sidebar py-4">
          <nav class="nav flex-column gap-2">
            <a href="dashboard.php" class="eg-sidebar-link">Dashboard</a>
            <a href="scan.php" class="eg-sidebar-link active">Scanning</a>
            <a href="employees.php" class="eg-sidebar-link">Employees</a>
            <a href="../auth/logout.php" class="eg-sidebar-link text-danger mt-3">Logout</a>
          </nav>
        </aside>

        <main class="col-12 col-md-9 col-lg-10 py-4">
          <h3 class="mb-3 fw-bold">Attendance Scanning</h3>
          <p class="text-muted mb-4">
            Scan employee barcodes to record time in and time out.
          </p>

          <div class="eg-panel p-4">
            <div class="mb-3">
              <label for="barcode-input" class="form-label fw-semibold">Barcode Number</label>
              <input
                type="text"
                id="barcode-input"
                class="form-control"
                placeholder="Scan or type barcode ID"
                autocomplete="off"
              />
            </div>
            <button class="btn btn-primary">Submit Scan</button>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
