<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TANK$TORE - PREMIUM SHOPPING</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">
    <link rel="stylesheet" href="https://rawgit.com/adrotec/knockout-file-bindings/master/knockout-file-bindings.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.0/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<sectoin>
    <div id="langs"> <!--languages panel-->
        <div class="wrap_lang">
            <div class="langs">
                <ul>
                    <li class="lang de"><a href="#0">Deutsch</a></li>
                    <li class="lang en"><a href="#0">English</a></li>
                    <li class="lang es"><a href="#0">Español</a></li>
                    <li class="lang fr"><a href="#0">Français</a></li>
                </ul>
                <ul>
                    <li class="lang it"><a href="#0">Italiano</a></li>
                    <li class="lang ko"><a href="#0">한국</a></li>
                    <li class="lang pt_br"><a href="#0">Por. do Brasil</a></li>
                    <li class="lang ru"><a href="#0">Русский</a></li>
                </ul>
                <ul>
                    <li class="lang tr"><a href="#0">Türkçe</a></li>
                    <li class="lang zh_1"><a href="#0">中國傳統</a></li>
                    <li class="lang zh_2"><a href="#0">中文简体</a></li>
                </ul>
            </div>
        </div>
    </div> <!--languages panel end, AND header start-->
    <header>
        <a href="index.html" class="brand">TANKSTORE</a>
        <div class="right-head">
            <a href="saletank.html" class="saletank"> <span>SALE TANK</span> </a>
            <a href="#0" class="" id="lang_nav"><img src="img/russian-flag-medium.png" alt="russian" width="30" height="30"></a>
        </div>
        <a href="#" class="burger-box">
            <p class="burger">Menu</p>
        </a>
        <nav class="sliding-panel-content">
            <ul class="menu">
                <a href="index.html" class="brand burg">TANKSTORE</a>
                <li><a href="index.html">Home</a></li>
                <li><a href="store.html">Store</a></li>
                <li><a href="guarantors.html">Guarantors</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <div class="donating">
                <a href="#0">DONATE</a>
            </div>
        </nav>
        <div class="sliding-panel-fade-screen"></div>
    </header>

</sectoin>

<section class="grid">
    <div class="bl-top">
        <div class="top-inner hleb-kroshka">
            <a href="#0" target="_self">Home</a>
            <a href="#0" class="divider2"><span> > </span></a>
            <a href="#0">Contact</a>
        </div>
    </div>
    <!--
        <div class="bl-top top2">
           <div class="top-inner">
             <p>Contact us</p>
           </div>
        </div>
    -->
    <div class="wrap">
        <form id="contactForm" action="">
            <h1>CONTACT</h1>
            <div class="form-grp-100">
                <div class="inp">
                    <label for="input">Name</label>
                    <input type="text" name="input" placeholder="Your name">
                </div>
                <div class="inp">
                    <label for="input">E-mail</label>
                    <input type="text" name="input" placeholder="exaple@mail.com">
                </div>
                <div class="inp">
                    <label for="input">Subject</label>
                    <input type="text" name="input" placeholder="Subject">
                </div>
                <div class="form-grp-100 fileupload">
                    <p>Please, upload file</p>
                    <div class="well" data-bind="fileDrag: multiFileData">
                        <div class="imgtwe">
                            <!-- ko foreach: {data: multiFileData().dataURLArray, as: 'dataURL'} -->
                            <img class="img-rounded thumb" data-bind="attr: { src: dataURL }, visible: dataURL">
                            <!-- /ko -->
                            <!-- <div data-bind="ifnot: fileData().dataURL">
                                <label class="drag-label">Drag files here</label>
                            </div> -->
                            <div class="col-md-6">
                                <input type="file" multiple data-bind="fileInput: multiFileData, customFileInput: {
              buttonClass: 'btn btn2',
              fileNameClass: 'disabled form-control',
              onClear: onClear,
            }" accept="image/*">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="txt-are">
                    <label for="input">Your text</label>
                    <textarea name="textarea" placeholder="Enter text"></textarea>
                </div>
            </div>
            <button class="send-cont">SEND</button>
        </form>
    </div>
    <!--
        <div class="bl-bottom">
           <div class="bottom-inner">
             <p>pagination</p>
           </div>
        </div>
    -->
</section>

<section>
    <div class="container">
        <div class="row">
            <footer>
                <div class="subscribe">
                    <h4><i class="fas fa-envelope"></i> SUBSCRIBE TO NEW LOTS</h4>
                    <div class="subs-grp">
                        <div class="one1">
                            <input type="text" placeholder="Type your email adress">
                            <select name="" id="">
                                <option value="" selected disabled>TIERS</option>
                                <option value="">TIER 4</option>
                                <option value="">TIER s4</option>
                                <option value="">TIER 5</option>
                                <option value="">TIER s5</option>
                                <option value="">TIER 6</option>
                            </select>
                        </div>

                        <div class="two2">
                            <button><span>SUBSCRIBE</span> <i class="fas fa-location-arrow"></i></button>
                        </div>

                    </div>
                </div>
                <p class="suggetion">We are glad to talk with you. Contact for suggestions: <a href="mailto:support@tankstore.pro">support@tankstore.pro</a></p>
                <div class="partners">
                    <img src="img/chillingo.jpg" alt="chillingo">
                    <img src="img/ironforce.jpg" alt="ironforce">
                    <img src="img/coolfish.jpg" alt="coolfish">
                </div>
                <p>© Copyright 2018 - Tankstore. All rights reserved.</p>
            </footer>
        </div>
    </div>
</section>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.0/jquery.fancybox.min.js"></script>

<script src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

<script  src="js/fancybox-lots.js"></script>
<script  src="js/jquery.nice-select.min.js"></script>
<script  src="js/index.js"></script>
<script  src="js/saletank.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.1.0/knockout-min.js"></script>
<script src="https://rawgit.com/adrotec/knockout-file-bindings/master/knockout-file-bindings.js"></script>


</body>
</html>
