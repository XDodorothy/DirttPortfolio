<!DOCTYPE html>
<html lang="fr">

<head>
    <title>DiRTTy Journal - SANTÉ</title>
    <?php include 'partials/head.php';
    $str = file_get_contents('health.json');
    $json = json_decode($str, true); // decode the JSON into an associative array
    ?>

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
                    <div class="col-sm-12">
                        <div class="card" data-aos="fade-up">
                            <div class="card-body nouvelles">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h1 class="font-weight-600 mb-4">
                                            SANTÉ
                                        </h1>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-lg-8">
                                        <?php
                                        $articles = $json['articles'];
                                        for ($i = 6; $i <= 11; $i++) { ?>
                                            <div class="row">
                                                <div class="col-sm-4 grid-margin">
                                                    <div class="rotate-img">
                                                        <a target=_blank href="<?php echo $articles[$i]['url'] ?>">
                                                            <?php if ($articles[$i]['urlToImage'] == null) { ?>
                                                                <img class="img-fluid" src="assets/BleuLogo.png" alt="banner" />
                                                            <?php } else { ?>
                                                                <img class="img-fluid" src="<?php echo $articles[$i]['urlToImage']; ?>" alt="banner" />
                                                            <?php } ?>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 grid-margin">
                                                    <h2 class="font-weight-600 mb-2 long-textMain">
                                                        <a target=_blank href="<?php echo $articles[$i]['url'] ?>"><?php echo $articles[$i]['title']; ?>
                                                        </a>
                                                    </h2>
                                                    <p class="fs-13 text-muted mb-0">
                                                        <span class="mr-2">Source:
                                                            <?php echo $articles[$i]['source']['name']; ?></span>
                                                        <?php echo $articles[$i]['publishedAt']; ?>
                                                    </p>
                                                    <p class="fs-15">
                                                        <?php echo $articles[$i]['description']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>

                                    <div class="col-lg-4">
                                        <h2 class="mb-4 text-primary font-weight-600">
                                            Dernières nouvelles
                                        </h2>
                                        <div class="row">
                                            <?php
                                            for ($i = 0; $i <= 2; $i++) {
                                            ?>
                                                <div class="col-sm-12">
                                                    <div class="border-bottom pb-4 pt-4">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <h5 class="font-weight-600 mb-1 long-text">
                                                                    <a target=_blank href="<?php echo $articles[$i]['url'] ?>"><?php echo $articles[$i]['title']; ?>
                                                                    </a>
                                                                </h5>
                                                                <p class="fs-13 text-muted mb-0">
                                                                    <span class="mr-2">Source:
                                                                        <?php echo $articles[$i]['source']['name']; ?></span> <?php echo $articles[$i]['publishedAt']; ?>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="rotate-img">
                                                                    <a target="_blank" href="<?php echo $articles[$i]['url']; ?>">
                                                                        <img class="img-fluid" src="<?php echo $articles[$i]['urlToImage']; ?>" />
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="trending">
                                            <h2 class="mb-4 text-primary font-weight-600">
                                                En vogue
                                            </h2>
                                            <?php
                                            for ($i = 3; $i <= 5; $i++) {
                                            ?>
                                                <div class="border-bottom mb-4">
                                                    <div class="rotate-img">
                                                        <a target=_blank href="<?php echo $articles[$i]['url'] ?>">
                                                            <img class="img-fluid" src=<?php echo $articles[$i]['urlToImage']; ?> />
                                                        </a>
                                                    </div>
                                                    <h3 class="mt-3 font-weight-600 long-text">
                                                        <a target=_blank href="<?php echo $articles[$i]['url'] ?>"><?php echo $articles[$i]['title']; ?>
                                                        </a>
                                                    </h3>
                                                    <p class="fs-13 text-muted mb-0">
                                                        <span class="mr-2">Source:
                                                            <?php echo $articles[$i]['source']['name']; ?></span> <?php echo $articles[$i]['publishedAt']; ?>
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
            </div>
            <!-- main-panel ends -->
            <!-- container-scroller ends -->

            <!-- partial:../partials/_footer.html -->

            <?php include 'partials/footer.php'; ?>
            <!-- partial -->
        </div>
    </div>
    <?php include 'partials/script.php'; ?>
</body>

</html>