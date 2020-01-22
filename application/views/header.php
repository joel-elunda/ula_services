
    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand"  href="<?= site_url('welcome'); ?>">Ula Services</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <!-- Active Nav Link -->
                <!-- <a class="nav-link active" id="link" href="<?= site_url('welcome'); ?>">Home</a> -->
                <a class="nav-link" id="link" href="<?= site_url('welcome'); ?>">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="link" href="<?= site_url('recipes'); ?>">Recipes</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="<?= site_url('services'); ?>" id="link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu" aria-labelledby="link">
                  <a class="dropdown-item" id="link" href="<?= site_url('services'); ?>">Food Catering</a>
                  <a class="dropdown-item" id="link" href="<?= site_url('services'); ?>">Boisson &amp; Beverages</a>
                  <a class="dropdown-item" id="link" href="<?= site_url('services'); ?>">Mariage &amp; Anniversaire</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="link" href="<?= site_url('about'); ?>">A propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="news" href="<?= site_url('news'); ?>">Nouveautés</a>
              </li>
            </ul>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" id="link" href="contact.html">Contactez-nous</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    