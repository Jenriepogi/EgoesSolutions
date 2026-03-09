<?php
session_start();
if (($_SESSION['role'] ?? '') !== 'superadmin') {
    header('Location: ../auth/login.php');
    exit;
}
$name = $_SESSION['display_name'] ?? 'Super Admin';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Super Admin Employee Barcodes</title>
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
        <div class="me-2"><div class="eg-logo-box">E</div></div>
        <div>
          <div class="fw-bold eg-wordmark-top">E-GOES</div>
          <div class="text-uppercase eg-wordmark-bottom">Solutions</div>
        </div>
      </div>
      <div class="d-flex align-items-center me-3">
        <div class="me-2 fw-bold fs-5">SuperAdmin-<?= htmlspecialchars($name) ?></div>
        <div class="eg-avatar-circle"></div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <aside class="col-12 col-md-3 col-lg-2 eg-sidebar py-4">
          <nav class="nav flex-column gap-2">
            <a href="dashboard.php" class="eg-sidebar-link">Dashboard</a>
            <a href="offices.php" class="eg-sidebar-link">Offices</a>
            <a href="employees.php" class="eg-sidebar-link">Employee Accounts</a>
            <a href="payroll.php" class="eg-sidebar-link">Payroll</a>
            <a href="barcodes.php" class="eg-sidebar-link active">Employee Barcodes</a>
            <a href="attendance.php" class="eg-sidebar-link">Office Attendance</a>
            <a href="../auth/logout.php" class="eg-sidebar-link text-danger mt-3">Logout</a>
          </nav>
        </aside>

        <main class="col-12 col-md-9 col-lg-10 py-4">
          <h3 class="fw-bold mb-3">All Employee Barcodes</h3>
          <p class="text-muted">
            View and manage generated barcodes for each employee across all offices.
          </p>
          <div class="table-responsive bg-white rounded-3 shadow-sm p-3">
            <table class="table table-sm align-middle mb-0">
              <thead class="table-light">
                <tr>
                  <th>Employee ID</th>
                  <th>Name</th>
                  <th>Office</th>
                  <th>Barcode Code</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>001</td>
                  <td>Jane Bagonia</td>
                  <td>Office A</td>
                  <td>EGS-001-2026</td>
                </tr>
                <tr>
                  <td>002</td>
                  <td>Robert Cruz</td>
                  <td>Office B</td>
                  <td>EGS-002-2026</td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
