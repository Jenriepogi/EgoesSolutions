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
    <title>Superadmin Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
  </head>
  <body class="bg-light">
    <header class="eg-topbar d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
        <div class="me-2">
          <div class="eg-logo-box">
            E
          </div>
        </div>
        <div>
          <div class="fw-bold eg-wordmark-top">
            E-GOES
          </div>
          <div class="text-uppercase eg-wordmark-bottom">
            Solutions
          </div>
        </div>
      </div>
      <div class="d-flex align-items-center me-3">
        <div class="me-2 fw-bold fs-4">Hi <?= htmlspecialchars($name) ?>!</div>
        <div class="eg-avatar-circle"></div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <aside class="col-12 col-md-3 col-lg-2 eg-sidebar eg-sidebar-superadmin py-4">
          <div class="eg-sidebar-brand px-3 mb-3">
            <span class="eg-sidebar-role">Superadmin</span>
          </div>
          <nav class="nav flex-column gap-1">
            <a href="dashboard.php" class="eg-sidebar-link active">
              <i class="bi bi-grid-1x2"></i>
              <span>Dashboard</span>
            </a>
            <a href="offices.php" class="eg-sidebar-link">
              <i class="bi bi-building"></i>
              <span>Offices</span>
            </a>
            <a href="employees.php" class="eg-sidebar-link">
              <i class="bi bi-person-badge"></i>
              <span>Employee Accounts</span>
            </a>
            <a href="payroll.php" class="eg-sidebar-link">
              <i class="bi bi-currency-dollar"></i>
              <span>Payroll</span>
            </a>
            <a href="barcodes.php" class="eg-sidebar-link">
              <i class="bi bi-upc-scan"></i>
              <span>Employee Barcodes</span>
            </a>
            <a href="attendance.php" class="eg-sidebar-link">
              <i class="bi bi-calendar-check"></i>
              <span>Office Attendance</span>
            </a>
            <a href="../auth/logout.php" class="eg-sidebar-link eg-sidebar-link-danger mt-3">
              <i class="bi bi-box-arrow-right"></i>
              <span>Logout</span>
            </a>
          </nav>
        </aside>

        <main class="col-12 col-md-9 col-lg-10 py-4">
          <h3 class="fw-bold">Super Admin Dashboard</h3>
          <p class="text-muted mb-4">
            Manage all offices, employee accounts, payroll, barcodes, and attendance records.
          </p>

          <div class="row g-3">
            <div class="col-md-3">
              <div class="eg-metric-card">
                <div class="text-muted small">Total Offices</div>
                <div class="fw-bold fs-4">5</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="eg-metric-card">
                <div class="text-muted small">Employee Accounts</div>
                <div class="fw-bold fs-4">96</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="eg-metric-card">
                <div class="text-muted small">Payroll Batch Status</div>
                <div class="fw-bold fs-5 text-warning">In Progress</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="eg-metric-card">
                <div class="text-muted small">Attendance Logs Today</div>
                <div class="fw-bold fs-4">88</div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


