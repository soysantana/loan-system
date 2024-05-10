<?php $page_title = 'Login - Loan System'; ?>
<?php include_once('src/config/functions.php'); ?>
<?php include_once('src/components/header.php'); ?>

<main>
  <div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center py-4">
              <a href="" class="logo d-flex align-items-center w-auto">
                <img src="" width="200px" alt="logo" />
              </a>
            </div>
            <!-- End Logo -->

            <div class="card mb-3">
              <div class="card-body">
                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Ingrese a su cuenta</h5>
                  <p class="text-center small">Ingrese su nombre de usuario y contraseña para iniciar sesión</p>
                </div>
                <form method="post" action="src/pages/new-client.php" class="row g-3 needs-validation" novalidate>
                  <div class="col-12">
                    <label for="username" class="form-label">Nombre de usuario</label>
                    <div class="input-group has-validation">
                      <input type="text" name="username" class="form-control" id="username" autocomplete="off" required />
                      <div class="invalid-feedback">¡Por favor, ingrese su nombre de usuario!</div>
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="password" required />
                    <div class="invalid-feedback">¡Por favor, introduzca su contraseña!</div>
                  </div>

                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" value="true" id="remember" />
                      <label class="form-check-label" for="remember">Acuérdate de mí</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Iniciar sesión</button>
                  </div>
                  <div class="col-12">
                    <p class="small mb-0">¿No tienes cuenta? <a href="pages/users-register.php">Crea una cuenta</a></p>
                  </div>
                </form>
              </div>
            </div>

            <div class="credits">copyright <a href="#">2024</a></div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>
<!-- End #main -->