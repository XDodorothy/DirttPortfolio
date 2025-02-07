<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <img src="assets/BleuLogo.png" class="footer-logo" alt="Logo" />
          <h5 class="font-weight-normal mt-4 mb-5">
            DiRTTy Journal est votre site d'actualités, de divertissement, de musique et de mode. Nous vous fournissons les dernières nouvelles de dernière minute et des vidéos directement de l'industrie du divertissement.
          </h5>
          <ul class="social-media mb-3">
            <li>
              <a href="#">
                <i class="mdi mdi-facebook"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="mdi mdi-youtube"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="mdi mdi-twitter"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-sm-4">
          <h3 class="font-weight-bold mb-3">Dernières nouvelles</h3>
          <?php
          for ($i = 0; $i <= 2; $i++) {
          ?>
            <div class="row">
              <div class="col-sm-12">
                <div class="footer-border-bottom pb-2 footer">
                  <div class="row">
                    <div class="col-3">
                      <a target=_blank href="<?php echo $article2[$i]['url'] ?>">
                        <?php if ($article2[$i]['urlToImage'] == null) { ?>
                          <img class="img-fluid" src="assets/BleuLogo.png" alt="banner" />
                        <?php } else { ?>
                          <img class="img-fluid" src="<?php echo $article2[$i]['urlToImage']; ?>" alt="banner" />
                        <?php } ?>
                    </div>
                    <div class="col-9">
                      <h5 class="font-weight-600 long-text">
                        <a target=_blank href="<?php echo $article2[$i]['url'] ?>"><?php echo $article2[$i]['title']; ?></a>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="col-sm-3 footer">
          <h3 class="font-weight-bold mb-3">CATÉGORIES</h3>
          <div class="footer-border-bottom pb-2">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="mb-0 font-weight-600"><a href="page.php?q=health&title=SANTÉ">Santé</a></h5>
              <div class="count"><i class="fa-solid fa-feather"></i></div>
            </div>
          </div>
          <div class="footer-border-bottom pb-2 pt-2">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="mb-0 font-weight-600"><a href="page.php?q=business&title=AFFAIRE">Affaire</a></h5>
              <div class="count"><i class="fa-solid fa-feather"></i></div>
            </div>
          </div>
          <div class="footer-border-bottom pb-2 pt-2">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="mb-0 font-weight-600"><a href="page.php?q=sports&title=SPORTS">Sports</a></h5>
              <div class="count"><i class="fa-solid fa-feather"></i></div>
            </div>
          </div>
          <div class="footer-border-bottom pb-2 pt-2">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="mb-0 font-weight-600"><a href="page.php?q=technology&title=TECHNOLOGIES">Technologies</a></h5>
              <div class="count"><i class="fa-solid fa-feather"></i></div>
            </div>
          </div>
          <div class="footer-border-bottom pb-2 pt-2">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="mb-0 font-weight-600"><a href="page.php?q=science&title=SCIENCE">Science</a></h5>
              <div class="count"><i class="fa-solid fa-feather"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="d-sm-flex justify-content-between align-items-center">
            <div class="fs-14 font-weight-600">
              © 2024 @ DiRTTy Journal. All rights reserved.<br> Auteure: Dorothée Therrien.<br> Dans le cadre du cours Intégration III, Collège O'Sullivan de Québec.
            </div>
            <div class="fs-14 font-weight-600">
              Handcrafted by <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">BootstrapDash</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>