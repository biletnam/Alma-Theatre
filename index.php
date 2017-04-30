<?php

/**
 * Home Page
 *
 * - Show Hotest Movies
 * - Show Packages
 */

include 'app.php';

$movies = Movies::all();
usort($movies, function($a, $b){
    if($a->release_date == $b->release_date){
        return 0;
    }elseif($a->release_date > $b->release_date){
        return 1;
    }else{
        return -1;
    }
});

$packages = Packages::all();

include 'views/home.php';