<?php

/**
 * View Movie
 *
 * - Show single movie's details
 */

include 'app.php';

//@TODO: check id validity

//cart
if(isset($_SESSION['cart']))
    $cart = (isset($_SESSION['cart']) && ($_GET['id'] == $_SESSION['cart']['id'])) ? $_SESSION['cart'] : null;

//movie details
$movie = Movies::retrieveByPK($_GET['id']);
$duration = date("g", strtotime($movie->duration))." hr ".date("i", strtotime($movie->duration))." min";

//character details
$characters = Movies_characters::retrieveByMovie_id($_GET['id']);
foreach($characters as $i=>$c)
    $characters[$i]->actor = Movies_actors::retrieveByPK($c->actor_id);

//recommended movies
$movies = Movies::all();
$recommends = array_rand($movies, 5);

//date choices (maximum 7 days)
$dates = array();
for($i=0; $i<=6; $i++){
    $dates[] = array(
        'value' => date('Y-m-d', time()+($i*86400)),
        'show'  => date('j M', time()+($i*86400))
    );
}

//time choices
$times = array('11:00', '13:00', '15:00', '17:00', '19:00', '21:00', '23:00');

//halls
$halls = Halls::all();

include 'views/view.php';