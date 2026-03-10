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
    <title>Admin Employees</title>
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
        <div class="me-2 fw-bold fs-5">
          Admin-<?= htmlspecialchars($name) ?>
        </div>
        <div class="eg-avatar-circle"></div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <aside class="col-12 col-md-3 col-lg-2 eg-sidebar eg-sidebar-admin py-4">
          <div class="eg-sidebar-brand px-3 mb-3">
            <span class="eg-sidebar-role">Office Admin</span>
          </div>
          <nav class="nav flex-column gap-1">
            <a href="dashboard.php" class="eg-sidebar-link">
              <i class="bi bi-speedometer2"></i>
              <span>Dashboard</span>
            </a>
            <a href="scan.php" class="eg-sidebar-link">
              <i class="bi bi-upc-scan"></i>
              <span>Scanning</span>
            </a>
            <a href="employees.php" class="eg-sidebar-link active">
              <i class="bi bi-people"></i>
              <span>Employees</span>
            </a>
            <a href="../auth/logout.php" class="eg-sidebar-link eg-sidebar-link-danger mt-3">
              <i class="bi bi-box-arrow-right"></i>
              <span>Logout</span>
            </a>
          </nav>
        </aside>

        <main class="col-12 col-md-9 col-lg-10 py-4">
          <h3 class="mb-4 fw-bold">All Employees</h3>
          <div class="row g-3">
            <?php
            // simple static loop for prototype cards
            $employees = array_fill(0, 12, [
                'name' => 'Jeriz Bagonia',
                'position' => 'Team Leader',
            ]);
            foreach ($employees as $emp): ?>
              <div class="col-6 col-md-4 col-lg-3">
                <div class="eg-employee-card">
                  <div class="d-flex align-items-center mb-2">
                    <div class="eg-avatar-circle me-2"></div>
                    <div>
                      <div class="fw-semibold"><?= htmlspecialchars($emp['name']) ?></div>
                      <div class="text-muted small"><?= htmlspecialchars($emp['position']) ?></div>
                    </div>
                  </div>
                  <div class="text-muted small">Position</div>
                  <div class="fw-semibold small"><?= htmlspecialchars($emp['position']) ?></div>
                </div>
              </div>
            <?php endforeach; ?>
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


