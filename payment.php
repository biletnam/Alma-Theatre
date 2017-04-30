<?php

/**
 * Payment Page
 *
 * - Show Success Message
 *
 */

include 'app.php';

if(!isset($_SESSION['cart']) || !$logined){
    header("Location: index.php");
    die();
}

if(isset($_POST) && isset($_POST['packages']) && !empty($_POST['packages']))
    $_SESSION['cart']['packages'] = $_POST['packages'];

$cart = $_SESSION['cart'];
$movie = Movies::retrieveByPK($cart['id']);
$duration = date("g", strtotime($movie->duration))." hr ".date("i", strtotime($movie->duration))." min";
$hall = Halls::retrieveByPK($cart['hall']);

//save purchase
$price = 0;

$purchase = new Purchases;
$purchase->user_id = $user->id;
$purchase->total_price = 0;
$purchase->created_at = date('Y-m-d H:i:s');
$purchase->save();

foreach($cart['seats'] as $seat){
    $ticket = new Tickets;
    $ticket->movie_id = $cart['id'];
    $ticket->showtime = $cart['date']." ".$cart['time'].":00";
    $ticket->price    = 15;
    $ticket->seat     = $seat;
    $ticket->hall_id  = $cart['hall'];
    $ticket->save();

    $item = new Purchases_items;
    $item->purchase_id= $purchase->id;
    $item->item_id    = $ticket->id;
    $item->price      = 15;
    $item->item_type  = 'ticket';
    $item->save();

    $price += 15;
}

foreach($cart['packages'] as $id=>$amount){

    if($amount <= 0) continue;

    $package = Packages::retrieveByPK($id);

    for($i=0; $i<$amount; $i++){
        $item = new Purchases_items;
        $item->purchase_id= $purchase->id;
        $item->item_id    = $id;
        $item->price      = $package->price;
        $item->item_type  = 'package';
        $item->save();

        $price += $package->price;
    }
}

$purchase->total_price = $price;
$purchase->save();

//empty cart
//unset($_SESSION['cart']);

include 'views/payment.php';