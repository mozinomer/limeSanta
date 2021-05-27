<!DOCTYPE html>
<html lang="en">
<head> 
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


</head>
<body <?php echo body_class(); ?>>
    <header>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="logo">
                        <a href="./index.html"><img src="./images/logo.png"></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="menu">
                        <ul>
                            <li data-aos="zoom-in" data-aos-delay="500"><a href="./lime_mixer.html">MIXERS</a></li>
                            <li data-aos="zoom-in" data-aos-delay="700"><a href="./lime_mixeri.html">CULTURE</a></li>
                            <li data-aos="zoom-in" data-aos-delay="1000"><a href="./contact-us.html">CONTACT</a></li>
                            <li data-aos="zoom-in" data-aos-delay="1300"><a href="./lime-sound-design.html">LSD</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="burger-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>