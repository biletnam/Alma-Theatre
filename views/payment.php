<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Concept of a modern movie ticket booking website." />
        <meta name="keywords" content="cinema, seat booking, ticket, movie" />
        <title><?=$movie->name ?> | Alma Theatre - Best Movie Experience in Malaysia</title>
        <!-- Dependencies -->
        <link rel="stylesheet" href="<?=VIEW_PATH ?>dependencies/bootstrap/dist/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link rel="stylesheet" href="<?=VIEW_PATH ?>dependencies/swiper/dist/css/swiper.min.css">
        <link rel="stylesheet" href="<?=VIEW_PATH ?>dependencies/animate.css/animate.min.css">
        <link rel="stylesheet" href="<?=VIEW_PATH ?>dependencies/jquery-nice-select/css/nice-select.css">
        <!-- Global CSS -->
        <link rel="stylesheet" href="<?=VIEW_PATH ?>styles/global.css">
        <!-- Page Design -->
        <link rel="stylesheet" href="<?=VIEW_PATH ?>styles/payment.css">
    </head>
    <body>
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
            <h1><span class="glyphicon glyphicon-ok"></span> Tickets Purchased</h1>
            <h2>You can access your tickets at top right of the menu.</h2>
            <div id="ticket">
                <img src="<?=VIEW_PATH ?>uploads/movies/<?=$movie->id ?>/poster.jpg">
                <div class="left">
                    <p><?=$movie->name ?></p>
                    <p><?=date('j M Y', strtotime($cart['date'])) ?></p>
                    <p><?=$duration ?></p>
                    <p class="bottom">Alma Theatre</p>
                </div>
                <div class="right">
                    <p><span>theatre</span><?=$hall->name ?></p>
                    <p><span><?=$cart['amount'] ?> seats</span><?=implode(', ', $cart['seats']) ?></p>
                    <p><span>time</span><?=$cart['time'] ?></p>
                </div>
            </div>
            <div id="btn-wrapper">
                <a class="btn" href="index.php">Done!</a>
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
        <!-- Page Scripts -->
        <script src="<?=VIEW_PATH ?>scripts/payment.js"></script>
    </body>
</html>