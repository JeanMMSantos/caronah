<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caronah</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu&display=swap" rel="stylesheet">

  <!-- FontAwesome - Icons -->
  <script src="https://kit.fontawesome.com/4460336651.js" crossorigin="anonymous"></script>

  <!-- Bootstrap Scripts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- CSS Styles Sheets -->

  <link rel="stylesheet" href="css/styles.css">


</head>

<body>

  <section class="colored-section" id="title">

    <div class="container-fluid">

      <!-- Nav Bar -->

      <nav class="nav navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.html">caronah</a>

        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Cadastro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="perfil.php">Ver Perfil</a>
            </li>
          </ul>

        </div>
      </nav>

      <section class="vh-50" style="background-color: black;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">

                  <div class="col-md-12 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">

                      <form action="registrar-carona.php" method="POST">

                        <div class="d-flex align-items-center mb-3 pb-1">
                          <span class="h1 fw-bold mb-0">Caronah</span>
                        </div>

                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Marcar Carona</h5>

                        <div class="form-outline mb-4">
                          <input type="time" name="horario" id="horario" class="form-control form-control-lg" />
                          <label class="form-label" for="horario">Hora de Saída</label>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="text" name="valor" id="valor" class="form-control form-control-lg" />
                          <label class="form-label" for="valor">Valor</label>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="text" name="vagas" id="vagas" class="form-control form-control-lg" />
                          <label class="form-label" for="vagas">Quantidade de Vagas</label>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="text" name="saida" id="saida" class="form-control form-control-lg" />
                          <label class="form-label" for="saida">Local de Saída</label>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="text" name="parada1" id="parada1" class="form-control form-control-lg" />
                          <label class="form-label" for="parada1">Primeira Parada</label>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="text" name="parada2" id="parada2" class="form-control form-control-lg" />
                          <label class="form-label" for="parada2">Segunda Parada</label>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="text" name="parada3" id="parada3" class="form-control form-control-lg" />
                          <label class="form-label" for="parada3">Terceira Parada</label>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="text" name="parada4" id="parada4" class="form-control form-control-lg" />
                          <label class="form-label" for="parada4">Quarta Parada</label>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="text" name="parada5" id="parada5" class="form-control form-control-lg" />
                          <label class="form-label" for="parada5">Quinta Parada</label>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="text" name="destino" id="destino" class="form-control form-control-lg" />
                          <label class="form-label" for="destino">Destino Final</label>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="text" name="veiculo" id="veiculo" class="form-control form-control-lg" />
                          <label class="form-label" for="veiculo">Veiculo</label>
                        </div>



                        <div class="pt-1 mb-4 text-center">
                          <button class="btn btn-success btn-lg btn-block" type="sent">Cadastrar</button>
                        </div>


                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

  </section>







  <!-- Footer -->

  <footer class="white-section" id="footer">

    <div container-fluid>
      <button type="button" class="btn"><i class="fa-brands fa-github fa-lg"></i></button>
      <button type="button" class="btn"><i class="fa-brands fa-facebook-f fa-lg"></i></button>
      <button type="button" class="btn"><i class="fa-brands fa-instagram fa-lg"></i></button>
      <button type="button" class="btn"><i class="fa-solid fa-envelope fa-lg"></i></button>

      <p>© Copyright Jean</p>
    </div>


  </footer>


</body>

</html>
</body>

</html>