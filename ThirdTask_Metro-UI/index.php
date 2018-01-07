<html><head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, one page">
    <meta name="author" content="Gojal">

    <link rel="shortcut icon" type="assets/image/x-icon" href="gladiator.png">
    <title>Gladiators GYM</title>

    <link href="assets/css/metro.css" rel="stylesheet">
    <link href="assets/css/metro-icons.css" rel="stylesheet">
    <link href="assets/css/metro-responsive.css" rel="stylesheet">
    <link href="assets/css/metro-schemes.css" rel="stylesheet">

    <script src="assets/js/jquery-2.1.3.min.js"></script>
    <script src="assets/js/metro.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/google/code-prettify/master/loader/prettify.css">
<body>
    <div><header class="app-bar fixed-top navy" data-role="appbar">
    <div class="container">
        <a href="index.php" class="app-bar-element branding"><img src="gladiator.png" style="height: 28px; display: inline-block; margin-right: 10px;"> Home</a>

        <ul class="app-bar-menu small-dropdown">
            <li data-flexorderorigin="0" data-flexorder="2" class="">
                <a href="#profile"><span class="mif-profile icon"></span> Profile</a>
            </li>
            <li data-flexorderorigin="1" data-flexorder="2">
                <a href="#tools"><span class="mif-books icon"></span> Tools</a>
            </li>

            <li data-flexorderorigin="2" data-flexorder="3">
                <a href="#memberlist"><span class="mif-cart icon"></span> Member List</a>
            </li>

            <li data-flexorderorigin="3" data-flexorder="4">
                <a href="#contact"><span class="mif-contacts-dialer icon"></span> Contact</a>
            </li>
        </ul>

        <span class="app-bar-pull"></span>

    <div class="app-bar-pullbutton automatic" style="display: none;"></div><div class="clearfix" style="width: 0;"></div><nav class="app-bar-pullmenu hidden flexstyle-app-bar-menu" style="display: none;"><ul class="app-bar-pullmenubar hidden app-bar-menu"></ul></nav></div>
