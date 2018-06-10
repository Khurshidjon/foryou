<!DOCTYPE html>
<html lang="en">
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
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
</head>
<body>
<section>
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
</section>
<section class="grid">
    <div class="bl-top">
        <div class="top-inner hleb-kroshka">
            <a href="#0" target="_self">Home</a>
            <a href="#0" class="divider2"><span> > </span></a>
            <a href="#0" target="_self">Store</a>
        </div>
    </div>
    <div class="wrap innerwrp">
        <div class="bl-top bltop2"> <!--sorting top panel-->
            <div class="top-inner t_i2">
                <p>Sorting</p>
                <div class="filt">
                    <select name="filtering" id="filtering">
                        <option value="" disabled selected>Tiers</option>
                        <optgroup label="TIER 4">
                            <option value="">Lynx</option>
                            <option value="">Vulpecula</option>
                            <option value="">Lacerta</option>
                        </optgroup>
                        <optgroup label="TIER s4">
                            <option value="">S Lynx</option>
                            <option value="">S Vulpecula</option>
                            <option value="">S Lacerta</option>
                        </optgroup>
                        <optgroup label="TIER 5">
                            <option value="">Scorpius</option>
                            <option value="">Pavo</option>
                            <option value="">Monocores</option>
                            <option value="">Vela</option>
                        </optgroup>
                        <optgroup label="TIER s5">
                            <option value="">S Scorpius</option>
                            <option value="">S Pavo</option>
                            <option value="">S Monocores</option>
                        </optgroup>
                        <optgroup label="TIER 6">
                            <option value="">Fornax</option>
                            <option value="">Centaurus</option>
                            <option value="">Sagitta</option>
                            <option value="">Serpens</option>
                            <option value="">Cygnus</option>
                            <option value="">Cepheus</option>
                        </optgroup>
                    </select>
                    <a href="#0" class="sorting">All</a>
                    <a href="#0" class="sorting">Android</a>
                    <a href="#0" class="sorting">IOS</a>
                </div>
            </div>
        </div> <!--sorting top panel end, AND starp lots-->
