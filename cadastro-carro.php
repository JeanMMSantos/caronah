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
              <a class="nav-link" href="login.html">Login</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="register.html">Cadastro</a>
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
      
                      <form action="registrar-veiculo.php" method="POST">
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <span class="h1 fw-bold mb-0">Caronah</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Cadastre o Ve??culo</h5>
      
                        <div class="form-outline mb-4">
                          <input type="name" name="placa" id="placa" class="form-control form-control-lg" />
                          <label class="form-label" for="placa">Placa</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="name" name="cor" id="cor" class="form-control form-control-lg" />
                            <label class="form-label" for="cor">Cor</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="name" name="modelo" id="modelo" class="form-control form-control-lg" />
                            <label class="form-label" for="modelo">Modelo</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="name" name="ano" id="ano" class="form-control form-control-lg" />
                            <label class="form-label" for="ano">Ano</label>
                        </div>                       

                        <!-- Tipo de Ve??culo -->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo" id="tipo" value="1">
                            <label class="form-check-label" for="inlineRadio1">Carro</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo" id="tipo" value="2">
                            <label class="form-check-label" for="inlineRadio2">Moto</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo" id="tipo" value="3">
                            <label class="form-check-label" for="inlineRadio3">Van</label>
                        </div>
                        <br><br>

                        <div class="pt-1 mb-4 text-center">
                            <button class="btn btn-success btn-lg btn-block" type="submit">Cadastrar</button>
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

      <p>?? Copyright Jean</p>
    </div>
    

  </footer>


</body>

</html>
</body>
</html>