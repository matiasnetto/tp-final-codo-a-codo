<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $TITLE ?></title>
  <link rel="stylesheet" href="styles.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</head>

<body>

<!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg px-0 px-md-5 px navbar-dark bg-dark">
    <div class="container-fluid">
      <!-- NAVBAR MOBILE TOGGLER -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- NAVBAR ITEMS -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="container d-flex justify-content-center d-md-inline">
          <a class="navbar-brand " href="#">
            <img src="images/codoacodo.png" alt="Bootstrap" height="60" />
          </a>
        </div>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-nowrap text-center text-left-md" aria-current="page" href="#">La
              conferencia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-nowrap text-center text-left-md" href="#">Los oradores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-nowrap text-center text-left-md" aria-disabled="true">El lugar y la fecha</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-nowrap text-center text-left-md" aria-disabled="true">Convertite en orador</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-nowrap text-center text-left-md" aria-disabled="true">Comprar tickets</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>