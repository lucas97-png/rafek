<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siat My Cat</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>
<body>
    <a id="button">
        <i class="fas fa-arrow-up"></i>
    </a>
    <header class="site__title">
        <div class="title__logo">
            <img src="assets/logo.jpg" alt="">
        </div>
        <div class="title__media">
            <h2 class="title__name">Rafał Basiński <br> Siatkowanie Balkonów</h2>
            
                <div class="widget__box">
                    <div class="media__widget">
                        <i class="fas fa-phone-square-alt"></i>
                        <a href="tel: 123456789" class="widget__phone">123456789</a>
                    </div>
                    <div class="media__widget">
                        <i class="fas fa-map-marker-alt"></i>
                        <p class="widget__location">Wrocław, Polska</p>
                    </div>
                </div>
        </div>
        <div class="title__menu">
            <ul>
                <li><a href="#" class="1">O mnie</a></li>
                <li><a href="#" class="2">Wycena</a></li>
                <li><a href="#" class="3">Kontakt</a></li>
            </ul>
        </div>
    </header>

    <section class="info__main">
        <div class="main__imagebox">
            <img src="assets/mainsiatka.png" alt="" srcset="">
        </div>
        <p class="main__information">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, enim at error ipsum modi ullam magnam aliquid aut, ex quidem id ab nihil. Dolorem, ipsam minus, quasi vel hic consequatur aliquid quos fuga libero rem minima excepturi culpa unde voluptates.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quis ipsum perspiciatis sit sequi molestias incidunt assumenda porro, fugiat provident!
        </p>
    </section>
    
    <section class="site__images">
        <div class="images__wrapper">
            <div class="imagebox">
                <img src="assets/siatka1.png" alt="" srcset="">
                <span>Trwałość i skuteczność</span>
            </div>
            <div class="imagebox">
                <img src="assets/siatka2.png" alt="" srcset="">
                <span>Atrakcyjne ceny</span>
            </div>
            <div class="imagebox">
                <img src="assets/siatka3.png" alt="" srcset="">
                <span>Proklienckie podejście</span>
            </div>
            
        </div>
        <p class="images__text">Montaż siatek balkonowych często jest koniecznością w miastach, gdzie populacja gołębi bywa naprawdę duża. Jeśli chce się uniknąć zanieczyszczania balkonu przez ptaki czy sytuacji, w której zdecydują się one na gniazdowanie na balkonie, najlepiej wybrać trwałe i wytrzymałe siatki polietylenowe przeciw ptakom.</p>
        <p class="images__text">Siatki balkonowe mogą być również wykorzystane do ochrony kotów. Koty są z natury ciekawskie i jeśli chce się im zapewnić bezpieczeństwo i uchronić je przed upadkiem ze znacznej wysokości lub ucieczką, warto zdecydować się na montaż siatki na balkonie.</p>
    </section>
    <section class="price">
        <h2 class="price__title">
            Wycena montażu - ile kosztuje założenie siatki
        </h2>
        <p class="price__text">
            Każdy balkon jest nieco inny, a siatka balkonowa zwykle przygotowywana jest na wymiar. Dlatego w przypadku montażu siatki na balkonie cena jest zróżnicowana i zależy m.in. od metrażu powierzchni do osiatkowania i wybranego rodzaju siatki.

        </p>    
    </section>
    <section class="contact__wrapper">
        <div class="contact__details">
            <div class="details__widget">
                <i class="fas fa-phone-square-alt"></i>
                <a href="tel:123456789"class="widget__phone">123456789</a>
            </div>
            <div class="details__widget">
                <i class="far fa-envelope"></i>
                <a href="mailto: lukaszwrobel1997@gmail.com" class="widget__email">basiooorek123xd@gmail.com</a>
            </div>
        </div>
        <form class="contact__form" method="POST" name="contact__form" action="contact_form.php">
            <div class="contact__item">
                <label for="">Imię i nazwisko:</label>
                <input type="text" required name="name">
            </div>
            <div class="contact__item">
                <label for="">Adres email:</label>
                <input type="email" required name="email">
            </div>
            <div class="contact__item">
                <label for="">Treść wiadomości:</label>
                <textarea name="message" id="message" cols="30" rows="10" required></textarea>
            </div>
            <div class="contact__item">
                <input type="submit" class="submit__button">
            </form>
        </div>
    </section>

    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>