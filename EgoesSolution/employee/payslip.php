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
    <title>Employee Payslip Archive - Prototype</title>
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
          <a class="nav-link" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="payslip.php">Payslip Archive</a>
        </li>
      </ul>

      <div class="eg-panel">
        <h5 class="mb-3">My Payslip Archive</h5>
        <div class="list-group">
          <?php
          $payslips = [
              'Sep 30, 2025 Payslip',
              'Oct 30, 2025 Payslip',
              'Nov 30, 2025 Payslip',
              'Dec 30, 2025 Payslip',
          ];
          foreach ($payslips as $label): ?>
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
              <div>
                <div><?= htmlspecialchars($label) ?></div>
                <div class="text-muted small">Download PDF</div>
              </div>
              <div class="text-end">
                <div>₱7,000.00</div>
                <div class="text-muted small">Net</div>
              </div>
            </a>
          <?php endforeach; ?>
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


