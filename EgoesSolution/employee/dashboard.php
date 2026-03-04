<?php
session_start();
if (($_SESSION['role'] ?? '') !== 'employee') {
    header('Location: ../auth/login.php');
    exit;
}
$name = $_SESSION['display_name'] ?? 'Employee';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee Dashboard - Prototype</title>
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

    <div class="container-fluid py-4">
      <ul class="nav nav-tabs mb-3">
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="payslip.php">Payslip Archive</a>
        </li>
      </ul>

      <div class="row g-3">
        <div class="col-lg-4">
          <div class="eg-panel">
            <h5 class="mb-3">My Earnings</h5>
            <p class="text-muted small mb-2">(Current Period: Feb 1–31)</p>
            <div class="mb-1"><strong>Total Hours:</strong> 164h</div>
            <div class="mb-1"><strong>Estimated Gross Pay:</strong> ₱12,000.00</div>
            <div class="mb-3">
              <strong>Deductions (Benefits &amp; Cash Advance):</strong> ₱3,000.00
            </div>
            <div class="mb-3">
              <strong>Estimated Net Pay:</strong>
              <span class="fs-4">₱9,000</span>
            </div>
            <button class="btn btn-primary">Details</button>
          </div>
        </div>

        <div class="col-lg-8">
          <div class="eg-panel">
            <h5 class="mb-3">My Attendance (Feb 2026)</h5>
            <!-- Simple colored dots to mimic prototype -->
            <div class="table-responsive">
              <table class="table table-borderless align-middle text-center mb-0">
                <thead>
                  <tr>
                    <th class="text-start">Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-start"><span class="eg-dot eg-dot-gray"></span></td>
                    <td><span class="eg-dot eg-dot-green"></span></td>
                    <td><span class="eg-dot eg-dot-green"></span></td>
                    <td><span class="eg-dot eg-dot-green"></span></td>
                    <td><span class="eg-dot eg-dot-green"></span></td>
                    <td><span class="eg-dot eg-dot-red"></span></td>
                    <td><span class="eg-dot eg-dot-yellow"></span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


