<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TANK$TORE - PREMIUM SHOPPING</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">
    <link rel="stylesheet" href="https://rawgit.com/adrotec/knockout-file-bindings/master/knockout-file-bindings.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.0/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/fancybox-lots.css">
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
            <a href="#0" target="_self">Sale tank</a>
        </div>
    </div>
    <div class="wrap">
        <form id="regForm" action="{{route('create.tank')}}" enctype="multipart/form-data" method="post">
            @csrf
            <!-- Circles which indicates the steps of the form: -->
            <div class="indicators">
                <span class="step">1</span>
                <span class="step">2</span>
                <span class="step">3</span>

            </div>
            <h1>SALE TANK</h1>

            <div class="tab"> <h3 class="tittletab">Account details</h3>
                <div class="form-grp-50">
                    <select name="tiers1" id="tiers1">
                        <option value="tierss" disabled selected>Tiers</option>
                        <option value="tier1">TIER 1</option>
                        <option value="tier2">TIER 2</option>
                        <option value="tier3">TIER 3</option>
                        <option value="tier4">TIER 4</option>
                        <option value="tier4s">TIER s4</option>
                        <option value="tier5">TIER 5</option>
                        <option value="tier5s">TIER s5</option>
                        <option value="tier6">TIER 6</option>
                    </select>
                    <select name="tanks1" id="tanks1">
                        <option value="tankss" disabled selected>Tanks</option>
                        <option value="tank1" >Tank 1</option>
                        <option value="tank2" >Tank 2</option>
                        <option value="tank3" >Tank 3</option>
                    </select>
                </div>
                <div class="form-grp-50">
                    <div class="inp">
                        <label for="input">Diamond</label>
                        <input type="text" name="deamont" placeholder="1 200" >
                    </div>
                    <div class="inp">
                        <label for="input">Cash</label>
                        <input type="text" name="cash" placeholder="2 500 470" >
                    </div>


                </div>
                <div class="form-grp-50">
                    <div class="inp">
                        <label for="input">Armory</label>
                        <input type="text" name="armony" placeholder="00/00/00/00/00" data-mask="00/00/00/00/00">
                    </div>
                    <div class="inp">
                        <label for="input">Tech.</label>
                        <input type="text" name="tech" placeholder="00/00/00/00/00/00" data-mask="00/00/00/00/00/00">
                    </div>
                </div>
                <div class="form-grp-100">
                    <div class="inp">
                        <label for="input">Elite</label>
                        <input type="text" name="elite" placeholder="45 day" data-mask="00 day">
                    </div>
                    <!--
                            <div class="inp">
                               <label for="input">Shards</label>
                               <input type="text" name="input" placeholder="Diamond">
                           </div>
                    -->
                </div>
                <div class="form-grp-100">
                    <p>Please, uoload 5 screenshot</p>
                    <div class="well" data-bind="fileDrag: multiFileData">
                        <div class="imgtwe">
                            <!-- ko foreach: {data: multiFileData().dataURLArray, as: 'dataURL'} -->
                            <img class="img-rounded thumb" data-bind="attr: { src: dataURL }, visible: dataURL">
                            <!-- /ko -->
                            <!-- <div data-bind="ifnot: fileData().dataURL">
                                <label class="drag-label">Drag files here</label>
                            </div> -->
                            <div class="col-md-6">
                                <input type="file" name="photos[]" multiple data-bind="fileInput: multiFileData, customFileInput: {
              buttonClass: 'btn btn2',
              fileNameClass: 'disabled form-control',
              onClear: onClear,
            }" accept="image/*">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-grp-100 pltf">
                    <p>Choose platform:</p>
                    <div class="radio-row">
                        <input type="radio" id="r1" name="rr" checked />
                        <label for="r1"><span class="rt">Andriod</span></label>
                    </div>
                    <div class="radio-row">
                        <input type="radio" id="r2" name="rr" />
                        <label for="r2"><span class="rt">IOS</span></label>
                    </div>


                </div>
                <div class="form-grp-100">
                    <div class="inp">
                        <label for="input">Price for lot</label>
                        <input type="text" name="price" placeholder="$100" data-mask="$100">
                    </div>
                </div>


            </div>
            <div class="tab"> <h3 class="tittletab">Seller information</h3>
                <div class="form-grp-100">
                    <label for="input2">Name</label>
                    <input type="text" name="name" placeholder="Name"/>
                </div>
                <div class="form-grp-100">
                    <label for="input2">Phone number</label>
                    <input type="text" name="phone" placeholder="+ 123456789"/>
                </div>
                <div class="form-grp-100 country">
                    <select name="country" id="">
                        <option value="" disabled selected>Country</option>
                        <option value="france">France</option>
                        <option value="italy">Italy</option>
                        <option value="russia">Russıa</option>
                        <option value="brasil">Brasıl</option>
                        <option value="usa">USA</option>
                    </select>
                </div>
                <div class="form-grp-100">
                    <div class="inp">
                        <label for="input">Region/city</label>
                        <input type="text" name="region" placeholder="Region/city">
                    </div>
                </div>
                <div class="form-grp-100 garant">
                    <select name="guarantor" id="">
                        <option value="" disabled selected>Selective guarantor</option>
                        <option value="1">Mark Stiven</option>
                        <option value="2">Artem Solovev</option>
                        <option value="3">Ivan Arhipov</option>
                        <option value="4">Del Pe Niro</option>
                        <option value="5">Danatella</option>
                    </select>
                </div>
                <div class="form-grp-100 meeting">
                    <select name="metting" id="">
                        <option value="" disabled selected>Personal meeting</option>
                        <option value="yes">YES</option>
                        <option value="no">NO</option>

                    </select>
                </div>
            </div>
            <div class="tab"> <h3 class="tittletab">Added services</h3>
                <div class="radio-panel">
                    <div class="plan-vip pln">
                        <input type="radio" id="radio01" name="plans" />
                        <label for="radio01"><span>VIP LOT. <i>[Turbo sale]</i> <br>The cost of VIP services - $1.49 / 3 day. After completing the form you go to the payment site.</span></label>
                    </div>
                    <div class="plan-simple pln">
                        <input checked type="radio" id="radio02" name="plans" />
                        <label for="radio02"><span>SIMPLE LOT. <br>Free sale.</span></label>
                    </div>
                </div>
                <div class="agree">
                    When you confirm the form, you agree to the terms of this<a href="#0" id="agreement-link"> User Agreement</a>.
                    <div id="agreement">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi assumenda aut beatae tenetur culpa. Repudiandae aperiam voluptas omnis repellat cupiditate mollitia quos quidem natus consequatur, cumque soluta excepturi sapiente temporibus.</p>
                    </div>
                </div>
            </div>

            <div style="">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </div>

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
                                <option value="tier1">TIER 4</option>
                                <option value="tiers2">TIER s4</option>
                                <option value="tier5">TIER 5</option>
                                <option value="tiers5">TIER s5</option>
                                <option value="tier6">TIER 6</option>
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


<!--  <script  src="js/index.js"></script>-->

<script  src="js/jquery.nice-select.min.js"></script>
<script  src="js/maskplugin.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.1.0/knockout-min.js"></script>

<script src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.0/jquery.fancybox.min.js"></script>
<script  src="js/fancybox-lots.js"></script>
<script src="https://rawgit.com/adrotec/knockout-file-bindings/master/knockout-file-bindings.js"></script>

<script  src="{{asset('js/saletank.js')}}" type="text/javascript"></script>
<script>
    //select, form sale tank
    var tiersArr = {
        'tier1': ['Hydrus', 'Draco', 'Dorado'],
        'tier2': ['Ursa', 'Sirius', 'Apus'],
        'tier3': ['Aquila', 'Lipus', 'Corvus', 'Lyra'],
        'tier4': ['Lynx', 'Vulpecula', 'Lacerta'],
        'tier4s': ['S Lynx', 'S Vulpecula', 'S Lacerta'],
        'tier5': ['Scorpius', 'Pavo', 'Monocores'],
        'tier5s': ['S Scorpius', 'S Pavo', 'S Monocores'],
        'tier6': ['Fornax', 'Centaurus', 'Sagitta', 'Serpens', 'Cygnus', 'Cepheus'],
    }

    var tiers_select = document.getElementById('tiers1');
    tiers_select.addEventListener('change', func);
    tiers_select.addEventListener('change', toParagraph);

    var tanks_select = document.getElementById('tanks1');
    tanks_select.addEventListener('change', toParagraph);

    function func(){
        tanks_select.innerHTML = '';
        var selected_country = tiers_select.value;
        for (var i = 0; i < tiersArr[selected_country].length; i++) {
            var new_option = document.createElement('option');
            new_option.innerHTML = tiersArr[selected_country][i];
            tanks_select.appendChild(new_option);
        }
    }

    var parag = document.querySelector('p');
    function toParagraph() {
        parag.innerHTML = '';
        parag.innerHTML = tiers_select.options[tiers_select.selectedIndex].text + ','
            +tanks_select.options[tanks_select.selectedIndex].text;
    }

</script>


</body>
</html>
