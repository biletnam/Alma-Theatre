<!DOCTYPE html>
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
        <link rel="stylesheet" href="<?=VIEW_PATH ?>dependencies/animate.css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="<?=VIEW_PATH ?>styles/normalize.css" />
        <link rel="stylesheet" href="<?=VIEW_PATH ?>dependencies/jquery-nice-select/css/nice-select.css">
        <script src="<?=VIEW_PATH ?>scripts/modernizr-custom.js"></script>
        <!-- Global CSS -->
        <link rel="stylesheet" href="<?=VIEW_PATH ?>styles/global.css">
        <link rel="stylesheet" href="<?=VIEW_PATH ?>styles/cart.css">
        <!-- Page Design -->
        <link rel="stylesheet" type="text/css" href="<?=VIEW_PATH ?>styles/confirm.css" />
    </head>
    <body id="confirm">
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

        <form id="payment" action="payment.php" method="post">
        <div id="wrapper">
            <div id="packages">
                <div class="container-fluid">
                    <div class="row">   
                        <div class="col-md-12">
                            <h2>Choose Packages</h2>
                        </div>
                    </div>
                    <div class="row">
                    <?php foreach($packages as $i=>$p): ?>
                        <?php if($i%4 == 0): ?>
                            <div class="clearfix visible-lg-block"></div>
                        <?php endif; ?>
                        <?php if($i%3 == 0): ?>
                            <div class="clearfix visible-md-block"></div>
                        <?php endif; ?>
                        <?php if($i%2 == 0): ?>
                            <div class="clearfix visible-sm-block"></div>
                        <?php endif; ?>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="packages">
                                <h3><?=$p->description ?></h3>
                                <img src="<?=VIEW_PATH ?>uploads/packages/<?=$p->image_payment ?>" alt="">
                                <div class="packages-action">
                                    <span class="price" data-price="<?=$p->price ?>">RM <span><?=$p->price ?></span></span>
                                    <div class="amount input-group">
                                        <div class="input-group-btn minus"><button class="btn btn-default" type="button">-</button>
                                        </div>
                                        <input type="text" name="packages[<?=$p->id ?>]" class="form-control" readonly value="0">
                                        <div class="input-group-btn add"><button class="btn btn-default" type="button">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div id="right-bar" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('<?=VIEW_PATH ?>uploads/rightbg.jpg')">
                <div>
                    <h2>Purchase Ticket</h2>
                    <div id="process-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li><a href="view.php?id=<?=$cart['id'] ?>">Time &amp; Venue</a></li>
                            <li><a href="seats.php">Choose Seats</a></li>
                            <li class="active"><a href="payment.php">Confirm</a></li>
                        </ul>
                    </div>
                </div>
                <div id="process-contents">
                    
                        <input type="hidden" name="id" value="<?=$cart['id'] ?>">
                        <select name="cinema" readonly>
                            <option value="">Choose a Cinema</option>
                            <option value="midvalley" 
                            <?php if(isset($cart) && ($cart['cinema'] == 'midvalley')): ?>
                            selected
                            <?php endif; ?>
                            >Midvalley Mall</option>
                        </select>
                        <select name="date" readonly>
                            <option value="">Choose a Date</option>
                        <?php foreach($dates as $d): ?>
                            <option value="<?=$d['value'] ?>" <?php if(isset($cart) && ($cart['date'] == $d['value'])): ?>
                            selected
                            <?php endif; ?>><?=$d['show'] ?></option>
                        <?php endforeach; ?>
                        </select>
                        <select name="hall" readonly>
                            <option value="">Choose a Hall</option>
                        <?php foreach($halls as $h): ?>
                            <option value="<?=$h->id ?>" 
                            <?php if(isset($cart) && ($cart['hall'] == $h->id)): ?>
                            selected
                            <?php endif; ?>><?=$h->name ?></option>
                        <?php endforeach; ?>
                        </select>
                        <select name="time" readonly>
                            <option value="">Choose a Time</option>
                        <?php foreach($times as $t): ?>
                            <option value="<?=$t ?>"
                            <?php if(isset($cart) && ($cart['time'] == $t)): ?>
                            selected
                            <?php endif; ?>><?=$t ?></option>
                        <?php endforeach; ?>
                        </select>
                        <select name="amount" readonly>
                            <option value="">Amount of Ticket</option>
                        <?php for($i=1; $i<10; $i++): ?>
                            <option value="<?=$i ?>"
                            <?php if(isset($cart) && ($cart['amount'] == $i)): ?>
                            selected
                            <?php endif; ?>><?=$i ?> Tickets</option>
                        <?php endfor; ?>
                        </select>
                        <p>
                            <span>Tickets</span>
                            <span class="price">
                                RM <span id="total_price">0</span>
                            </span>
                            <br>
                            <span>Packages</span>
                            <span class="price">
                                RM <span id="total_package">0</span>
                            </span>
                            <br>
                            <span>Total</span>
                            <span class="price">
                                RM <span id="total">0</span>
                            </span>
                        </p>
                    
                </div>
                <div id="btn-wrapper">
                    <button id="submit" class="btn">Confirm Purchase</button>
                </div>
            </div>
        </div>
        </form>
        <!-- Dependencies -->
        <script src="<?=VIEW_PATH ?>dependencies/jquery/dist/jquery.min.js"></script>
        <script src="<?=VIEW_PATH ?>dependencies/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?=VIEW_PATH ?>dependencies/jquery-nice-select/js/jquery.nice-select.min.js"></script>
        <script src="<?=VIEW_PATH ?>scripts/classie.js"></script>
        <!-- Global JS -->
        <script src="<?=VIEW_PATH ?>scripts/global.js"></script>
        <script src="<?=VIEW_PATH ?>scripts/cart.js"></script>
        <!-- Page Scripts -->
        <script src="<?=VIEW_PATH ?>scripts/confirm.js"></script>
        <script type="text/javascript">
        var ticket_amount = 3;
        </script>
    </body>
</html>