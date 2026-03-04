<?php
// Prototype login page (no real authentication yet)
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-GOES Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../assets/css/style.css" />
  </head>
  <body class="bg-light">
    <header class="eg-topbar">
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
    </header>

    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
          <div class="eg-login-card">
            <h2 class="text-center mb-4 eg-login-title">Login</h2>
            <form
              action="authenticate.php"
              method="post"
              class="needs-validation"
              novalidate
            >
              <div class="mb-3">
                <label for="username" class="form-label fw-semibold"
                  >Username</label
                >
                <div class="input-group">
                  <span class="input-group-text">
                    <span class="bi bi-person-fill"></span>
                  </span>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    required
                    autocomplete="off"
                  />
                  <div class="invalid-feedback">
                    Please enter your username.
                  </div>
                </div>
              </div>
              <div class="mb-4">
                <label for="password" class="form-label fw-semibold"
                  >Password</label
                >
                <div class="input-group">
                  <span class="input-group-text">
                    <span class="bi bi-lock-fill"></span>
                  </span>
                  <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
                    required
                    autocomplete="off"
                  />
                  <div class="invalid-feedback">
                    Please enter your password.
                  </div>
                </div>
              </div>
              <?php if (!empty($_SESSION['login_error'])): ?>
                <div class="alert alert-danger py-2 small" role="alert">
                  <?= htmlspecialchars($_SESSION['login_error']) ?>
                </div>
              <?php unset($_SESSION['login_error']); endif; ?>

              <button
                type="submit"
                class="btn w-100 eg-login-btn"
              >
                LOGIN
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script>
      // Simple client-side Bootstrap validation for the prototype
      (function () {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function (form) {
          form.addEventListener(
            'submit',
            function (event) {
              if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            },
            false
          );
        });
      })();
    </script>
  </body>
</html>


