<!DOCTYPE html>
<html lang="fr">

<head>

    <?php include 'partials/head.php';
    $apiKey = 'b7e790f6b6754db3ae809776fef96967';
    $lang = 'fr';
    $page = 2;
    $q = $_GET['q'];
    $url = 'http://newsapi.org/v2/everything?q=' . $q . '&apiKey=' . $apiKey . '&page=' . $page . '&language=' . $lang . '&pageSize=20';
    // Nombre d'articles par page
    $articles_per_page = 6;
    $str = loadJson($url);
    $title = $_GET['title'];
    $json = json_decode($str, true); // decode the JSON into an associative array
    ?>
    <?php
    $nbResultats = $json['totalResults'];

    /** Gestion des pages */
    if ((isset($_REQUEST['page'])) && (!empty($_REQUEST['page']))) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    ?>

    <title>DiRTTy Journal - <?php echo $title; ?> </title>
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
                                            <?php echo $title; ?>
                                        </h1>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-lg-8">
                                        <?php
                                        $articles = $json['articles'];
                                        // Calculer l'index de départ et de fin
                                        $start_i = ($page - 1) * $articles_per_page;
                                        $end_i = $start_i + $articles_per_page;
                                        for ($i = $start_i; $i < $end_i && $i < count($articles); $i++) { ?>
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

                                        <ul class="list-inline d-flex justify-content-between">
                                            <?php if ($page > 1) { ?>
                                                <li class="list-inline-item"><a href="page.php?q=<?php echo ($q) ?>&title=<?php echo ($title) ?>&page=<?php echo ($page - 1) ?>"><?php echo ($page - 1) ?> <i class="fa-solid fa-arrow-left"></i> Page Précédente </a></li>
                                            <?php } // IL FAUT METTRE LE $TITLE DANS L'URL POUR QU'IL CE LIE AUX AUTRES PAGES QUI NE SONT PAS LIÉES AU $TITLE DU PAGE.PHP INITIAL. 
                                            ?>

                                            <?php if ($nbResultats > ($page * $articles_per_page)) { ?>
                                                <li class="list-inline-item"><a href="page.php?q=<?php echo ($q) ?>&title=<?php echo ($title) ?>&page=<?php echo ($page + 1) ?>">Page Suivante <i class="fa-solid fa-arrow-right"></i> <?php echo ($page + 1) ?></a></li>
                                            <?php } ?>
                                        </ul>
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
                                                                    <a target=_blank href="<?php echo $articles[$i]['url'] ?>">
                                                                        <?php if ($articles[$i]['urlToImage'] == null) { ?>
                                                                            <img class="img-fluid" src="assets/BleuLogo.png" alt="banner" />
                                                                        <?php } else { ?>
                                                                            <img class="img-fluid" src="<?php echo $articles[$i]['urlToImage']; ?>" alt="banner" />
                                                                        <?php } ?>
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
                                                            <?php if ($articles[$i]['urlToImage'] == null) { ?>
                                                                <img class="img-fluid" src="assets/BleuLogo.png" alt="banner" />
                                                            <?php } else { ?>
                                                                <img class="img-fluid" src="<?php echo $articles[$i]['urlToImage']; ?>" alt="banner" />
                                                            <?php } ?>
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