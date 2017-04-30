<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Concept of a modern movie ticket booking website." />
        <meta name="keywords" content="cinema, seat booking, ticket, movie" />
        <title><?=$movie->name; ?> | Alma Theatre - Best Movie Experience in Malaysia</title>
        <!-- Dependencies -->
        <link rel="stylesheet" href="<?=VIEW_PATH ?>dependencies/bootstrap/dist/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link rel="stylesheet" href="<?=VIEW_PATH ?>dependencies/swiper/dist/css/swiper.min.css">
        <link rel="stylesheet" href="<?=VIEW_PATH ?>dependencies/animate.css/animate.min.css">
        <link rel="stylesheet" href="<?=VIEW_PATH ?>dependencies/jquery-nice-select/css/nice-select.css">
        <!-- Global CSS  -->
        <link rel="stylesheet" href="<?=VIEW_PATH ?>styles/global.css">
        <link rel="stylesheet" href="<?=VIEW_PATH ?>styles/cart.css">
        <!-- Page Design -->
        <link rel="stylesheet" href="<?=VIEW_PATH ?>styles/view.css">
    </head>
    <body>
        <div id="background" style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.5), rgba(255,255,255,0.5)), url('<?=VIEW_PATH ?>uploads/movies/<?=$movie->id ?>/back.jpg')"></div>
        <nav id="nav-top" class="opaque navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <img src="<?=VIEW_PATH ?>images/logo.png">
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
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
        
        <div id="wrapper">
            <div id="left-bar">
                <img id="poster" src="<?=VIEW_PATH ?>uploads/movies/<?=$movie->id ?>/poster.jpg">
                <h1 id="name"><?=$movie->name ?></h1>
                <p>
                    <span class="title">Genres</span>
                    <span class="description"><?=$movie->genre ?></span>
                </p>
                <p>
                    <span class="title">Length</span>
                    <span class="description"><?=$duration ?></span>
                </p>
                <p>
                    <span class="title">Director</span>
                    <span class="description"><?=$movie->director ?></span>
                </p>
                <p>
                    <span class="title">Writer</span>
                    <span class="description"><?=$movie->writer ?></span>
                </p>
            </div>
            <div id="contents">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4 col-md-2">
                            <span class="big"><?=rand(75, 95)/10 ?></span>
                            <span class="small">/10</span>
                            <span class="title">Ratings</span>
                        </div>
                        <div class="col-sm-4 col-md-2">
                            <span class="big"><?=rand(10000,30000) ?></span>
                            <span class="title">Viewers</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Synopsis</h2>
                            <p><?=$movie->description ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <h2>The Casts</h2>
                            <div id="cast-slide" class="swiper-container">
                                <div class="swiper-wrapper">
                                <?php foreach($characters as $c): ?>
                                    <div class="cast swiper-slide">
                                        <img src="<?=VIEW_PATH ?>uploads/actors/<?=$c->actor->image_file_name ?>.jpg" alt="">
                                        <p><span><?=$c->actor->name ?></span> as <span><?=$c->name; ?></span></p>
                                    </div>
                                <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <h2>Trailer</h2>
                            <div id="trailer">
                                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/<?=$movie->youtube_url ?>?rel=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2>You might also like</h2>
                            <div id="poster-slide" class="swiper-container">
                                <div class="swiper-wrapper">
                                <?php foreach($recommends as $r): ?>
                                <?php if($r!=$_GET['id']): ?>
                                    <a class="swiper-slide" href="view.php?id=<?=$movies[$r]->id ?>"><img src="<?=VIEW_PATH ?>uploads/movies/<?=$movies[$r]->id ?>/poster.jpg" class="poster"></a>
                                <?php endif; ?>
                                <?php endforeach; ?>
                                </div>
                            </div>
                            <footer>Copyright 2017 &copy; Team Alma.</footer>
                        </div>
                    </div>
                </div>
            </div>
            <div id="right-bar" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('<?=VIEW_PATH ?>uploads/movies/<?=$movie->id ?>/strip.jpg')">
                <div>
                    <h2>Purchase Ticket</h2>
                    <?php if($logined): ?>
                    <div id="process-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#">Time &amp; Venue</a></li>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if($logined): ?>
                <div id="process-contents">
                    <form id="payment" action="seats.php" method="post">
                        <input type="hidden" name="id" value="<?=$_GET['id'] ?>">
                        <select name="cinema" id="">
                            <option value="">Choose a Cinema</option>
                            <option value="midvalley" 
                            <?php if(isset($cart) && ($cart['cinema'] == 'midvalley')): ?>
                            selected
                            <?php endif; ?>
                            >Midvalley Mall</option>
                        </select>
                        <select name="date">
                            <option value="">Choose a Date</option>
                        <?php foreach($dates as $d): ?>
                            <option value="<?=$d['value'] ?>" <?php if(isset($cart) && ($cart['date'] == $d['value'])): ?>
                            selected
                            <?php endif; ?>><?=$d['show'] ?></option>
                        <?php endforeach; ?>
                        </select>
                        <select name="hall">
                            <option value="">Choose a Hall</option>
                        <?php foreach($halls as $h): ?>
                            <option value="<?=$h->id ?>" 
                            <?php if(isset($cart) && ($cart['hall'] == $h->id)): ?>
                            selected
                            <?php endif; ?>><?=$h->name ?></option>
                        <?php endforeach; ?>
                        </select>
                        <select name="time">
                            <option value="">Choose a Time</option>
                        <?php foreach($times as $t): ?>
                            <option value="<?=$t ?>"
                            <?php if(isset($cart) && ($cart['time'] == $t)): ?>
                            selected
                            <?php endif; ?>><?=$t ?></option>
                        <?php endforeach; ?>
                        </select>
                        <select name="amount">
                            <option value="">Amount of Ticket</option>
                        <?php for($i=1; $i<10; $i++): ?>
                            <option value="<?=$i ?>"
                            <?php if(isset($cart) && ($cart['amount'] == $i)): ?>
                            selected
                            <?php endif; ?>><?=$i ?> Tickets</option>
                        <?php endfor; ?>
                        </select>
                        <p>
                            <span>Total</span>
                            <span class="price">
                                RM 15 x <span id="amount">0</span> = RM <span id="total_price">0</span>
                            </span>
                        </p>
                        <div class="row"></div>
                    </form>

                </div>
                <div id="btn-wrapper">
                    <button id="submit" class="btn">Choose Seats</button>
                </div>
                <?php else: ?>
                <div id="btn-wrapper" class="flow">
                    <button class="btn" data-toggle="modal" data-target="#login">Login to Purchase</button>
                </div>
                <?php endif;?>
            </div>
        </div>

        <!-- Dependencies -->
        <script src="<?=VIEW_PATH ?>dependencies/jquery/dist/jquery.min.js"></script>
        <script src="<?=VIEW_PATH ?>dependencies/bootstrap/dist/js/bootstrap.min.js"></script>  
        <script src="<?=VIEW_PATH ?>dependencies/swiper/dist/js/swiper.jquery.min.js"></script>
        <script src="<?=VIEW_PATH ?>dependencies/jquery-nice-select/js/jquery.nice-select.min.js"></script>
        <script src="<?=VIEW_PATH ?>scripts/tilt.js"></script>
        <!-- Global JS -->
        <script src="<?=VIEW_PATH ?>scripts/global.js"></script>
        <script src="<?=VIEW_PATH ?>scripts/cart.js"></script>
        <!-- Page Scripts -->
        <script src="<?=VIEW_PATH ?>scripts/view.js"></script>

        <?php if(!$logined): ?>
        <?php include 'views/auth.php'; ?>
        <?php endif; ?>
    </body>
</html>