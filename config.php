<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    case 'index.php';
    $title = 'Homepage for our new website';
    $mainHeadline = 'Welcome to our Home Page';
    $center = 'center';
    $body = 'home';
break;

case 'about.php';
    $title = 'About page for our new website';
    $mainHeadline = 'Welcome to our Wonderful About Page!';
    $center = 'center';
    $body = 'about inner';

break;

case 'daily.php';
    $title = 'Daily Page';
    $mainHeadline = 'Welcome to the Daily';
    $center = 'daily inner';
break;

case 'customers.php';
    $title = 'Our very important customers';
    $mainHeadline = 'Hello Customers - Good to See You!';
    $center = 'customers inner';
break;

case 'contact.php';
    $title = 'Contact us today!';
    $mainHeadline = 'Welcome to our Contact Page';
    $center = 'contact inner';
break;

case 'gallery.php';
    $title = 'Check out our Gallery';
    $mainHeadline = 'Welcome to our Gallery';
    $center = 'gallery inner';
break;
}

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['customers.php'] = 'Customers';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function makeLinks($nav){
    $myReturn = '';
    foreach($nav as $key => $value){
        if(THIS_PAGE == $key) {
            $myReturn .= '<li><a href="" ' . $key . ' " class = "active"> ' . $value . ' </a></li>';
        } else {
            $myReturn .= '<li><a href="" ' . $key . ' "> ' . $value . ' </a></li>';
        }
    }

    return $myReturn;
}
$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';


function randNum($photos){

    $i = rand(0, count($photos) -1);
    $selectedImages = './images/'.$photos[$i].'.png';
    echo '<img src="'.$selectedImages.'" class="rotationImage">';
}
?>