@foreach($tanks as $tank)
        <div class="1/3"> <!--lot 1-->
            <div class="lot vip-lot">
                <div class="lot-body">
                    <img src="{{ asset('storage').'/'.$tank->photos->first()->filename }}" alt="tank">
                        <div class="platform">
                        <i class="fab fa-android"></i>
                    </div>
                </div>
                <div class="lot-footer">
                    <div class="left">
                        <h4> <a data-fancybox="modal" data-src="#lotID2054486" href="javascript:;">T6: SAGITTA</a></h4>
                        <span><i class="fas fa-calendar-alt"></i> Today</span>
                    </div>
                    <h3 id="price_for_lot">$35</h3>
                </div>
                <div style="display: none;" id="lotID2054486" class="myfancy vip-lot"> <!-- fancy box mopdal start-->
                    <div class="lotm">
                        <div class="lotm-header">
                            <h3>TIER 6: SAGITTA</h3>
                        </div>
                        <div class="lotm-body">
                            <div id="wrapper">
                                <div class="rslides_container">
                                    <div class="slick-carousel">
                                        @foreach($tank->photos as $photo)
                                            <div><img src="{{asset('storage').'/'.$photo->filename}}" alt="" /></div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="mytable">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td> Platform: <i class="fas fa-microchip"></i></td>
                                        <td>Android</td>
                                    </tr>
                                    <tr>
                                        <td> Diamond: <i class="fas fa-gem"></i></td>
                                        <td>{{$tank->deamont}}</td>
                                    </tr>
                                    <tr>
                                        <td> Cash: <i class="far fa-money-bill-alt"></i></td>
                                        <td>{{$tank->cash}}</td>
                                    </tr>
                                    <tr>
                                        <td> Armory: <i class="fa fa-wrench" aria-hidden="true"></i></td>
                                        <td>{{$tank->armory}}</td>
                                    </tr>
                                    <tr>
                                        <td> Thech.: <i class="far fa-chart-bar"></i></td>
                                        <td>5/11/8/19/14/6</td>
                                    </tr>
                                    <tr>
                                        <td>Elite: <i class="fa fa-bolt" aria-hidden="true"></i></td>
                                        <td>32 day</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="seller-panel">
                                <div class="seller-l">
                                    <p>SELLER: <span> Ivanov Ivan</span> </p>
                                    <p>COUNTRY: <span>Senegal, Marli</span> </p>
                                    <p>PARTICIPANT OF GUARANTOR: <span>Important</span> </p>
                                    <p>SELECTIVE GUARANTOR: <span>Danatella</span> </p>
                                    <p>PERSONAL MEETING: <span>YES</span> </p>
                                </div>
                                <div class="seller-r">
                                    <div class="seller-bav">
                                        <a href="javascript:;" id="sharing" target="_self"><i class="fas fa-share-alt"></i></a>
                                        <div class="share-panel">
                                            <ul>
                                                <li><a href="" class="gp"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="" class="vk"><i class="fab fa-vk"></i></a></li>
                                                <li><a href="" class="tl"><i class="fab fa-telegram-plane"></i></a></li>
                                                <li><a href="" class="ins"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="" class="wei"><i class="fab fa-whatsapp"></i></a></li>
                                                <li><a href="" class="line"><i class="fab fa-line"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h3>$ 25</h3>
                                </div>
                            </div>
                            <div class="btn-grp garant">
                                <a href="javascript:;" id="show1" onclick="shownum1()"><i class="fas fa-phone" ></i> Show number</a>
                            </div>
                        </div>
                        <div class="lotm-footer">
                            <ul>
                                <li> <a href="" id="data_posting"><i class="fas fa-calendar-alt"></i> 21.12.2018</a></li>
                                <li> <a href="" id="view_count"><i class="fas fa-eye"></i> 3</a> </li>
                                <li><i class="fas fa-thumbs-up"></i> 2</li>
                                <li><i class="fas fa-thumbs-down"></i> 0</li>
                                <li> <a href="javascript:;" id="addcomment"><i class="fas fa-comment-alt"></i> Comments <span>2</span> </a></li>
                            </ul>
                            <a id="user-profile" data-fancybox="modalff" data-src="#logIN" href="javascript:;" title="Remove lot"> <i class="fas fa-trash"></i></a>
                            <div style="display: none;" id="logIN" class="login-modal">
                                <div class="wrap-modal" style="height: 275px; margin-top: 10px;">
                                    <div class="login-form">
                                        <h3>REMOVE LOT</h3>
                                        <div class="login-panel">
                                            <div class="inp-group">
                                                <label for="login">Email
                                                    <input type="text" id="login" name="login" placeholder="Yourmail@mail.com"></label>
                                            </div>
                                            <div class="inp-group">
                                                <label for="idlot">IDlot
                                                    <input type="text" id="idlot" name="idlot" placeholder="AA123456"></label>
                                            </div><div class="btm">
                                                <label>
                                                    <input class="radio-r" type="radio" name="radio-test" checked>
                                                    <span class="radio-custom"></span>
                                                    <span class="label">I sold here</span>
                                                </label>
                                                <label>
                                                    <input class="radio-r" type="radio" name="radio-test">
                                                    <span class="radio-custom"></span>
                                                    <span class="label">I sold elsewhere.</span>
                                                </label>
                                                <label>
                                                    <input class="radio-r" type="radio" name="radio-test">
                                                    <span class="radio-custom"></span>
                                                    <span class="label">I changed my mind. not selling.</span>
                                                </label>
                                                <label>
                                                    <input class="radio-r" type="radio" name="radio-test">
                                                    <span class="radio-custom"></span>
                                                    <span class="label">Other reason</span>
                                                </label>
                                            </div>
                                            <a href="my-page.html" class="log-in">SUBMIT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-panel">
                            <div class="input-area"><textarea name="textarea" placeholder="TextArea"></textarea>
                                <button>send</button>
                            </div>
                            <ul class="coms">
                                <li class="com1">
                                    <img src="img/default-user.png" alt="" width="25" height="30">
                                    <div class="com-area">
                                        <h4>Rockky</h4>
                                        <p>Nice lot</p>
                                        <p>21.12.2018 at 20:41</p>
                                    </div>
                                </li>
                                <li class="com2">
                                    <img src="img/default-user.png" alt="" width="25" height="30">
                                    <div class="com-area">
                                        <h4>Hoji</h4>
                                        <p>I want buy</p>
                                        <p>21.12.2018 at 20:41</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endforeach
        <div class="bl-bottom bltop2">
            <div class="bottom-inner">
                <div class="pagination">
                    <a href=""><i class="fas fa-chevron-left"></i> LAST</a>
                    <a href="" class="active-page">1</a>
                    <a href="">2</a>
                    <a href="">3</a>
                    <a href="">4</a>
                    <a href="">...</a>
                    <a href="">8</a>
                    <a href="">9</a>
                    <a href="">10</a>
                    <a href="">NEXT <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
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
                <a id="upbutton" href="#" ><i class="fas fa-arrow-up"></i></a>
            </footer>
        </div>
    </div>
</section>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/bootstrap_slider.js"></script>
<script  src="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.0/jquery.fancybox.min.js"></script>
<script  src="js/fancybox-lots.js"></script>
<script  src="js/jquery.nice-select.min.js"></script>

<script  src="js/index.js"></script>


</body>
</html>