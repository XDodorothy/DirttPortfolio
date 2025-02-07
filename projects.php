<!DOCTYPE html>
<html lang="fr">

<head>

  <?php include 'partials/head.php';
  $q = $_GET['q'];
  $titre = $_GET['titre'];
  $articles = $json['articles'];
  ?>

  <title>DiRTT - <?php echo $titre; ?> </title>
<link rel="stylesheet" href="./css/projects.css"> 

</head>

<body>
  <!-- partial:../partials/_navbar.html -->
  <?php include 'partials/nav.php'; ?>


</div>
<!-- partial -->
  <main class="onb-main">
    <article class="onb-product-view">
      <section class="onb-product-view--image-slider onb-image-slider">
        <!-- image slider here -->
        <div class="container images">

<div class="row">
  <div class="photo-slider">
  <img src="<?php echo $articles[$q]['urlToImage1']; ?>" alt="image_projet" class="photo-slider-img NOW">
  <?php
            $images = $articles[$q]['urlToImage'];
            foreach ($images as $index => $image) : ?>
              <img src="<?php echo $image['lien']; ?>" alt="image_projet" class="photo-slider-img">
              <?php endforeach; ?>
  </div>
  <div class="photo-controls">
    <div class="photo-pagination">
      <div class="photo-page active"><span></span></div>
      <div class="photo-page"><span></span></div>
      <div class="photo-page"><span></span></div>
      <div class="photo-page"><span></span></div>
      <div class="photo-page"><span></span></div>
    </div>
  </div>
</div>
        <!-- Video section -->
        <?php if (!empty($articles[$q]['video'])) : ?>
          <div class="onb-product-details-box--video">
            <h3 class="onb-product-details-box--description-title">Vidéo</h3>
            <video width="50%" controls>
              <source src="<?php echo $articles[$q]['video']; ?>" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>
        <?php endif; ?>
      </section>
      <aside class="onb-aside-wrapper">
        <section class="onb-product-view--details-box onb-product-details-box">
          <h2 class="onb-product-details-box--title titrePro">
            <?php echo $articles[$q]['title'] ?>
          </h2>
          <div class="onb-product-details-box--info-wrapper">
            <?php
            $langues = $articles[$q]['langues'];
            foreach ($langues as $index => $langue) : ?>
              <span class="onb-product-details-box--price"><strong><?php echo $langue['name']; ?></strong>
                <?php if ($index < count($langues) - 1) : ?>
                  <span> | </span>
                <?php endif; ?>
              <?php endforeach; ?>
              <br>
              <?php
              $genres = $articles[$q]['genres'];
              foreach ($genres as $index => $genre) : ?>
                <span class="categorie"><?php echo $genre['name']; ?></span>
                <?php if ($index < count($genres) - 1) : ?>
                  <span> | </span>
                <?php endif; ?>
              <?php endforeach; ?>
          </div>

          <div class="onb-product-details-box--description">
            <h3 class="onb-product-details-box--description-title">Description</h3>
            <p class="onb-product-details-box--description-text">
              <?php echo $articles[$q]['description'] ?>
            </p>
            <h3 class="onb-product-details-box--description-title">Contraintes</h3>
            <p class="onb-product-details-box--description-text">
              <?php echo $articles[$q]['contrainte'] ?>
            </p>
          </div>
        </section>
        </div>
        </div>

        <div class="justify-content-center onb-product-details-box--interaction">
          <i class="fa fa-chevron-right fa-2x bounce mt-2"></i>
          <a href=" <?php echo $articles[$q]['url'] ?>" target="_blank"><button class="onb-product-details-box--add-to-cart-button onb-button onb-button__primary">
              VISUALISER</button></a>
        </div>
      </aside>
    </article>
  </main>

  <!-- partial:../partials/_footer.html -->

  <?php include 'partials/footer.php'; ?>
  <!-- partial -->
  </div>
  </div>

  <?php include 'partials/script2.php'; ?> 
</body>

</html>