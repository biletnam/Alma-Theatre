<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Concept of a modern movie ticket booking website." />
        <meta name="keywords" content="cinema, seat booking, ticket, movie" />
        <title>Alma Theatre - Best Movie Experience in Malaysia</title>
        <!-- Dependencies -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link rel="stylesheet" href="<?=VIEW_PATH ?>dependencies/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=VIEW_PATH ?>dependencies/swiper/dist/css/swiper.min.css">
        <link rel="stylesheet" href="<?=VIEW_PATH ?>dependencies/animate.css/animate.min.css">
        <!-- Global CSS  -->
        <link rel="stylesheet" href="<?=VIEW_PATH ?>styles/global.css">
        <!-- Page Design -->
        <link rel="stylesheet" href="<?=VIEW_PATH ?>styles/home.css">
    </head>
    <body>
        <nav id="nav-top" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <img src="<?=VIEW_PATH ?>images/logo.png">
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="visible-md visible-lg"><a href="#hottest" data-smooth><span>Hottest</span></a></li>
                    <li class="visible-md visible-lg"><a href="#showing" data-smooth><span>Showing Now</span></a></li>
                    <li class="visible-md visible-lg"><a href="#packages" data-smooth><span>Combo Packages</span></a></li>
                    <?php if($logined): ?>
                    <li id="avatar">
                        <a href="drop-toggle" data-toggle="dropdown" href="#"><img src="<?=VIEW_PATH ?>images/avatar.png" alt=""></a>
                        <ul class="animated dropdown-menu">
                            <li><a href="account.php">Purchase History</a></li>
                            <li><a href="auth.php?action=logout">Log out</a></li>
                        </ul>
                    </li>
                    <?php else: ?>
                    <li><a data-toggle="modal" data-target="#login" href="#">Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>

        <div id="hottest">
            <div id="covers" class="swiper-container">
                <div class="swiper-wrapper">
                    <div id="fantastic" class="swiper-slide cover-slide">
                        <div class="parallax">
                            <img src="<?=VIEW_PATH ?>images/home/fantastic/city.png" alt="" id="fan_city">
                            <img src="<?=VIEW_PATH ?>images/home/fantastic/wall.png" alt="" id="fan_wall">
                            <img src="<?=VIEW_PATH ?>images/home/fantastic/man.png" alt="" id="fan_man">
                            <img src="<?=VIEW_PATH ?>images/home/fantastic/background.png" alt="" id="fan_background">
                        </div>
                        <div class="details">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-5">
                                        <h2>Fantastic Beasts and Where to Find Them</h2>
                                        <p class="director">Warner Bros, 2016<br>Film by David Yates</p>
                                        <p class="sypnosis">Several creatures have escaped from Newt Scamander's mysterious leather suitcase. What will happen to the magical creatures loose in the streets?</p>
                                        <a href="view.php?id=12" class="btn btn-primary"><span>Buy Tickets</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="kong" class="swiper-slide cover-slide">
                        <div class="parallax">
                            <img id="kong_kong" src="<?=VIEW_PATH ?>images/home/kong/kong.png" alt="">
                            <img id="kong_women" src="<?=VIEW_PATH ?>images/home/kong/women.png" alt="">
                            <img id="kong_mountain" src="<?=VIEW_PATH ?>images/home/kong/mountain.png" alt="">
                            <img id="kong_background" src="<?=VIEW_PATH ?>images/home/kong/background.png" alt="">
                        </div>
                        <div class="details">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-5">
                                        <h2>Kong:<br>Skull Island</h2>
                                        <p class="director">Warner Bros, 2017<br>Film by Jordan Vogt-Roberts</p>
                                        <p class="sypnosis">A diverse team unite to explore a mythical, uncharted island in the Pacific. The team ventures into the domain of the mighty Kong, igniting the ultimate battle between man and nature.</p>
                                        <a href="view.php?id=3" class="btn btn-primary"><span>Buy Tickets</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="martian" class="swiper-slide  cover-slide">
                        <div class="parallax">
                            <img id="martian_man" src="<?=VIEW_PATH ?>images/home/martian/man.png" alt="" >
                            <img src="<?=VIEW_PATH ?>images/home/martian/shadow.png" alt="" id="martian_shadow">
                            <img src="<?=VIEW_PATH ?>images/home/martian/mountain.png" alt="" id="martian_mountain">
                            <img src="<?=VIEW_PATH ?>images/home/martian/background.png" alt="" id="martian_background">
                        </div>
                        <div class="details">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-5">
                                        <h2>The Martian</h2>
                                        <p class="director">Twentieth Century Fox, 2015<br>Film by Ridley Scott</p>
                                        <p class="sypnosis">An astronaut becomes stranded on Mars after his team assume him dead, and must rely on his ingenuity to find a way to signal to Earth that he is alive.</p>
                                        <a href="view.php?id=13" class="btn btn-primary"><span>Buy Tickets</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="batman" class="swiper-slide cover-slide">
                        <div class="parallax">
                            <img id="batman_background" src="<?=VIEW_PATH ?>images/home/batman/background.png" alt="">
                            <img id="batman_batman" src="<?=VIEW_PATH ?>images/home/batman/batman.png" alt="">
                            <img id="batman_superman" src="<?=VIEW_PATH ?>images/home/batman/superman.png" alt="">
                        </div>
                        <div class="details">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-5">
                                        <h2>Batman v Superman: Dawn of Justice</h2>
                                        <p class="director">Warner Bros, 2016<br>Film by Zayn Synder</p>
                                        <p class="sypnosis">Convinced that Superman is now a threat to humanity, Batman embarks on a personal vendetta to end his reign on Earth</p>
                                        <a href="view.php?id=14" class="btn btn-primary"><span>Buy Tickets</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>                
                    </div>
                </div>   
            </div>
            <div id="thumbnails">
                <div class="container">
                    <div class="col-md-12">
                        <div class="slide active" style="background-image: url('<?=VIEW_PATH ?>images/home/fantastic/small.jpg')" alt=""></div>
                        <div class="slide" style="background-image: url('<?=VIEW_PATH ?>images/home/kong/small.jpg')" alt=""></div>
                        <div class="slide" style="background-image: url('<?=VIEW_PATH ?>images/home/martian/small.jpg')" alt=""></div>
                        <div class="slide" style="background-image: url('<?=VIEW_PATH ?>images/home/batman/small.jpg')" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="showing">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Showing Now</h2>
                    </div>
                </div>
                <div class="row">
                <?php foreach($movies as $i=>$m): ?>
                    <?php if($i%6 == 0): ?>
                        <div class="clearfix visible-md-block visible-lg-block"></div>
                    <?php endif; ?>
                    <?php if($i%4 == 0): ?>
                        <div class="clearfix visible-sm-block"></div>
                    <?php endif; ?>
                    <?php if($i%2 == 0): ?>
                        <div class="clearfix visible-xs-block"></div>
                    <?php endif; ?>
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <a class="poster" href="view.php?id=<?=$m->id ?>">
                        <?php if(date('Y-m-d') < $m->release_date): ?>
                            <span class="warning">Upcoming</span>
                        <?php endif; ?>
                            <img class="poster" src="<?=VIEW_PATH ?>uploads/movies/<?=$m->id ?>/poster.jpg">
                        </a>
                        <h3><?=$m->name ?></h3>
                        <h4><?=$m->genre ?></h4>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div id="packages">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Packages</h2>
                        <h3>You Can Now Select These Packages During Purchase</h3>
                    </div>
                </div>
                <div class="row middle">
                    <div class="col-md-12">
                        <div id="packages-carousel" class="swiper-container">
                            <div class="swiper-wrapper">
                            <?php foreach($packages as $p): ?>
                                <img class="swiper-slide" src="<?=VIEW_PATH ?>uploads/packages/<?=$p->image_homepage ?>">
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer id="footer">
            <div id="contacts">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <img id="contacts-logo" src="<?=VIEW_PATH ?>images/logo.png" alt="">
                            <p>University of Nottingham Malaysia Campus<br>Jalan Broga<br>43500 Semenyih<br>Selangor Darul Ehsan<br>Malaysia</p>
                            <p>Email: alma@example.com</p>
                            <p>Phone: +88 (0) 000 0000</p>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h2>Latest News</h2>
                            <ul id="footer-news">
                                <li><a>New 5d Movie Experience Coming</a></li>
                                <li><a>Over 20,000 Customers in First Month</a></li>
                                <li><a>Free Movie Tickets By Joining Our Members Club</a></li>
                                <li><a>Alma X Starbuck Buy One Free One</a></li>
                                <li><a>Alma Provides Online Ticket Booking Now</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h2>Behind the Scenes</h2>
                            <div class="row">
                                <div class="col-xs-6 col-sm-2 col-md-4">
                                    <img class="team-pic" src="<?=VIEW_PATH ?>images/teams/daniel.png" alt="">
                                    <h3 class="team-name">Daniel - Backend</h3>
                                </div>
                                <div class="col-xs-6 col-sm-2 col-md-4">
                                    <img class="team-pic" src="<?=VIEW_PATH ?>images/teams/gxun.png" alt="">
                                    <h3 class="team-name">G-Xun - Design</h3>
                                </div>
                                <div class="col-xs-6 col-sm-2 col-md-4">
                                    <img class="team-pic" src="<?=VIEW_PATH ?>images/teams/jincong.jpg" alt="">
                                    <h3 class="team-name">Jin Cong - Combinations</h3>
                                </div>
                                <div class="col-xs-6 col-sm-2 col-md-4">
                                    <img class="team-pic" src="<?=VIEW_PATH ?>images/teams/ruby.jpg" alt="">
                                    <h3 class="team-name">Ruby - Project & DB</h3>
                                </div>
                                <div class="col-xs-6 col-sm-2 col-md-4">
                                    <img class="team-pic" src="<?=VIEW_PATH ?>images/teams/wesley.png" alt="">
                                    <h3 class="team-name">Wesley - Design</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="copyrights">
                <div class="container">
                    <div clastaons="row">
                        <div class="col-md-12">
                            Copyright 2017 &copy; Team Alma.
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Dependencies -->
        <script src="<?=VIEW_PATH ?>dependencies/jquery/dist/jquery.min.js"></script>
        <script src="<?=VIEW_PATH ?>dependencies/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?=VIEW_PATH ?>dependencies/swiper/dist/js/swiper.jquery.min.js"></script>
        <script src="<?=VIEW_PATH ?>scripts/tilt.js"></script>
        <script src="<?=VIEW_PATH ?>scripts/plax.js"></script>
        <!-- Global JS -->
        <script src="<?=VIEW_PATH ?>scripts/global.js"></script>
        <!-- Page Scripts -->
        <script src="<?=VIEW_PATH ?>scripts/home.js"></script>

        <?php if(!$logined): ?>
        <?php include 'views/auth.php'; ?>
        <?php endif; ?>
    </body>
</html>