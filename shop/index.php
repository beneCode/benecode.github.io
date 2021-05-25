<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

    <script src="https://kit.fontawesome.com/a6e2755b4d.js" crossorigin="anonymous"></script>
    
    <script src="./JS/logo_JS.js" defer></script>

    <link rel="stylesheet" href="./CSS/nav_bar_CSS.css">
    <link rel="stylesheet" href="./CSS/logo_CSS.css">

    <link rel="stylesheet" href="./login_sign-up/login_nav_bar.css">
    
    <link rel="stylesheet" href="./CSS/scroll-bar.css">
    
    <link rel="stylesheet" href="./footer/footer.css">
    <link rel="stylesheet" href="./footer/footer-general.css">
    <link rel="stylesheet" href="./footer/general-information.css">

    <?php
        require_once('./php/dane_bazy_danych/db_info.php');
        require_once('./php/dane_bazy_danych/db_connect.php');

        //łączenie z bazą
        $connect = getConnect($host, $user, $password, $db);

        //ustawienie zestawu znaków klienta
        $connect->set_charset('utf8');

        if(ISSET($_GET['mode']))
        {
            if(FILE_EXISTS("{$_GET['mode']}.php"))
            {
                include("{$_GET['mode']}.php");
            }
            else
            {
                echo "nie ma takiego pliku";
            }
        }
            
        //zamykanie połączenia z bazą
        disConnect($connect);
    ?>

</head>
<body>
    <a href="./index.php" id="logo-link"></a>
    
    <header id="nav-bar">
        <svg id="logo" viewBox="-2000 -1000 4000 2000">
            <defs>
                <linearGradient id="gradient" y1="30%" y2="40%" y3="100%">
                    <stop stop-color="#fd8585" offset="30%"/>
                    <stop stop-color="#FD4444" offset="40%"/>
                    <stop stop-color="#fd8585" offset="100%"/>
                </linearGradient>
            </defs>

            <path id="stroke" d="M354-354A500 500 0 1 1 354 354L-354-354A500 500 0 1 0-354 354z"></path>
            <use xlink:href="#stroke" stroke-dasharray="1570 5143" stroke-dashoffset="6713px" stroke="url(#gradient)"></use>    
        </svg>

        <ul class="holder">
            <li class="holder-li"><a class="holder-a" href="#">Konto</a>
                <ul class="lower-holder">
                    <li class="lower-holder-li"><button onClick="window.location='./login_sign-up/login/login.html';" id="button-zaloguj">Zaloguj się</button></li>
                    <li class="lower-holder-li" id="logowanie-div-li"><div id="logowanie-div"><div>Nie masz konta?</div></div></li>
                    <li class="lower-holder-li"><button onClick="window.location='./login_sign-up/sign-up/sign-up.html';" id="button-zajerestruj">Załóż konto</button></li>
                </ul>
            </li>

            <li class="holder-li"><a class="holder-a" href="#">Koszyk</a>
                <ul class="lower-holder">
                    <li class="lower-holder-li">Item 1</li>
                    <li class="lower-holder-li">Item 2</li>
                </ul>
            </li>
        </ul>
    </header>

</body>

<footer class="footer">
    <div class="footer-general">
        <div class="general-information">

            <div class="information">
                <h3 title="Zamówienia" class="orders_1">Zamówienia</h3>

                <ul class="orders_2">
                    <li class="orders_3">
                        <a class="orders_4" href="./footer/orders/delivery.html">Dostawa</a>
                    </li>

                    <li class="orders_3">
                        <a class="orders_4" href="./footer/orders/raty.html">Raty</a>
                    </li>

                    <li class="orders_3">
                        <a class="orders_4" href="./footer/orders/insurance.html">Ubezpieczenia</a>
                    </li>

                    <li class="orders_3">
                        <a class="orders_4" href="./footer/orders/returns.html">Zwroty</a>
                    </li>
                </ul>

            </div>

            <div class="information">
                <h3 title="Inspiracje" class="orders_1">Inspiracje</h3>

                <ul class="orders_2">
                    <li class="orders_3">
                        <a class="orders_4" href="./footer/inspirations/promotions.html">Promocje</a>
                    </li>

                    <li class="orders_3">
                        <a class="orders_4" href="./footer/inspirations/closing_sale.html">Wyprzedaż</a>
                    </li>

                    <li class="orders_3">
                        <a class="orders_4" href="./footer/inspirations/guides.html">Poradniki</a>
                    </li>
                </ul>
            </div>

            <div class="information">
                <h3 title="Ogólne" class="orders_1">Ogólne</h3>

                <ul class="orders_2">
                    <li class="orders_3">
                        <a class="orders_4" href="./footer/general/about_us.html">O nas</a>
                    </li>

                    <li class="orders_3">
                        <a class="orders_4" href="./footer/general/regulations.html">Regulamin</a>
                    </li>

                    <li class="orders_3">
                        <a class="orders_4" href="./footer/general/privacy_policy.html">Polityka prywatności</a>
                    </li>
                </ul>
            </div>


            <div class="information">
                <div class="contact-general">
                    <p title="Kontakt" class="orders_1">Kontakt</p>
                    <h5 class="orders_4">Nr.Tel: 69 420 00 00</h5>
                        <p class="orders_4" style="font-size: 15px; margin-left: 15px;">
                            pon - pt :      8:00 - 21:00<br>
                            sob - niedz :   8:00 - 19:00
                        </p>
                        <br>
                        <h5 class="orders_4" style="font-size: 15px;">
                            Email: shop@shop.pl
                        </h5>
                </div>


            </div>

        </div>
    </div>

</footer>
</html>