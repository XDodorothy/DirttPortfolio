<!DOCTYPE html>
<html lang="fr">

<head>
  <title>DiRTTy Journal</title>
  <?php include 'partials/head.php'; ?>
</head>

<body>
  <div class="container-scroller">
    <div class="main-panel">
      <!-- partial:../partials/_navbar.html -->
      <?php include 'partials/nav.php'; ?>

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
          <div class="row" data-aos="fade-up">
            <div class="col-xl-8 stretch-card grid-margin">

              <div class="position-relative">
                <div class="image-container">
                  <a target=_blank href="<?php echo $article2[0]['url'] ?>">
                    <img class="img-fluid" alt="banner" src=<?php echo $article2[0]['urlToImage']; ?> />
                  </a>
                </div>
                <div class="banner-content">
                  <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                    Nouvelle mondiale
                  </div>
                  <h1 class="mb-0 long-textMain"><?php echo $article2[0]['title']; ?></h1>
                  <div class="fs-12">
                    <span class="mr-2">Source:
                      <?php echo $article2[0]['source']['name']; ?></span>
                    <?php echo $article2[0]['publishedAt']; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 stretch-card grid-margin">
              <div class="card bg-dark text-white">
                <div class="card-body">
                  <h2>Dernières nouvelles</h2>
                  <?php
                  for ($i = 0; $i <= 2; $i++) {
                  ?>
                    <div class="row border-bottom-blue pt-3 pb-4">
                      <div class="col-8 pr-3">
                        <h5 class="long-textMain"><a target=_blank href="<?php echo $article2[$i]['url'] ?>"><?php echo $article2[$i]['title']; ?>
                          </a></h5>
                        <div class="fs-12">
                          <span class="mr-2">Source:
                            <?php echo $article2[$i]['source']['name']; ?></span> <?php echo $article2[$i]['publishedAt']; ?>
                        </div>
                      </div>

                      <div class="col-4 rotate-img">
                        <a target="_blank" href="<?php echo $article2[$i]['url']; ?>">
                          <img class="img-fluid img-lg" alt="banner" src="<?php echo $article2[$i]['urlToImage']; ?>"  />
                        </a>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row" data-aos="fade-up">
            <div class="col-lg-3 stretch-card grid-margin">
              <div class="card">
                <div class="card-body catego">
                  <h2>Catégories</h2>
                  <ul class="vertical-menu">
                    <li><a href="page.php?q=science&title=SANTÉ">Santé</a></li>
                    <li><a href="page.php?q=science&title=AFFAIRE">Affaire</a></li>
                    <li><a href="page.php?q=science&title=SPORTS">Sports</a></li>
                    <li><a href="page.php?q=science&title=TECHNOLOGIES">Technologies</a></li>
                    <li><a href="page.php?q=science&title=SCIENCE">Science</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-9 stretch-card grid-margin">
              <div class="card">
                <div class="card-body white">

                  <div class="row">
                    <?php
                    for ($i = 3; $i <= 5; $i++) {
                    ?>
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <a target="_blank" href="<?php echo $article2[$i]['url']; ?>">
                              <img class="img-fluid" alt="banner" src="<?php echo $article2[$i]['urlToImage']; ?>" />
                            </a>
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold">Nouvelle éclaire</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8  grid-margin">
                        <h2 class="mb-2 font-weight-600 long-textHome">
                          <a target=_blank href="<?php echo $article2[$i]['url'] ?>"><?php echo $article2[$i]['title']; ?>
                          </a>
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Source:
                            <?php echo $article2[$i]['source']['name']; ?></span> <?php echo $article2[$i]['publishedAt']; ?>
                        </div>
                        <p class="mb-0">
                          <?php echo $article2[$i]['description']; ?>
                        </p>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- main-panel ends -->
      <!-- partial:../partials/_footer.html -->

      <?php include 'partials/footer.php'; ?>
      <!-- partial -->
    </div>
  </div>
  <?php include 'partials/script.php'; ?>
</body>

</html>