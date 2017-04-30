<?php

// loads configurations
include 'configs/database.php';
include 'configs/paths.php';

// loads models
include 'models/SimpleOrm.class.php';
include 'models/Movies.php';
include 'models/Movies_actors.php';
include 'models/Movies_characters.php';
include 'models/Users.php';
include 'models/Halls.php';
include 'models/Packages.php';
include 'models/Tickets.php';
include 'models/Purchases.php';
include 'models/Purchases_items.php';

//set timezone
date_default_timezone_set('Asia/Kuala_Lumpur');

// connects db
$conn = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD);

if ($conn->connect_error)
  die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

SimpleOrm::useConnection($conn, 'almatheatre');

// start session
session_start();

//authentication
if(isset($_SESSION['login_user'])){
    $logined = true;
    $user = Users::retrieveByPK($_SESSION['login_user']);
}else{
    $logined = false;
    $user = null;

    $show_login = isset($_GET['login']) && ($_GET['login'] == 1);
    $show_register = isset($_GET['register']) && ($_GET['register'] == 1);
}

//propagate error message
if(isset($_SESSION['error'])){
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}

//propagate form data
if(isset($_SESSION['form'])){
    $form = $_SESSION['form'];
    unset($_SESSION['form']);
}
