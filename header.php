<header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="index.php"><img src="images/PeoplePerTask.png" style="width: 12rem;" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars" style="color: #6298f3;"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: 0 auto;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="search.php">Searsh</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                </ul>
                <?php session_start() ?>
                 <?php if (isset($_SESSION['UserID'])) : ?>
                  <form class="d-flex nav_btn" role="search">
                  <a href="logout.php" class="btn btn-primary">Log out</a>
                </form>
                <?php else : ?>
                <form class="d-flex nav_btn" role="search">
                  <a href="sign.php" class="btn btn-primary">Connect</a>
                </form>
               <?php endif ?>
                <i id="dark-mode-toggle" class="fas fa-moon ps-3 "></i>
              </div>
            </div>
          </nav>
    </header>