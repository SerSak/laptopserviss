<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang=<?php echo $curr_lang ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="jquery.maskedinput.js"></script>
    <script src="jquery.validate.min.js"></script>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="icons.css">
    <link rel="stylesheet" href="style.css">
    <title>LaptopServiss</title>
</head>

<body>

    <!-- ========================= NAVBAR ========================= -->
    <section class="navigation">
        <div class="nav-container">
            <div class="brand">
                <a href="#"><img src="img/logo.png" alt="logo"></a>
                <!-- <img src="img/logo.png" alt="logo"> -->
            </div>
            <nav>
                <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>

                <ul class="nav-list">

                    <li class="nav__item"><a class="nav__link" href="#hero"><?php echo $lang['nav1'] ?></a></li>
                    <li class="nav__item"><a class="nav__link" href="#repair"><?php echo $lang['nav2'] ?></a></li>
                    <li class="nav__item"><a class="nav__link" href="#spares"><?php echo $lang['nav3'] ?></a></li>
                    <li class="nav__item"><a class="nav__link" href="#about"><?php echo $lang['nav4'] ?></a></li>
                    <li class="nav__item"><a class="nav__link" href="#contact"><?php echo $lang['nav5'] ?></a></li>


                    <li>
                        <a id="currentLang" href="#!"></a>
                        <ul class="nav-dropdown">
                            <li>
                                <a href="index.php?lang=lv"><?php echo $lang['lang_lv'] ?></a>
                            </li>
                            <li>
                                <a href="index.php?lang=ru"><?php echo $lang['lang_ru'] ?></a>
                            </li>
                        </ul>

                    </li>
                </ul>

            </nav>
        </div>
    </section>
    <!-- / ========================= NAVBAR ========================= -->


    <!-- ========================= HERO SECTION ========================= -->
    <div class="hero" id="hero">
        <div class="container">
            <div class="hero__inner">
                <h1 class="hero__title"><?php echo $lang['hero_title'] ?></h1>

                <!-- CTA BUTTON -->
                <a class="hero__btn" href="#contact"><?php echo $lang['hero_btn'] ?></a>

                <h2 class="hero__subtitle"><?php echo $lang['hero_subtitle'] ?></h2>
                <div class="hero__cards">

                    <div class="hero__card blue">
                        <span><?php echo $lang['hero_subtitle'] ?></span>
                    </div>

                    <div class="hero__card">
                        <i class="icon-tools"></i>
                        <span><?php echo $lang['card1'] ?></span>
                    </div>

                    <div class="hero__card">
                        <i class="icon-calendar"></i>
                        <span><?php echo $lang['card2'] ?></span>
                    </div>

                    <div class="hero__card">
                        <i class="icon-clock"></i>
                        <span><?php echo $lang['card3'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /========================= HERO SECTION ========================= -->


    <!-- ========================= FEATURES SECTION ========================= -->
    <div class="container" id="repair">
        <div class="features__wrapper">
            <h2 class="features__title"><?php echo $lang['features_title'] ?></h2>
            <div class="features">

                <div class="features__card">
                    <i class="icon-display"></i>
                    <h4 class="features__text"><?php echo $lang['features_text1'] ?></h4>
                </div>

                <div class="features__card">
                    <i class="icon-floppy1"></i>
                    <h4 class="features__text"><?php echo $lang['features_text2'] ?></h4>
                </div>

                <div class="features__card">
                    <i class="icon-keyboard1"></i>
                    <h4 class="features__text"><?php echo $lang['features_text3'] ?></h4>
                </div>

                <div class="features__card">
                    <i class="icon-droplet"></i>
                    <h4 class="features__text"><?php echo $lang['features_text4'] ?></h4>
                </div>
                <div class="features__card">
                    <i class="icon-hdmi"></i>
                    <h4 class="features__text"><?php echo $lang['features_text5'] ?></h4>
                </div>

                <div class="features__card">
                    <i class="icon-macbook"></i>
                    <h4 class="features__text"><?php echo $lang['features_text6'] ?></h4>
                </div>

                <div class="features__card">
                    <i class="icon-hdmi2"></i>
                    <h4 class="features__text"><?php echo $lang['features_text7'] ?></h4>
                </div>

                <div class="features__card">
                    <i class="icon-monitor"></i>
                    <h4 class="features__text"><?php echo $lang['features_text8'] ?></h4>
                </div>
            </div>
        </div>
    </div>
    <!-- /========================= FEATURES SECTION ========================= -->


    <!-- /=========================  SPARES ========================= -->
    <div class="spares" id="spares">
        <div class="container">

            <div class="spare__flex">
                <h1 class="spares__title"><?php echo $lang['spares_title'] ?></h1>
                <p class="spares__text"><?php echo $lang['spares_text'] ?> <a href="tel:+37123110939">23110939</a>, <a href="tel:+37129399032">29399032</a>
                </p>
            </div>
            <div class="spares__wrapper">

                <div class="spares__img">
                    <img src="img/spares.png" alt="spares">
                </div>

                <div class="spares__inner">

                    <div class="spares__item">
                        <i class="icon-computer"><span></span></i>
                        <h5><?php echo $lang['spares_item1'] ?></h5>
                    </div>
                    <div class="spares__item">
                        <i class="icon-sd"></i>
                        <h5><?php echo $lang['spares_item2'] ?></h5>
                    </div>
                    <div class="spares__item">
                        <i class="icon-laptop1"></i>
                        <h5><?php echo $lang['spares_item3'] ?></h5>
                    </div>
                    <div class="spares__item">
                        <i class="icon-floppy2"></i>
                        <h5><?php echo $lang['spares_item4'] ?></h5>
                    </div>
                    <div class="spares__item">
                        <i class="icon-usbcable"></i>
                        <h5><?php echo $lang['spares_item5'] ?></h5>
                    </div>
                    <div class="spares__item">
                        <i class="icon-wifikeyboard"></i>
                        <h5><?php echo $lang['spares_item6'] ?></h5>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <!-- /=========================  /SPARES ========================= -->


    <!-- ========================= CONTACT SECTION ========================= -->

    <div class="contact__wrapper" id="contact">

        <div class="contact__form">

            <div class="container pad">

                <h1 class="contact__title"><?php echo $lang['contact_title'] ?></h1>

                <div class="contact__info">
                    <i class="icon-location"></i>
                    <div class="contact__text">
                        <h3><?php echo $lang['contact_subtitle1'] ?></h3>
                    </div>
                </div>

                <div class="contact__info">
                    <i class="icon-clock"></i>
                    <h3><?php echo $lang['contact_subtitle2'] ?></h3>
                    <div class="contact__text">
                        <p><?php echo $lang['contact_text1'] ?></p>
                        <p><?php echo $lang['contact_text2'] ?></p>
                    </div>
                </div>

                <div class="contact__info">
                    <i class="icon-phone"></i>
                    <h3><?php echo $lang['contact_subtitle3'] ?></h3>
                    <div class="contact__text">
                        <p><a href="tel:+37123110939">23110939</a>; <a href="tel:+37127758992">27758992</a></p>

                    </div>
                </div>

                <div class="contact__info">
                    <i class="icon-mail"></i>
                    <h3><?php echo $lang['contact_subtitle4'] ?></h3>
                    <div class="contact__text">
                        <p>
                            <a href="mailto:info@laptopserviss.lv?subject=Pieteikt%20Remontu&body=Sveiki!%0D%0AGribu%20pieteikt%20remontu">info@laptopserviss.lv</a>
                        </p>

                    </div>
                </div>

                <!-- ====================================================================================================================== -->
                <a class="contact__btn btn--show-modal" href="#!"><?php echo $lang['contact_btn'] ?></a>

            </div>

        </div>

        <!-- <div class="contact__map"> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d528.3060695957276!2d24.137167495356863!3d56.96342363251196!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x495997036dea6568!2ssia%22Laptop%20Serviss%22!5e0!3m2!1slv!2slv!4v1634603226417!5m2!1slv!2slv" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <!-- </div> -->


    </div>

    <!-- /========================= CONTACT SECTION ========================= -->


    <!-- ========================= ABOUT SECTION ========================= -->
    <div class="about" id="about">
        <div class="container">
            <div class="about__wrapper">
                <h1 class="about__title"><?php echo $lang['about_title'] ?></h1>
                <div class="about__inner">
                    <p class="about__text"><?php echo $lang['about_text1'] ?></p>
                    <p class="about__text"><?php echo $lang['about_text2'] ?></p>
                    <p class="about__text"><?php echo $lang['about_text3'] ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================= / ABOUT SECTION ========================= -->


    <!-- ========================= COUNTER SECTION ========================= -->

    <div class="container">
        <div class="counter__wrapper">

            <div class="counter">
                <div class="counter__item">
                    <i class="icon-clock"></i>
                    <span class="counter__num">15</span>
                    <span class="counter__title"><?php echo $lang['counter__title1'] ?></span>
                </div>
            </div>

            <div class="counter">
                <div class="counter__item">
                    <i class="icon-laptop2"></i>
                    <span class="counter__num">15100</span>
                    <span class="counter__title"><?php echo $lang['counter__title2'] ?></span>
                </div>
            </div>

            <div class="counter">
                <div class="counter__item">
                    <i class="icon-thumbsup"></i>
                    <span class="counter__num">99%</span>
                    <span class="counter__title"><?php echo $lang['counter__title3'] ?></span>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================= /COUNTER SECTION ========================= -->

    <!-- <svg class="links__icon">
        <use xlink:href="#greater"></use>
    </svg> -->

    <svg style="display: none;">
        <symbol id="greater" viewBox="0 0 9 15">
            <line x1="0.646447" y1="13.7343" x2="7.71751" y2="6.66327" />
            <line x1="7.71774" y1="7.44144" x2="0.646668" y2="0.370376" />
        </symbol>
    </svg>

    <!-- ========================= LINKS SECTION ========================= -->
    <div class="links">
        <div class="container">
            <div class="links__wrapper">

                <div class="links__logo">
                    <img src="img/logo.png" alt="logo">

                </div>

                <div class="links__item">

                    <h3 class="links__title"><?php echo $lang['links_title1'] ?></h3>

                    <div class="links__con">
                        <svg class="links__icon">
                            <use xlink:href="#greater"></use>
                        </svg>
                        <a href="#hero" class="links__nav"><?php echo $lang['nav1'] ?></a>
                    </div>

                    <div class="links__con">
                        <svg class="links__icon">
                            <use xlink:href="#greater"></use>
                        </svg>
                        <a href="#repair" class="links__nav"><?php echo $lang['nav2'] ?></a>
                    </div>

                    <div class="links__con">
                        <svg class="links__icon">
                            <use xlink:href="#greater"></use>
                        </svg>
                        <a href="#spares" class="links__nav"><?php echo $lang['nav3'] ?></a>
                    </div>

                    <div class="links__con">
                        <svg class="links__icon">
                            <use xlink:href="#greater"></use>
                        </svg>
                        <a href="#about" class="links__nav"><?php echo $lang['nav4'] ?></a>
                    </div>

                    <div class="links__con">
                        <svg class="links__icon">
                            <use xlink:href="#greater"></use>
                        </svg>
                        <a href="#contact" class="links__nav"><?php echo $lang['nav5'] ?></a>
                    </div>


                </div>

                <div class="links__item">
                    <h3 class="links__title"><?php echo $lang['links_title2'] ?></h3>

                    <span class="links__subtitle address"><?php echo $lang['contact_subtitle1'] ?></span>

                    <span class="links__subtitle"><?php echo $lang['contact_subtitle2'] ?></span>
                    <span class="links__text"><?php echo $lang['contact_text1'] ?></span>
                    <span class="links__text"><?php echo $lang['contact_text2'] ?></span>

                    <span class="links__subtitle"><?php echo $lang['contact_subtitle3'] ?></span>
                    <span class="links__text"><a href="tel:+37123110939">23110939</a>; <a href="tel:+37127758992">27758992</a></span>
                    <!-- <span class="links__text">23110939; 27758992</span> -->

                    <span class="links__subtitle"><?php echo $lang['contact_subtitle4'] ?></span>
                    <span class="links__text">
                        <a href="mailto:info@laptopserviss.lv?subject=Pieteikt%20Remontu&amp;body=Sveiki!%0D%0AGribu%20pieteikt%20remontu">info@laptopserviss.lv</a>
                    </span>
                    <!-- <span class="links__text">info@laptopserviss.lv</span> -->


                </div>
            </div>
        </div>
    </div>

    <!-- ========================= /LINKS SECTION ========================= -->


    <!-- ========================= FOOTER SECTION ========================= -->
    <div class="footer">
        <div class="container">
            <div class="footer__wrapper">

                <div class="footer__item">
                    <span class="footer__text">&copy; Copyright Laptop Serviss. All Rights Reserved</span>
                    <span class="footer__text">Designed by Novamedia.lv</span>
                </div>

                <div class="footer__item">
                    <a href="https://www.facebook.com/LaptopServiss" target="_blank" class="icon-fb"></a>
                </div>

            </div>
        </div>
    </div>
    <!-- ========================= /FOOTER SECTION ========================= -->


    <div class="modal hidden">
        <div class="form_container">
            <button class="btn--close-modal">&times;</button>
            <form action="sender.php" method="post">
                <input type="text" class="name" name="name" placeholder=<?php echo $lang['modal_name'] ?> required>
                <input type="text" class="phone" name="phone" placeholder=<?php echo $lang['modal_tel'] ?>>
                <input type="email" name="email" placeholder=<?php echo $lang['modal_email'] ?> required>
                <textarea name="text" id="" cols="30" rows="10" placeholder=<?php echo $lang['modal_text'] ?>></textarea>
                <button type="button" class="send-form"><?php echo $lang['modal_btn'] ?></button>
                <div class="status"></div>
            </form>
        </div>
    </div>
    <div class="overlay hidden"></div>


    <script src="app.js"></script>
</body>

</html>