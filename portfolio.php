<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>DiRTT - Mes réalisations</title>
  <title>Réalisations</title>
  <meta name="description" content="DÉVELOPPEUSE WEB + PROGRAMMEUSE">


  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
  <!--Icon for browser image-->
  <link rel="icon" type="image" href="../images/logoRW.png">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!--FONT-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Prata&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="./css/portfolio.css">
  <?php
  include 'function_curl.php';
  $str = file_get_contents('business.json');
  $json = json_decode($str, true); // decode the JSON into an associative array 
  ?>



</head>

<body>
  <!-- partial:../partials/_navbar.html -->
  <?php include 'partials/nav.php'; ?>

  <!-- partial:index.partial.html -->
  <div class="page timeline-5-2" data-uia-timeline-skin="5" data-uia-timeline-adapter-skin-5="uia-card">
    <h1><span id="holder3"></span><span class="blinking-cursor">|</span></h1>
    <?php $articles = $json['articles']; ?>
    <div class="uia-timeline">
      <div class="uia-timeline__container">
        <div class="uia-timeline__line"></div>
        <div class="uia-timeline__groups">
          <!-- section start-->
        <section class="uia-timeline__group" aria-labelledby="timeline-demo-6-heading-1">
            <div class="uia-timeline__dot"></div>
            <div class="uia-timeline__point uia-card">
              <div class="uia-card__container">
                <div class="uia-card__intro">
                  <span class="uia-timeline__year" aria-hidden="true">2024</span>
                  <h3 id="timeline-demo-6-heading-1" class="page__job-name uia-heading ra-heading titrePro"><a
                      href="projects.php?q=<?php echo $articles[11]['id'] ?>&titre=<?php echo $articles[11]['title'] ?>"> </a></h3>
                  <?php
                  $genres = $articles[11]['genres'];
                  foreach ($genres as $index => $genre) : ?>
                    <span class='categorie'><?php echo $genre['name']; ?></span>
                    <?php if ($index < count($genres) - 1) : ?>
                      <span> | </span>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <div class="uia-card__body container">
                  <img src="<?php echo $articles[11]['urlToImage1'] ?>" alt="image_projet" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text"><a href="projects.php?q=<?php echo $articles[11]['id'] ?>&titre=<?php echo $articles[11]['title'] ?>">Voir</a></div>
                  </div>
                </div>
                <map name="fooz" class="d-flex flex-row-reverse">
                  <img class="area" src="images/raccoon.png" alt="raccoon" />
                </map>
              </div>
            </div>
          </section>
          <!-- section end-->
           <!-- section start-->
          <section class="uia-timeline__group" aria-labelledby="timeline-demo-6-heading-2">
            <div class="uia-timeline__dot"></div>
            <div class="uia-timeline__point uia-card">
              <div class="uia-card__container">
                <div class="uia-card__intro">
                  <span class="uia-timeline__year" aria-hidden="true">2024</span>
                  <h3 id="timeline-demo-6-heading-1" class="page__job-name uia-heading ra-heading titrePro"><a
                      href="projects.php?q=<?php echo $articles[10]['id'] ?>&titre=<?php echo $articles[10]['title'] ?>"><?php echo $articles[10]['title'] ?></a></h3>
                  <?php
                  $genres = $articles[10]['genres'];
                  foreach ($genres as $index => $genre) : ?>
                    <span class='categorie'><?php echo $genre['name']; ?></span>
                    <?php if ($index < count($genres) - 1) : ?>
                      <span> | </span>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <div class="uia-card__body container">
                  <img src="<?php echo $articles[10]['urlToImage1'] ?>" alt="image_projet" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text"><a href="projects.php?q=<?php echo $articles[10]['id'] ?>&titre=<?php echo $articles[10]['title'] ?>">Voir</a></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
              <!-- section end-->
          <section class="uia-timeline__group" aria-labelledby="timeline-demo-6-heading-1">
            <div class="uia-timeline__dot"></div>
            <div class="uia-timeline__point uia-card">
              <div class="uia-card__container">
                <div class="uia-card__intro">
                  <span class="uia-timeline__year" aria-hidden="true">2024</span>
                  <h3 id="timeline-demo-6-heading-1" class="page__job-name uia-heading ra-heading titrePro"><a
                      href="projects.php?q=<?php echo $articles[9]['id'] ?>&titre=<?php echo $articles[9]['title'] ?>"> </a></h3>
                  <?php
                  $genres = $articles[9]['genres'];
                  foreach ($genres as $index => $genre) : ?>
                    <span class='categorie'><?php echo $genre['name']; ?></span>
                    <?php if ($index < count($genres) - 1) : ?>
                      <span> | </span>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <div class="uia-card__body container">
                  <img src="<?php echo $articles[9]['urlToImage1'] ?>" alt="image_projet" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text"><a href="projects.php?q=<?php echo $articles[9]['id'] ?>&titre=<?php echo $articles[9]['title'] ?>">Voir</a></div>
                  </div>
                </div>
                <map name="fooz" class="d-flex flex-row-reverse">
                  <img class="area" src="images/raccoon.png" alt="raccoon" />
                </map>
              </div>
            </div>
          </section>
          <section class="uia-timeline__group" aria-labelledby="timeline-demo-6-heading-2">
            <div class="uia-timeline__dot"></div>
            <div class="uia-timeline__point uia-card">
              <div class="uia-card__container">
                <div class="uia-card__intro">
                  <span class="uia-timeline__year" aria-hidden="true">2024</span>
                  <h3 id="timeline-demo-6-heading-1" class="page__job-name uia-heading ra-heading titrePro"><a
                      href="projects.php?q=<?php echo $articles[8]['id'] ?>&titre=<?php echo $articles[8]['title'] ?>"><?php echo $articles[8]['title'] ?></a></h3>
                  <?php
                  $genres = $articles[8]['genres'];
                  foreach ($genres as $index => $genre) : ?>
                    <span class='categorie'><?php echo $genre['name']; ?></span>
                    <?php if ($index < count($genres) - 1) : ?>
                      <span> | </span>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <div class="uia-card__body container">
                  <img src="<?php echo $articles[8]['urlToImage1'] ?>" alt="image_projet" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text"><a href="projects.php?q=<?php echo $articles[8]['id'] ?>&titre=<?php echo $articles[8]['title'] ?>">Voir</a></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="uia-timeline__group" aria-labelledby="timeline-demo-6-heading-1">
            <div class="uia-timeline__dot"></div>
            <div class="uia-timeline__point uia-card">
              <div class="uia-card__container">
                <div class="uia-card__intro">
                  <span class="uia-timeline__year" aria-hidden="true">2024</span>
                  <h3 id="timeline-demo-6-heading-1" class="page__job-name uia-heading ra-heading titrePro"><a
                      href="projects.php?q=<?php echo $articles[7]['id'] ?>&titre=<?php echo $articles[7]['title'] ?>"><?php echo $articles[7]['title'] ?></a></h3>
                  <?php
                  $genres = $articles[7]['genres'];
                  foreach ($genres as $index => $genre) : ?>
                    <span class='categorie'><?php echo $genre['name']; ?></span>
                    <?php if ($index < count($genres) - 1) : ?>
                      <span> | </span>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <div class="uia-card__body container">
                  <img src="<?php echo $articles[7]['urlToImage1'] ?>" alt="image_projet" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text"><a href="projects.php?q=<?php echo $articles[7]['id'] ?>&titre=<?php echo $articles[7]['title'] ?>">Voir</a></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="uia-timeline__group" aria-labelledby="timeline-demo-6-heading-2">
            <div class="uia-timeline__dot"></div>
            <div class="uia-timeline__point uia-card">
              <div class="uia-card__container">
                <div class="uia-card__intro">
                  <span class="uia-timeline__year" aria-hidden="true">2024</span>
                  <h3 id="timeline-demo-6-heading-1" class="page__job-name uia-heading ra-heading titrePro"><a
                      href="projects.php?q=<?php echo $articles[6]['id'] ?>&titre=<?php echo $articles[6]['title'] ?>"><?php echo $articles[6]['title'] ?></a></h3>
                  <?php
                  $genres = $articles[6]['genres'];
                  foreach ($genres as $index => $genre) : ?>
                    <span class='categorie'><?php echo $genre['name']; ?></span>
                    <?php if ($index < count($genres) - 1) : ?>
                      <span> | </span>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <div class="uia-card__body container">
                  <img src="<?php echo $articles[6]['urlToImage1'] ?>" alt="image_projet" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text"><a href="projects.php?q=<?php echo $articles[6]['id'] ?>&titre=<?php echo $articles[6]['title'] ?>">Voir</a></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="uia-timeline__group" aria-labelledby="timeline-demo-6-heading-1">
            <div class="uia-timeline__dot"></div>
            <div class="uia-timeline__point uia-card">
              <div class="uia-card__container">
                <div class="uia-card__intro">
                  <span class="uia-timeline__year" aria-hidden="true">2024</span>
                  <h3 id="timeline-demo-6-heading-1" class="page__job-name uia-heading ra-heading titrePro"><a
                      href="projects.php?q=<?php echo $articles[5]['id'] ?>&titre=<?php echo $articles[5]['title'] ?>"><?php echo $articles[5]['title'] ?></a></h3>
                  <?php
                  $genres = $articles[5]['genres'];
                  foreach ($genres as $index => $genre) : ?>
                    <span class='categorie'><?php echo $genre['name']; ?></span>
                    <?php if ($index < count($genres) - 1) : ?>
                      <span> | </span>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <div class="uia-card__body container">
                  <img src="<?php echo $articles[5]['urlToImage1'] ?>" alt="image_projet" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text"><a href="projects.php?q=<?php echo $articles[5]['id'] ?>&titre=<?php echo $articles[5]['title'] ?>">Voir</a></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="uia-timeline__group" aria-labelledby="timeline-demo-6-heading-2">
            <div class="uia-timeline__dot"></div>
            <div class="uia-timeline__point uia-card">
              <div class="uia-card__container">
                <div class="uia-card__intro">
                  <span class="uia-timeline__year" aria-hidden="true">2024</span>
                  <h3 id="timeline-demo-6-heading-1" class="page__job-name uia-heading ra-heading titrePro"><a
                      href="projects.php?q=<?php echo $articles[4]['id'] ?>&titre=<?php echo $articles[4]['title'] ?>"><?php echo $articles[4]['title'] ?></a></h3>
                  <?php
                  $genres = $articles[4]['genres'];
                  foreach ($genres as $index => $genre) : ?>
                    <span class='categorie'><?php echo $genre['name']; ?></span>
                    <?php if ($index < count($genres) - 1) : ?>
                      <span> | </span>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <div class="uia-card__body container">
                  <img src="<?php echo $articles[4]['urlToImage1'] ?>" alt="image_projet" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text"><a href="projects.php?q=<?php echo $articles[4]['id'] ?>&titre=<?php echo $articles[4]['title'] ?>">Voir</a></div>
                  </div>
                  <map name="fooz" class="d-flex flex-row-reverse two">
                    <img class="area" src="images/raccoonflip.png" alt="raccoonflip" />
                  </map>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <p><span class="blinking-cursor"></span></p>
  <i id="moveDown" class="fa fa-chevron-down fa-3x bounce"></i>
  <div class="page" data-uia-timeline-skin="5" data-uia-timeline-adapter-skin-5="uia-card">
    <div class="uia-timeline">
      <div class="uia-timeline__container">
        <div class="uia-timeline__line"></div>
        <div class="uia-timeline__groups">
          <section class="uia-timeline__group" aria-labelledby="timeline-demo-6-heading-1">
            <div class="uia-timeline__dot"></div>
            <div class="uia-timeline__point uia-card">
              <div class="uia-card__container">
                <div class="uia-card__intro">
                  <span class="uia-timeline__year" aria-hidden="true">2023</span>
                  <h3 id="timeline-demo-6-heading-1" class="page__job-name uia-heading ra-heading titrePro"><a
                      href="projects.php?q=<?php echo $articles[3]['id'] ?>&titre=<?php echo $articles[3]['title'] ?>"><?php echo $articles[3]['title'] ?></a></h3>
                  <?php
                  $genres = $articles[3]['genres'];
                  foreach ($genres as $index => $genre) : ?>
                    <span class='categorie'><?php echo $genre['name']; ?></span>
                    <?php if ($index < count($genres) - 1) : ?>
                      <span> | </span>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <div class="uia-card__body container">
                  <img src="<?php echo $articles[3]['urlToImage1'] ?>" alt="image_projet" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text"><a href="projects.php?q=<?php echo $articles[3]['id'] ?>&titre=<?php echo $articles[3]['title'] ?>">Voir</a></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="uia-timeline__group" aria-labelledby="timeline-demo-6-heading-2">
            <div class="uia-timeline__dot"></div>
            <div class="uia-timeline__point uia-card">
              <div class="uia-card__container">
                <div class="uia-card__intro">
                  <span class="uia-timeline__year" aria-hidden="true">2023</span>
                  <h3 id="timeline-demo-6-heading-1" class="page__job-name uia-heading ra-heading titrePro"><a
                      href="projects.php?q=<?php echo $articles[2]['id'] ?>&titre=<?php echo $articles[2]['title'] ?>"><?php echo $articles[2]['title'] ?></a></h3>
                  <?php
                  $genres = $articles[2]['genres'];
                  foreach ($genres as $index => $genre) : ?>
                    <span class='categorie'><?php echo $genre['name']; ?></span>
                    <?php if ($index < count($genres) - 1) : ?>
                      <span> | </span>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <div class="uia-card__body container">
                  <img src="<?php echo $articles[2]['urlToImage1'] ?>" alt="image_projet" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text"><a href="projects.php?q=<?php echo $articles[2]['id'] ?>&titre=<?php echo $articles[2]['title'] ?>">Voir</a></div>
                  </div>
                </div>
              </div>
            </div>
          </section>

        </div>
      </div>
    </div>
  </div>
  <p><span class="blinking-cursor"></span></p>
  <i id="moveDown" class="fa fa-chevron-down fa-3x bounce"></i>
  <div class="page" data-uia-timeline-skin="5" data-uia-timeline-adapter-skin-5="uia-card">
    <div class="uia-timeline">
      <div class="uia-timeline__container">
        <div class="uia-timeline__line"></div>
        <div class="uia-timeline__groups">
          <section class="uia-timeline__group" aria-labelledby="timeline-demo-6-heading-1">
            <div class="uia-timeline__dot"></div>
            <div class="uia-timeline__point uia-card">
              <div class="uia-card__container">
                <div class="uia-card__intro">
                  <span class="uia-timeline__year" aria-hidden="true">2021</span>
                  <h3 id="timeline-demo-6-heading-1" class="page__job-name uia-heading ra-heading titrePro"><a
                      href="projects.php?q=<?php echo $articles[1]['id'] ?>&titre=<?php echo $articles[1]['title'] ?>"><?php echo $articles[1]['title'] ?></a></h3>
                  <?php
                  $genres = $articles[1]['genres'];
                  foreach ($genres as $index => $genre) : ?>
                    <span class='categorie'><?php echo $genre['name']; ?></span>
                    <?php if ($index < count($genres) - 1) : ?>
                      <span> | </span>
                    <?php endif; ?>
                  <?php endforeach; ?>

                </div>
                <div class="uia-card__body container">
                  <img src="<?php echo $articles[1]['urlToImage1'] ?>" alt="ApiNews" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text"><a href="projects.php?q=<?php echo $articles[1]['id'] ?>&titre=<?php echo $articles[1]['title'] ?>">Voir</a></div>
                  </div>
                </div>
                <map name="fooz" class="d-flex flex-row-reverse">
                  <img class="area" src="images/raccoon.png" alt="raccoon" />
                </map>
              </div>
            </div>
          </section>
          <section class="uia-timeline__group" aria-labelledby="timeline-demo-6-heading-2">
            <div class="uia-timeline__dot"></div>
            <div class="uia-timeline__point uia-card">
              <div class="uia-card__container">
                <div class="uia-card__intro">
                  <span class="uia-timeline__year" aria-hidden="true">2021</span>
                  <h3 id="timeline-demo-6-heading-1" class="page__job-name uia-heading ra-heading titrePro"><a
                      href="projects.php?q=<?php echo $articles[0]['id'] ?>&titre=<?php echo $articles[0]['title'] ?>"><?php echo $articles[0]['title'] ?></a></h3>
                  <?php
                  $genres = $articles[0]['genres'];
                  foreach ($genres as $index => $genre) : ?>
                    <span class='categorie'><?php echo $genre['name']; ?></span>
                    <?php if ($index < count($genres) - 1) : ?>
                      <span> | </span>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <div class="uia-card__body container">
                  <img src="<?php echo $articles[0]['urlToImage1'] ?>" alt="imgage_projet" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text"><a href="projects.php?q=<?php echo $articles[0]['id'] ?>&titre=<?php echo $articles[0]['title'] ?>">Voir</a></div>
                  </div>
                </div>
              </div>
            </div>
          </section>

        </div>
      </div>
    </div>
  </div>

  <!-- <div class="page">
    <div class="uia-timeline" data-uia-timeline-skin="skin-1">
      <div class="uia-timeline__container">
        <div class="uia-timeline__groups">
          <section class="uia-timeline__group" aria-labelledby="uia-timeline-step-desc-1">
            <div class="uia-timeline__point uia-card">
              <div class="uia-card__container">
                <div class="uia-timeline__point-intro uia-card__intro">
                  <span class="uia-timeline__step" aria-hidden="true">01</span>
                  <h3 id="uia-timeline-step-desc-1" class="uia-timeline__point-heading ra-heading">
                    <span class="ha-screen-reader">The first job.</span>
                    Frontend developer at web-studio TOP1
                  </h3>
                  <span class="uia-timeline__point-date uia-card__time">
                    <span class="ha-screen-reader">from</span>
                    <time datetime="2012-02">February 2012</time>
                    <span class="uia-card__time-divider" aria-hidden="true"></span>
                    <span class="ha-screen-reader">to</span>
                    <time datetime="2013-07">Jule 2013</time>
                  </span>
                </div>
                <div class="uia-card__body uia-timeline__point-description">
                  <div class="uia-card__description">
                    <p>
                      The web studio TOP1 was my first company, where I was developing
                      sites using CMS Joomla. Those days were very funny.
                      I had to maintain browsers which worked in different ways.
                      Maybe it's not necessary to say IE 6 was my favorite browser.
                      Also I made buttons with rounded corners via 4 pictures! That was fun.
                    </p>
                    <p>
                      As a young developer I thought that I was good at it. But my code
                      sucked. For example, I didn't know about W3C standards or best
                      practices of development.
                      Maybe that happened because I didn't have experienced mentors and
                      no one could point out my mistakes.
                    </p>
                    <p>
                      But one day I felt it was time
                      for a change. I quit the company with the thought to find a mentor who
                      can train me.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div> -->
  <!-- partial -->
  <!-- begin section -->


  <!-- end section -->

  </div>
  <!-- end fullpage -->
  <!-- end section -->
  <?php include 'partials/footer.php'; ?>
  <!-- partial -->

  <?php include 'partials/script.php'; ?>
  <!-- end fullpage -->
</body>

</html>