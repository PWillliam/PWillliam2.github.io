<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/style/main.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="./assets/style/swiper.css">
    <script src="./assets/script/swiper.js"></script>
    <title>PREMIUM TEAS</title>
</head>
<body>
    <header>
        <div class="title">
            <div>
                <h1>PREMIUM TEAS</h1>
                <h3>UNIQUE TEA EXPERIENCE 🇨🇦</h3>
            </div>
            <div>
                <box-icon type='logo' name='twitter'></box-icon>
                <box-icon name='instagram' type='logo'></box-icon>
                <box-icon name='facebook' type='logo'></box-icon>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="">BLACK TEA</a></li>
                <li><a href="">GREEN TEA</a></li>
                <li><a href="">HERBAL</a></li>
                <li><a href="">1LB BAGS</a></li>
                <li><a href="">DECAF</a></li>
                <li><a href="">COLLECTIONS</a></li>
                <li><a href="">FALL TEA</a></li>
                <li><a href="">GIFTS</a></li>
                <li><a href="">MORE</a></li>
                <li><a href="">SALE</a></li>
                <li><input type="text" id="search" placeholder="Search"> <box-icon name='search' color='#c2c2c2'></box-icon></li>
            </ul>
        </nav>
    </header>

    <div class="swiper carrousel">
        <div class="swiper-wrapper">
        <!-- div.slide${Slide $}*5 -->
            <div class="swiper-slide slide1">Slide 1</div>
            <div class="swiper-slide slide2">Slide 2</div>
            <div class="swiper-slide slide3">Slide 3</div>
            <div class="swiper-slide slide4">Slide 4</div>
            <div class="swiper-slide slide5">Slide 5</div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <script src="./assets/script/carousel.js"></script>
</body>
</html>