<!doctype html>
<html lang="en" class="no-js">
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
        <link rel="stylesheet" href="<?=VIEW_PATH ?>dependencies/animate.css/animate.min.css">
		<link rel="stylesheet" type="text/css" href="<?=VIEW_PATH ?>styles/normalize.css" />
		<link rel="stylesheet" href="<?=VIEW_PATH ?>dependencies/jquery-nice-select/css/nice-select.css">
        <!-- Global CSS  -->
		<link rel="stylesheet" href="<?=VIEW_PATH ?>styles/global.css">
        <link rel="stylesheet" href="<?=VIEW_PATH ?>styles/cart.css">
        <!-- Page Design -->
		<link rel="stylesheet" type="text/css" href="<?=VIEW_PATH ?>styles/seats.css" />
	</head>
	<body>
		<nav id="nav-top" class="opaque navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <img src="<?=VIEW_PATH ?>images/logo.png" alt="">
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
        	<div id="seats" class="container">
				<div class="cube">
					<div class="cube__side cube__side--front"></div>
					<div class="cube__side cube__side--back">
						<div class="screen">
							<div class="video">
                                <iframe class="video-player" width="560" height="315" src="https://www.youtube-nocookie.com/embed/<?=$movie->youtube_url ?>" frameborder="0" allowfullscreen></iframe>
								<button class="action action--play action--shown" aria-label="Play Video"></button>
							</div>
						</div>
					</div>
					<div class="cube__side cube__side--left"></div>
					<div class="cube__side cube__side--right"></div>
					<div class="cube__side cube__side--top"></div>
					<div class="rows rows--large">
						<div class="row">
							<div data-seat="A1" class="row__seat"></div>
							<div data-seat="A2" class="row__seat"></div>
							<div data-seat="A3" class="row__seat"></div>
							<div data-seat="A4" class="row__seat"></div>
							<div data-seat="A5" class="row__seat"></div>
							<div data-seat="A6" class="row__seat"></div>
							<div data-seat="A7" class="row__seat"></div>
							<div data-seat="A8" class="row__seat"></div>
							<div data-seat="A9" class="row__seat"></div>
							<div data-seat="A10" class="row__seat"></div>
						</div>
						<div class="row">
							<div data-seat="B1" class="row__seat"></div>
							<div data-seat="B2" class="row__seat"></div>
							<div data-seat="B3" class="row__seat"></div>
							<div data-seat="B4" class="row__seat"></div>
							<div data-seat="B5" class="row__seat"></div>
							<div data-seat="B6" class="row__seat"></div>
							<div data-seat="B7" class="row__seat"></div>
							<div data-seat="B8" class="row__seat"></div>
							<div data-seat="B9" class="row__seat"></div>
							<div data-seat="B10" class="row__seat"></div>
						</div>
						<div class="row">
							<div data-seat="C1" class="row__seat"></div>
							<div data-seat="C2" class="row__seat"></div>
							<div data-seat="C3" class="row__seat"></div>
							<div data-seat="C4" class="row__seat"></div>
							<div data-seat="C5" class="row__seat"></div>
							<div data-seat="C6" class="row__seat"></div>
							<div data-seat="C7" class="row__seat"></div>
							<div data-seat="C8" class="row__seat"></div>
							<div data-seat="C9" class="row__seat"></div>
							<div data-seat="C10" class="row__seat"></div>
						</div>
						<div class="row">
							<div data-seat="D1" class="row__seat"></div>
							<div data-seat="D2" class="row__seat"></div>
							<div data-seat="D3" class="row__seat"></div>
							<div data-seat="D4" class="row__seat"></div>
							<div data-seat="D5" class="row__seat"></div>
							<div data-seat="D6" class="row__seat"></div>
							<div data-seat="D7" class="row__seat"></div>
							<div data-seat="D8" class="row__seat"></div>
							<div data-seat="D9" class="row__seat"></div>
							<div data-seat="D10" class="row__seat"></div>
						</div>
						<div class="row">
							<div data-seat="E1" class="row__seat"></div>
							<div data-seat="E2" class="row__seat"></div>
							<div data-seat="E3" class="row__seat"></div>
							<div data-seat="E4" class="row__seat"></div>
							<div data-seat="E5" class="row__seat"></div>
							<div data-seat="E6" class="row__seat"></div>
							<div data-seat="E7" class="row__seat"></div>
							<div data-seat="E8" class="row__seat"></div>
							<div data-seat="E9" class="row__seat"></div>
							<div data-seat="E10" class="row__seat"></div>
						</div>
						<div class="row">
							<div data-seat="F1" class="row__seat"></div>
							<div data-seat="F2" class="row__seat"></div>
							<div data-seat="F3" class="row__seat"></div>
							<div data-seat="F4" class="row__seat"></div>
							<div data-seat="F5" class="row__seat"></div>
							<div data-seat="F6" class="row__seat"></div>
							<div data-seat="F7" class="row__seat"></div>
							<div data-seat="F8" class="row__seat"></div>
							<div data-seat="F9" class="row__seat"></div>
							<div data-seat="F10" class="row__seat"></div>
						</div>
					</div>
					<!-- /rows -->
				</div><!-- /cube -->
				<button class="action action--lookaround action--disabled" arial-label="Unlook View"></button>
			</div><!-- /container -->
            <div id="right-bar" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('<?=VIEW_PATH ?>uploads/rightbg.jpg')">
                <div>
                    <h2>Purchase Ticket</h2>
                    <div id="process-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li><a href="view.php?id=<?=$cart['id'] ?>">Time &amp; Venue</a></li>
                            <li class="active"><a href="<?=VIEW_PATH ?>#profile">Choose Seats</a></li>
                        </ul>
                    </div>
                </div>
                <div id="process-contents">
                    <form id="payment" action="confirm.php" method="post">
                        <input type="hidden" name="seats">
                        <div class="plan">
                        <h3 class="plan__title">Seating Plan (Pick <?=$cart['amount'] ?> seats)</h3>
                        <div class="rows rows--mini">
                        <?php foreach(str_split('ABCDEF') as $row): ?>
                            <div class="row">
                                <?php foreach(range(1,10) as $col): ?>
                                <div class="row__seat tooltip
                                <?php if(isset($cart['seats']) && in_array($row.$col, $cart['seats'])): ?>row__seat--selected<?php endif; ?><?php if(in_array($row.$col, $selected_seats)): ?>row__seat--reserved<?php endif; ?>" data-tooltip="<?=$row ?><?=$col ?>"></div>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                        </div>
                        <!-- /rows -->
                        <ul class="legend">
                            <li class="legend__item legend__item--free">Free</li>
                            <li class="legend__item legend__item--reserved">Reserved</li>
                            <li class="legend__item legend__item--selected">Selected</li>
                        </ul>
                    </form>
                </div>
            </div>
            <div id="btn-wrapper">
                <button id="submit" class="btn">Review Details</button>
            </div>
        </div>

        <!-- Dependencies -->
        <script src="<?=VIEW_PATH ?>scripts/modernizr-custom.js"></script>
		<script src="<?=VIEW_PATH ?>dependencies/jquery/dist/jquery.min.js"></script>
        <script src="<?=VIEW_PATH ?>dependencies/bootstrap/dist/js/bootstrap.min.js"></script>  
        <script src="<?=VIEW_PATH ?>dependencies/jquery-nice-select/js/jquery.nice-select.min.js"></script>
		<script src="<?=VIEW_PATH ?>scripts/classie.js"></script>
        <!-- Global JS -->
		<script src="<?=VIEW_PATH ?>scripts/global.js"></script>
        <script src="<?=VIEW_PATH ?>scripts/cart.js"></script>
        <!-- Page Scripts -->
        <script type="text/javascript">
            var ticket_amount = <?=$cart['amount'] ?>;
            <?php if(isset($cart['seats']) && (count($cart['seats']) > 0)): ?>
            var selected_seats = ['<?=implode($cart['seats'], "','") ?>'];
            <?php endif ?>
        </script>
		<script src="<?=VIEW_PATH ?>scripts/seats.js"></script>
	</body>
</html>