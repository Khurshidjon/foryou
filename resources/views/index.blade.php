<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>TANK$TORE - PREMIUM SHOPPING</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.0/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

</head>
<body>

<section class="wrap_home">
    <div class="h2-container">
        <div class="logo-link def101">
            <img src="img/ts3.png" alt="tankstore" width="220" height="180">
            <a href="{{route('index')}}" class="brand2">TANKSTORE</a>
        </div>
        <div class="def">
            <div class="sale-link def-inner" onClick="window.location='{{route('saletank')}}'">
                <div class="wrap-sale"></div>
                <div class="title4">
                    <h4><i class="fas fa-long-arrow-alt-up"></i> SALE TANK</h4>
                </div>
            </div>
        </div>
        <div class="def">
            <div class="buy-link def-inner" onClick="window.location='{{route('store')}}'">
                <div class="wrap-sale"></div>
                <div class="title5">
                    <h4><i class="fas fa-long-arrow-alt-down"></i> BUY TANK</h4>
                </div>
            </div>

        </div>
        <div class="def">
            <div class="guarantors-link def-inner" onClick="window.location='guarantors.html'">
                <div class="wrap-sale"></div>
                <div class="title6">
                    <h4><i class="fas fa-shield-alt"></i> GUARANTORS</h4>
                </div>
            </div>

        </div>
        <div class="def">
            <div class="vipadss-link def-inner">
                <div class="wrap-sale"></div>
                <div class="vipadss v1">
                    <h5>RENTAL AUTOBOT</h5>
                    <p>
                        Rental Autobot. It works 24 hours. Whatsap and telegram: +123456789
                    </p>
                </div>
                <div class="vipadss v3">
                    <h5>TOP run or Hall of Flame</h5>
                    <p>
                        To fill a score for your tank and legion. Run to the Top. VibER: +987654321</p>
                </div>
                <div class="navsvip">
                    <button class="forv1"><i class="fas fa-caret-left"></i></button>
                    <button class="forv3"><i class="fas fa-caret-right"></i></button>
                </div>

                <div class="footvips">
                    <p>VIP CHAT <a href="#0"><i class="fas fa-pencil-alt"></i></a></p>
                </div>

            </div>

        </div>
        <div class="def100">
            <div class="contact-link def-inner">
                <h4><i class="fas fa-newspaper"></i> NEWS</h4>
                <p>Commanders! We will be taking the Iron Force servers down for maintenance on 12/04/2018 at 2.30am UTC+0. To Find out  or check the details of Empire Wars Season 2 head over to the Iron Force forum!<span class="datanews">14.01.2018</span></p>

            </div>

        </div>
        <div class="govip-link">
            <p>Do you want a quick sale?</p>
            <img src="" alt="" width="" height="">
            <a href="contact.html"><i class="fas fa-long-arrow-alt-right fasarw"></i> get VIP</a>
        </div>
    </div>

</section>
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/bootstrap_slider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.0/jquery.fancybox.min.js"></script>
<script  src="js/fancybox-lots.js"></script>
<script  src="js/jquery.nice-select.min.js"></script>
<script  src="js/index.js"></script>
<script  src="js/user-page.js"></script>
<script>
    $(document).ready(function(){
        $('.forv3').click(function(){
            $('.v1').hide();
            $('.v3').show();
        });
        $('.forv1').click(function(){
            $('.v3').hide();
            $('.v1').show();
        });
    });
</script>

</body>
</html>
