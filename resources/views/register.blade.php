<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <section class="vh-100" style="background-color: #094963;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="/images/foto2.jpg"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 650px;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  <form method="POST" action="{{ route('register') }}">
                  @csrf
                    <h2 class="fw-normal mb-3 pb-3" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"><b>Registrarse</b></h2>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label" for="email">Nombre</label>
                      <input type="text" name = "name" id="name" class="form-control form-control-md" />
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label" for="email">Correo</label>
                      <input type="email" name="email" id="email" class="form-control form-control-md" />
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label" for="password">Contraseña</label>
                      <input type="password" name="password" id="password" class="form-control form-control-md" />
                    </div>

                    <div class="pt-1 mb-4">
                      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-md btn-block" style="background-color: #094963; color: white;" type="submit">Registrarse</button>
                    </div>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Ya tienes una cuenta?</q> <a href="/login"
                        style="color: #393f81;">Inicia Sesión</a></p>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>