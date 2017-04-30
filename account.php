<?php

/**
 * Account Page
 *
 * - Show Account Detail
 * - Show Purchase History
 */

include 'app.php';

if(!$logined){
    header("Location: index.php");
    die();
}

$purchases = Purchases::retrieveByUser_id($_SESSION['login_user']);

foreach($purchases as $i=>$p){
    $purchases[$i]->items = Purchases_items::retrieveByPurchase_id($p->id);
    $purchases[$i]->ticket_count = 0;

    foreach($purchases[$i]->items as $j=>$pi){

        $users = Users::retrieveByPK('1');

        if($pi->item_type == 'package'){
            $single_packages = $purchases[$i]->items[$j]->package = Packages::retrieveByPK($pi->item_id);
        }elseif($pi->item_type=='ticket'){
            $ticket = $purchases[$i]->items[$j]->ticket = Tickets::retrieveByPK($pi->item_id);
            $purchases[$i]->movie = $purchases[$i]->items[$j]->ticket->movie = Movies::retrieveByPK($ticket->movie_id);
            $purchases[$i]->items[$j]->ticket->hall = Halls::retrieveByPK($ticket->hall_id);
            $hall = Halls::retrieveByPK($ticket->hall_id);
            $purchases[$i]->ticket_count++;
        }

    }

    $purchases[$i]->tickets = array_values(array_filter($purchases[$i]->items, function($v, $i){
        return $v->item_type == 'ticket';
    }, ARRAY_FILTER_USE_BOTH));
    $purchases[$i]->packages = array_values(array_filter($purchases[$i]->items, function($v, $i){
        return $v->item_type == 'package';
    }, ARRAY_FILTER_USE_BOTH));

    if(isset($_GET['id']) && ($p->id == $_GET['id'])){
        $current = $p;
        $tickets = array_values(array_filter($current->items, function($v, $i){
            return $v->item_type == 'ticket';
        }, ARRAY_FILTER_USE_BOTH));
        $packages = array_values(array_filter($current->items, function($v, $i){
            return $v->item_type == 'package';
        }, ARRAY_FILTER_USE_BOTH));
    }
}


include 'views/account.php';