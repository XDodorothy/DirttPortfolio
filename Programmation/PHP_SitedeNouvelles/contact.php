<!DOCTYPE html>
<html lang="fr">

<head>
<title>DiRTTy Journal - CONTACT</title>
  <?php include 'partials/head.php'; ?>
</head>

<body>
  <div class="container-scroller">
    <div class="main-panel">
      <!-- partial:../partials/_navbar.html -->
      <?php include 'partials/nav.php'; ?>

      <body>
        <div class="container-scroller">
          <!-- partial -->
          <div class="flash-news-banner">
            <div class="container">
              <div class="d-lg-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                  <?php
                  $article2 = $json2['articles']; ?>
                  <a href="<?php echo $article2[0]['url'] ?>"><span class="badge badge-dark mr-3">Dernière nouvelle &nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></span></a>
                  <a href="<?php echo $article2[0]['url'] ?>">
                    <h4 class="mb-0 long-text">
                      <?php
                      $article2 = $json2['articles'];
                      echo $article2[0]['title'] . "<br>"; ?>
                    </h4>
                  </a>

                </div>
                <div class="d-flex">
                  <span class="mr-3 text-danger">
                    <?php
                    date_default_timezone_set("America/Montreal");
                    echo "Aujourd'hui " . date("h:i:sa");
                    ?>
                  </span>
                  <span class="text-danger">Montréal, Qc</span>
                </div>
              </div>
            </div>
          </div>
          <div class="content-wrapper">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card" data-aos="fade-up">
                    <div class="card-body">
                      <div class="aboutus-wrapper">
                        <h1 class="mt-5 text-center mb-5">
                          Contactez Dorothée Therrien
                        </h1>
                        <div class="row">
                          <div class="col-lg-12 mb-5 mb-sm-2">
                            <form>
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="form-group">
                                    <textarea class="form-control textarea" placeholder="Message *" id="message"></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Nom *" />
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email *" />
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="form-group">
                                    <a href="#" class="btn btn-lg btn-dark font-weight-bold mt-3">Envoyer</a>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- container-scroller ends -->
        <!-- partial:../partials/_footer.html -->

        <?php include 'partials/footer.php'; ?>
        <!-- partial -->
    </div>
  </div>
  <?php include 'partials/script.php'; ?>
</body>

</html>