</header>
</div><div class="page-content">
        <div class="bg-steel fg-white align-center">
            <div class="container">
                <div class="no-overflow" style="padding-top: 30px">
                    <br>
                    <br>
                    <br>
                    <h1 style="font-size: 4.5rem; line-height: 1" class="text-shadow metro-title text-light">Gladiators GYM</h1>
                    <div class="padding30 sub-leader text-light">
                        Get your ideal body with the <br><b>Gladiators GYM</b>
                        <br>and lose your weight</br>
                    </div>
                    <div class="margin60">
                        <div class="clear-float">
                            <!-- <a href="#"><button class="button big-button block-shadow success loading-pulse lighten">Download Now</button></a> -->
                            <a href="#memberlist"><button class="button big-button block-shadow warning loading-cube lighten">JOIN NOW</button></a>
                            <!-- <a href="#memberlist"><button class="button big-button block-shadow info loading-cube lighten">PESAN SEKAANG!</button></a> -->
                        </div>
                    </div>
                    <div class="grid no-margin-bottom" style="margin-top: 80px" id="g1">
                        <div class="row cells3">
                            <div class="cell no-overflow" style="height: 85px">
                                <div class="bg-yellow fg-white block-shadow" style="height: 85px; padding-top: 20px; margin-top: 0px;">
                                    <h2 class="text-light">ECONOMICAL</h2>
                                </div>
                            </div>
                            <div class="cell no-overflow" style="height: 85px">
                                <div class="bg-green fg-white block-shadow" style="height: 85px; padding-top: 20px; margin-top: 0px;">
                                    <h2 class="text-light">HEALTHY</h2>
                                </div>
                            </div>
                            <div class="cell no-overflow" style="height: 85px">
                                <div class="bg-red fg-white block-shadow" style="height: 85px; padding-top: 20px; margin-top: 0px;">
                                    <h2 class="text-light">SIMPLE</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        $(function(){
                            setTimeout(function(){
                                $("#g1 .cell > div:eq(0)").animate({
                                    'margin-top': 0
                                }, 500, 'easeOutBounce');
                                $("#g1 .cell > div:eq(1)").animate({
                                    'margin-top': 0
                                }, 1000, 'easeOutBounce');
                                $("#g1 .cell > div:eq(2)").animate({
                                    'margin-top': 0
                                }, 1500, 'easeOutBounce');
                            }, 500);
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="fg-dark">
            <div id="profile" class="container">
                <div class="padding80" style="padding-top: 40px">
                    <div class="">
                        <div class="grid">
                            <div class="row">            		
                                <div class="cell padding20 clear-float">
					               <div>
	                                    <img id="book_logo" src="assets/image/pexels-photo-685531.jpeg" class="place-left" style="height: 190px; margin-right: 20px;">
	                                    <h2 class="text-light">Gladiators GYM</h2>
	                                    <h3 class="fg-red">About Gladiators Gym</h3>
	                                    <div class="fg-dark">
	                                        Gladiators Gym is a sports venue located in the city of Yogyakarta. Gladiators Gym can make it easy for visitors to be able to do sports such as running, weightlifting, and others and can help visitors in losing weight.
	                                    </div>
					               </div>
	                               </a>
				                </div>
                                <div class="cell padding20 clear-float">
                                   <div>
                                        <img id="book_logo" src="assets/image/pexels-photo-700446.jpeg" class="place-right" style="height: 190px; margin-right: 20px;">
                                        <h1 class="">Benefits</h1>
                                        <ol class="numeric-list square-marker">
                                            <li>The body becomes fit and healthy</li>
                                            <li>Help to lose weight</li>
                                            <li>Form a ideal body</li>
                                            <li>Avoided from illness</li>
                                            <li>Easy and practical exercise</li>
                                        </ol>
                                   </div>
                                   </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    <hr class="thin" ></div>
    <div class="fg-dark">
            <div id="tools" class="container">
                <div class="padding80" style="padding-top: 40px">
                    <div class="">
                        <div class="grid">
                            <div class="row">  
                            <div>
                                <h1 class="">Gym Tools</h1>
                                <ol class="numeric-list square-marker">
                                    <li>Dumbble & Barbell</li>
                                    <li>Fitnes Bench</li>
                                    <li>Sit Up Bench</li>
                                    <li>Push Up Grip</li>
                                    <li>Hyper Extension Bench</li>
                                    <li>Abs Crunch Machine</li>
                                    <li>Static Bicycle</li>
                                    <li>Leg Press Machine</li>
                                    <li>Treadmill</li>
                                    <li>Eliptical Machine</li>
                                    <li>Shoulder Press Machine</li>
                                    <li>Others...</li>
                                </ol>
                                </div>                 
                                <div class="cell padding20 clear-float">
                                    <div class="tile-large ol-transparent" data-role="tile">
                                        <div class="tile-content">
                                            <div class="carousel" data-role="carousel" data-height="100%" data-width="100%" data-controls="false">
                                                <div class="slide">
                                                    <img src="assets/image/slides/pexels-photo-414029.jpeg" data-role="fitImage" data-format="fill">
                                                </div>
                                                <div class="slide">
                                                    <img src="assets/image/slides/pexels-photo-1.jpg"  data-role="fitImage" data-format="fill">
                                                </div>
                                                <div class="slide">
                                                    <img src="assets/image/slides/pexels-photo-136404.jpeg"  data-role="fitImage" data-format="fill">
                                                </div>
                                                <div class="slide">
                                                    <img src="assets/image/slides/pexels-photo-136410.jpeg"  data-role="fitImage" data-format="fill">
                                                </div>
                                                <div class="slide">
                                                    <img src="assets/image/slides/pexels-photo-116077.jpeg"  data-role="fitImage" data-format="fill">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer style="background-color: #EFEAE3">
    <div class="bg-steel no-tablet-portrait no-phone">
        <div class="container padding20 fg-white">
            <div class="carousel bg-transparent" data-role="carousel" data-controls="false" data-markers="false" data-effect="fade" data-height="600" style="width: 100%; height: 600px;">
                <div class="slide fg-white">
                    <div id="memberlist" class="container padding40 fg-white">
                        <h3 class="text-light">Join Now! Enjoy an unforgettable experience with <strong>Gladiators GYM</strong></h3>  
                        <form>
                        <div class="grid">
                            <div class="row cells2">
                                <div class="cell">
                                    <div class="input-control modern text iconic" data-role="input">
                                        <input type="text" style="padding-right: 5px;">
                                        <span class="label">Name</span>
                                        <span class="informer">Insert your name</span>
                                        <span class="placeholder" style="display: block;">Full Name</span>
                                        <span class="icon mif-user"></span>
                                    </div>
                                </div>
                                <div class="cell">
                                    <div class="input-control modern text iconic" data-role="input">
                                        <input type="email" style="padding-right: 5px;">
                                        <span class="label">Email</span>
                                        <span class="informer">Inster your email address</span>
                                        <span class="placeholder" style="display: block;">Email Address</span>
                                        <span class="icon mif-mail"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row cells2">
                                <div class="cell">
                                    <div class="input-control modern text iconic" data-role="input">
                                        <input type="number" style="padding-right: 5px;">
                                        <span class="label">Numer Phone</span>
                                        <span class="informer">Insert your number phone</span>
                                        <span class="placeholder" style="display: block;">Number Phone</span>
                                        <span class="icon mif-contacts-dialer"></span>
                                    </div>
                                </div>
                            </div>
                            <div clear-float>
                                <label class="input-control checkbox small-check">
                                <input type="checkbox"">
                                <span class="check"></span>
                                <span class="caption">I agree with the terms and rules that apply!</span>
                            </label>
                            </div>
                            <button action="" class="button big-button block-shadow success loading-pulse lighten" align="align-center"> Join</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact" class="container">
        <div class="cell colspan3 padding20 no-padding-top no-padding-bottom">
            <h2>Contact Us</h2>
            <br>
            <p>
                More Information :
            </p>
            <div>
                <div class="icon mif-home mif-lg"><h3>Jl. Ringroad Utara, Sleman, Yogyakarta</h3></div>
                <div class="icon mif-contacts-dialer mif-lg"><h3>081234567890</h3></span>
                <div class="icon mif-mail mif-lg"><a href="mailto:gladiatorsgym@gmail.com"><h3>gladiatorsgym@gmail.com</h3></a></div>
                <div class="icon mif-facebook mif-lg"><a href="https://#"><h3>gladiatorsgymID</h3></a></div>
                <div class="icon mif-twitter mif-lg"><a href="https://#"><h3>@gladiatorsgym</h3></a></div>
                <div class="icon mif-earth mif-lg"><a href="https://#"><h3>www.gladiatorsgym.com</h3></a></div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="align-center padding20 text-small">
            Copyright 2018 <a href="index.php">Galdiators GYM</a>
        </div>
    </div>
</footer>
</div>
</body>
</html>