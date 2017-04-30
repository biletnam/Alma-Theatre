<?php

/**
 * Seats Page
 *
 * - Choose a seat
 *
 */

include 'app.php';

if(!$logined){
    header("Location: index.php");
    die();
}

if(isset($_POST) && (count($_POST) > 0))
    $_SESSION['cart'] = $_POST;

$cart = $_SESSION['cart'];
$movie = Movies::retrieveByPK($cart['id']);

//reserved seats
$result = mysqli_query($conn, "SELECT DISTINCT `seat` FROM `tickets`");
$selected_seats = array();
while($row = mysqli_fetch_array($result))
    $selected_seats[] = $row[0];

include 'views/seats.php';