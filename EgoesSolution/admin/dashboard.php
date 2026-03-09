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
    <title>Admin Dashboard - Attendance & Payroll</title>
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
        <div class="me-2 fw-bold fs-4">
          Hi <?= htmlspecialchars($name) ?>!
        </div>
        <div class="eg-avatar-circle"></div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <!-- Sidebar -->
        <aside class="col-12 col-md-3 col-lg-2 eg-sidebar py-4">
          <nav class="nav flex-column gap-2">
            <a href="dashboard.php" class="eg-sidebar-link active">Dashboard</a>
            <a href="scan.php" class="eg-sidebar-link">Scanning</a>
            <a href="employees.php" class="eg-sidebar-link">Employees</a>
            <a href="../auth/logout.php" class="eg-sidebar-link text-danger mt-3"
              >Logout</a
            >
          </nav>
        </aside>

        <!-- Main Content -->
        <main class="col-12 col-md-9 col-lg-10 py-4">
          <h3 class="mb-3 fw-bold">Admin Dashboard</h3>
          <p class="text-muted mb-4">
            Overview of your office dashboard and employee activity.
          </p>

          <div class="row g-3 mb-4">
            <div class="col-md-3">
              <div class="eg-metric-card">
                <div class="text-muted small">Total Employees</div>
                <div class="fw-bold fs-3">96</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="eg-metric-card">
                <div class="text-muted small">Today Present</div>
                <div class="fw-bold fs-3 text-success">88</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="eg-metric-card">
                <div class="text-muted small">Attendance Scans Today</div>
                <div class="fw-bold fs-3 text-warning">76</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="eg-metric-card">
                <div class="text-muted small">Late Arrivals</div>
                <div class="fw-bold fs-5 text-danger">4</div>
              </div>
            </div>
          </div>

          <div class="eg-panel">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="mb-0">Recent Scanning Activity</h5>
              <a href="scan.php" class="small text-decoration-none"
                >Open scanner</a
              >
            </div>
            <div class="table-responsive">
              <table class="table table-sm align-middle mb-0">
                <thead class="table-light">
                  <tr>
                    <th>Employee</th>
                    <th>Date</th>
                    <th>Time In</th>
                    <th>Time Out</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Jane Bagonia</td>
                    <td>Mar 4, 2026</td>
                    <td>08:00 AM</td>
                    <td>05:00 PM</td>
                    <td><span class="badge bg-success">Present</span></td>
                  </tr>
                  <tr>
                    <td>Robert Cruz</td>
                    <td>Mar 4, 2026</td>
                    <td>08:15 AM</td>
                    <td>05:10 PM</td>
                    <td><span class="badge bg-success">Present</span></td>
                  </tr>
                  <tr>
                    <td>David Dela Cruz</td>
                    <td>Mar 4, 2026</td>
                    <td>—</td>
                    <td>—</td>
                    <td><span class="badge bg-danger">Absent</span></td>
                  </tr>
                </tbody>
              </table>
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


