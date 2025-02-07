    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--Icon for browser image-->
    <link rel="icon" type="image" href="assets/BleuLogo.png">
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/aos/dist/aos.css/aos.css" />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!--Connecter le fichier json-->
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <?php
    $apiKey = 'b7e790f6b6754db3ae809776fef96967';
    $lang = 'fr';
    $url2 = 'http://newsapi.org/v2/everything?q=*&language=' . $lang . '&apiKey=' . $apiKey;
    include 'function_curl.php';
    $str2 = loadJson($url2);
    $json2 = json_decode($str2, true); // decode the JSON into an associative array
    ?>