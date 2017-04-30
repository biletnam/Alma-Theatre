<?php

/**
 * Payment Page
 *
 * - Choose Packages
 * - Calculate Total
 * - Confirm
 *
 */

include 'app.php';

if(!isset($_SESSION['cart']) || !$logined){
    header("Location: index.php");
    die();
}

if(isset($_POST) && isset($_POST['seats']) && !empty($_POST['seats']))
    $_SESSION['cart']['seats'] = explode(',', $_POST['seats']);

$cart = $_SESSION['cart'];
$movie = Movies::retrieveByPK($cart['id']);

$packages = Packages::all();

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

include 'views/confirm.php';