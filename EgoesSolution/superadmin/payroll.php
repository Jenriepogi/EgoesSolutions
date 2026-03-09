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
    <title>Super Admin Payroll</title>
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
        <div class="me-2 fw-bold fs-5">
          Hi, SuperAdmin-<?= htmlspecialchars($name) ?>
        </div>
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
            <a href="payroll.php" class="eg-sidebar-link active">Payroll</a>
            <a href="barcodes.php" class="eg-sidebar-link">Employee Barcodes</a>
            <a href="attendance.php" class="eg-sidebar-link">Office Attendance</a>
            <a href="../auth/logout.php" class="eg-sidebar-link text-danger mt-3"
              >Logout</a
            >
          </nav>
        </aside>

        <main class="col-12 col-md-9 col-lg-10 py-4">
          <h3 class="mb-3 fw-bold">Payroll Generation</h3>
          <div class="eg-panel p-3 mb-3">
            <div class="row g-3 align-items-end">
              <div class="col-md-4">
                <label class="form-label">Payroll Period</label>
                <input type="text" class="form-control" value="Mar 1 - Mar 7, 2026" />
              </div>
              <div class="col-md-3">
                <label class="form-label">Office</label>
                <select class="form-select">
                  <option>All Offices</option>
                  <option>Office A</option>
                  <option>Office B</option>
                </select>
              </div>
              <div class="col-md-3 d-grid">
                <button class="btn btn-primary">Generate Payroll</button>
              </div>
            </div>
          </div>
          <div class="row mb-3 g-3">
            <div class="col-md-3">
              <div class="eg-metric-card">
                <div class="text-muted small">Total Employees</div>
                <div class="fw-bold fs-4">96</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="eg-metric-card">
                <div class="text-muted small">Weekly Gross Pay</div>
                <div class="fw-bold fs-4">₱100,000.00</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="eg-metric-card">
                <div class="text-muted small">Weekly Deductions</div>
                <div class="fw-bold fs-4">₱20,000.00</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="eg-metric-card">
                <div class="text-muted small">Net Pay</div>
                <div class="fw-bold fs-4">₱80,000.00</div>
              </div>
            </div>
          </div>

          <div class="table-responsive bg-white rounded-3 shadow-sm p-3">
            <table class="table table-bordered table-sm align-middle mb-0">
              <thead class="table-light">
                <tr>
                  <th>EMP ID</th>
                  <th>Employee Name</th>
                  <th>Total Hours</th>
                  <th>Basic Salary</th>
                  <th>Bonuses</th>
                  <th>Deductions</th>
                  <th>Net Pay</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>001</td>
                  <td>Jane Bagonia</td>
                  <td>40</td>
                  <td>₱7,000.00</td>
                  <td>₱500.00</td>
                  <td>₱300.00</td>
                  <td>₱7,200.00</td>
                  <td>Processed</td>
                </tr>
                <tr>
                  <td>002</td>
                  <td>Robert Cruz</td>
                  <td>42</td>
                  <td>₱7,000.00</td>
                  <td>₱800.00</td>
                  <td>₱400.00</td>
                  <td>₱7,400.00</td>
                  <td>Processing</td>
                </tr>
                <!-- More static rows can be added here -->
              </tbody>
            </table>
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


