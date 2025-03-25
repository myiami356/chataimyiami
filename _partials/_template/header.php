<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>
<body style=" background-color:rgb(199, 255, 250) ;">
  <nav class="navbar navbar-expand-lg bg-secondary border-bottom border-5 border-light">
    <div class="container-fluid">
      <a class="navbar-brand text-white fw-bold" href="index.php">
        <h1 class="mb-0"><i class="bi bi-lightbulb"></i></i><b>&nbsp; myiami</b></h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
        <ul class="navbar-nav me-3 my-2 my-lg-0 navbar-nav-scroll">
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php?page=home" style="font-size: 20px;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" style="font-size: 20px;">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" style="font-size: 20px;">AI Products offer</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false" style="font-size: 20px;">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">About Us</a></li>
              <li><a class="dropdown-item" href="#">Question</a></li>
              <li><a class="dropdown-item" href="#">X</a></li>
            </ul>
          </li>
        </ul>
        <?php
        if (isset($_SESSION['user_id'])){
          echo '<a href="?logout" class="btn btn-warning  fw-bolder style="border-radius: 20px;" >Logout <i class="bi bi-arrow-right"></i></a>';
        }else{
          echo '<a href="?page=login" class="btn btn-warning  fw-bolder style="border-radius: 20px;">Login<i class="bi bi-arrow-right"></i></a>';
        }
        if (isset($_GET['logout'])){
          session_unset();
          session_destroy();
          header("Location: index.php?login");
        }
        ?>
      </div>
    </div>
  </nav>


  