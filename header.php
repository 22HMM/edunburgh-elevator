<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edunburgh Elevator</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header class="sticky-top">
        <div class="bg-white">
            <nav class="navbar navbar-expand-lg shadow-lg">
                <div class="container">
                  <a class="navbar-brand" href="index.php">
                    <img src="./images/logo.png" alt="logo" class="logo">
                    <img src="./images/logo letter.png" alt="logo-letter" class="logo-letter">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                      <?php
                        $activePage = basename($_SERVER['PHP_SELF'],".php");
                      ?>
                      <li class="nav-item">
                        <a class="nav-link <?= $activePage == 'index' ? 'active' : '';?>" aria-current="page" href="index.php"
                          style="<?= $activePage == 'index' ? 'border-bottom: 3px solid red;' : ''; ?>"
                        >Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link <?= $activePage == 'about-us' ? 'active' : '';?>"" href="about-us.php"
                        style="<?= $activePage == 'about-us' ? 'border-bottom: 3px solid red;' : ''; ?>"
                        >
                        About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link 
                        <?= $activePage == 'products' || $activePage=='villa-elevator' || $activePage == 'lift-platform' || $activePage == 'observation-elevator' || $activePage == 'passenger-elevator' || $activePage == 'escalators' || $activePage == 'mechanical-parking-system' || $activePage == 'accessories&parts' ? 'active' : '';?>"" href="products.php"
                        style="<?= $activePage == 'products' || $activePage=='villa-elevator' || $activePage == 'lift-platform' || $activePage == 'observation-elevator' || $activePage == 'passenger-elevator' || $activePage == 'escalators' || $activePage == 'mechanical-parking-system' || $activePage == 'accessories&parts' ? 'border-bottom: 3px solid red;' : ''; ?>"
                        >Our Products</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link  <?= $activePage == 'services' ? 'active' : '';?>"" href="services.php"
                        style="<?= $activePage == 'services' ? 'border-bottom: 3px solid red;' : ''; ?>"
                        >Our Services</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link  <?= $activePage == 'contact-us' ? 'active' : '';?>"" href="contact-us.php"
                        style="<?= $activePage == 'contact-us' ? 'border-bottom: 3px solid red;' : ''; ?>"
                        >Contact Us</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>
        </div>
    </header>