<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Concept of a modern movie ticket booking website." />
        <meta name="keywords" content="cinema, seat booking, ticket, movie" />
        <title>My Account | Alma Theatre - Best Movie Experience in Malaysia</title>
        <!-- Dependencies -->
        <link rel="stylesheet" href="<?=VIEW_PATH ?>dependencies/bootstrap/dist/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link rel="stylesheet" href="<?=VIEW_PATH ?>dependencies/animate.css/animate.min.css">
        <!-- Global CSS  -->
        <link rel="stylesheet" href="<?=VIEW_PATH ?>styles/global.css">
        <!-- Page Design -->
        <link rel="stylesheet" href="<?=VIEW_PATH ?>styles/account.css">
        <?php if(isset($current)): ?>
        <style>div#confirmedMovie.container-fluid::before{
    background-image: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url("<?=VIEW_PATH ?>uploads/movies/<?=$current->tickets[0]->ticket->movie_id ?>/back.jpg");
        }</style>
        <?php endif; ?>
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
            <!-- Sidebar -->
            <div id="sidebar">
                <h2>Upcoming Tickets</h2>
                <ul class="nav sidebar-nav">
                    <?php
                    foreach($purchases as $p):
                    if((count($p->tickets) > 0) && date('Y-m-d', strtotime('today')) < date('Y-m-d', strtotime($p->tickets[0]->ticket->showtime))){
                    ?>
                    <li class="sidebarMovies <?=($p->id == $_GET['id']) ? 'active' : '' ?>">
                        <a href="account.php?id=<?=$p->id?>"><img src="<?=VIEW_PATH?>/uploads/movies/<?=$p->tickets[0]->ticket->movie->id ?>/poster.jpg"></a>
                        <span><?=$p->tickets[0]->ticket->movie->name ?></span>
                    </li>
                    <?php }endforeach; ?>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
            
            <!-- Page Content -->
            <div id="page-content-wrapper">
            <?php if(isset($current)): ?>
                <div class="container-fluid" id="confirmedMovie">
                    <div class="row"><h1><?=$tickets[0]->ticket->movie->name ?></h1></div>
                    <div class="col-md-4">
                        <p>Cinema: Alma Cinema</p>
                        <p>Booking Date:
                            <?= date('d-m-y H:i:s', strtotime($current->created_at)) ?>
                        </p>
                        <p>Hall: <?=$hall->name ?></p>
                        <p>Time:
                            <?php echo $ticket->showtime; ?>
                        </p>
                        <p>Seats:
                            <?php
                            foreach($tickets as $t){
                                echo $t->ticket->seat.' ';
                            }
                            ?>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>Quantity: <?= count($tickets); ?> Tickets</p>
                        <p>Packages: <?=count($packages); ?></p>
                        <?php foreach($packages as $p): ?>
                        <p>
                            <?= $p->package->name; ?>
                        </p>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
                <div class="userDet">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>E Transaction History (<?php echo $users->email; ?>)</h3>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>No.</th>
                                        <th>Time</th>
                                        <th>Items</th>
                                        <th>Payment (RM)</th>
                                    </tr>
                                    <?php foreach($purchases as $p): ?>
                                    <tr>
                                        <td> <?php echo $i; $i++; ?> </td>
                                        <td> <?php echo $p->created_at ?> </td>
                                        <td><?php if(isset($p->movie)): ?>
                                            <?php echo $p->movie->name; ?> x <?php echo $p->ticket_count; ?>
                                        <?php endif; ?>
                                        <?php foreach($p->packages as $pack): ?>
                                            <br><?=$pack->package->name; ?>
                                        <?php endforeach; ?>
                                        </td>
                                        <td> <?php echo $p->total_price; ?> </td>
                                    </tr>
                                    <?php ; endforeach; ?>
                                </table>
                                <footer>Copyright 2017 &copy; Team Alma.</footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- Dependencies -->
        <script src="<?=VIEW_PATH ?>dependencies/jquery/dist/jquery.min.js"></script>
        <script src="<?=VIEW_PATH ?>dependencies/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Global JS -->
        <script src="<?=VIEW_PATH ?>scripts/global.js"></script>
    </body>
</html>