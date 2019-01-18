<?php $data = require 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $data['headTitle']; ?>
    </title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<section
    class="section-promo d-flex flex-column justify-content-between align-items-center">
    <header class="container">
        <nav
            class="navbar navbar-expand-lg navbar-light d-flex justify-content-between">
            <a class="navbar-brand" href="#">
                <img src="<?php echo $data['mainLogo']['logoImage']['src'] ?>"
                     alt="<?php echo $data['mainLogo']['logoImage']['alt'] ?>">
            </a>
            <button class="navbar-toggler" type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end"
                 id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <?php
                    foreach ($data['mainMenu'] as $mainMenuItem) {
                        echo '<li class="nav-item"><a class="nav-link ' . $mainMenuItem['class'] . '" href="' . $mainMenuItem['url'] . '">' . $mainMenuItem['title'] . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </header>
    <div class="section-title text-center container">
        <h2 class="font-weight-bold">
            <?php echo $data['promoTitle']['title'] ?>
        </h2>
        <p>
            <?php echo $data['promoTitle']['description'] ?>
        </p>
        <a href="<?php echo $data['buttonMain']['url'] ?>" class="button-main">
            <?php echo $data['buttonMain']['title'] ?>
        </a>
    </div>
    <div class="scroll">
        <span>
            <?php echo $data['scrollDownBtn']['title'] ?>
        </span>
    </div>
</section>
<section class="section-twin">
    <div class="container ">
        <ul class="row section-twin-list align-items-center">
            <?php
            foreach ($data['bestThingsListItem'] as $bestThingsItem) {
                ?>
                <li class="col-md-6 section-twin-item">
                    <h2>
                        <?php echo $bestThingsItem['title'] . '<span>' . $bestThingsItem['titleAccent'] . '</span>' ?>
                    </h2>
                    <p> <?php echo $bestThingsItem['description'] ?>
                    </p>
                    <a href="<?php echo $data['buttonMain']['url'] ?>"
                       class="button-main">
                        <?php echo $data['buttonMain']['title'] ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>
<section class="section-features">
    <div class="container">
        <div class="section-title">
            <h2>
                <?php echo $data['sectionFeatures']['title'] ?>
            </h2>
        </div>
        <ul class="row container features-list justify-content-between">
            <?php
            foreach ($data['sectionFeatures']['featuresListItem'] as $item) {
                ?>
                <li class="col-md-6 features-list-item <?php echo $item['class'] ?>">
                    <h3>
                        <?php echo $item['title'] ?>
                    </h3>
                    <p>
                        <?php echo $item['description'] ?>
                    </p>
                </li>
            <?php } ?>
        </ul>
        <a href="<?php echo $data['buttonMain']['url'] ?>"
           class="button-main">
            <?php echo $data['buttonMain']['title'] ?>
        </a>
    </div>
</section>
<section class="section-carousel">
    <div class="container-fluid">
        <ul class="row carousel-list flex-sm-column align-items-sm-center flex-xl-row ">
            <?php
            foreach ($data['sectionCarouselListItem'] as $item) {
                ?>
                <li class="col-xl-4 carousel-list-item">
                    <img src=" <?php echo $item['image']['src'] ?> "
                         alt="<?php echo $item['image']['alt'] ?>">
                    <div
                        class="hover-box d-flex flex-column justify-content-center text-center align-items-center">
                        <div class="container">
                            <h2>
                                <?php echo $item['title'] ?>
                            </h2>
                            <p>
                                <?php echo $item['description'] ?>
                            </p>
                        </div>
                        <a href="<?php echo $data['buttonMainWatch']['url'] ?>"
                           class="button-main">
                            <?php echo $data['buttonMainWatch']['title'] ?>
                        </a>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>
<section class="section-about text-center">
    <div class="container">
        <div class="row section-title text-center justify-content-center">
            <div class="col-md-7">
                <h2>
                    <?php echo $data['sectionAbout']['title'] ?>
                </h2>
                <p>
                    <?php echo $data['sectionAbout']['description'] ?>
                </p>
            </div>
        </div>
        <ul class="row about-us-list">
            <?php
            foreach ($data['sectionAbout']['aboutUsListItem'] as $item) {
                ?>
                <li class="col-sm-6 col-lg-3 about-us-list-item">
                    <img src=" <?php echo $item['image']['src'] ?> "
                         alt="<?php echo $item['image']['alt'] ?>">
                    <h3 class="font-weight-bold">
                        <?php echo $item['title'] ?>
                    </h3>
                    <p>
                        <?php echo $item['description'] ?>
                    </p>
                </li>
            <?php } ?>
        </ul>
        <a href="<?php echo $data['buttonMainWatch']['url'] ?>"
           class="button-main">
            <?php echo $data['buttonMainWatch']['title'] ?>
        </a>
    </div>
</section>
<section class="section-map">
    <h2><?php echo $data['section-map']['title'] ?></h2>
    <iframe class="google-map-frame"
            src="<?php echo $data['section-map']['googleMapSrc'] ?>"
            height="607" style="border:0"
            allowfullscreen>
    </iframe>
</section>
<section class="section-last text-center">
    <div class="container">
        <h2>
            <?php echo $data['section-last']['title'] ?>
        </h2>
        <p>
            <?php echo $data['section-last']['description']['title'] ?>
            <a href="<?php echo $data['section-last']['description']['href'] ?>">
                <span><?php echo $data['section-last']['description']['brandName'] ?></span>
            </a>
        </p>
    </div>
</section>
<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
