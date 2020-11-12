<?php

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';


function randImages($photos){

    $i = rand(0, count($photos) -1);
    $selectedImages = './images/'.$photos[$i].'.png';
    echo '<img src="'.$selectedImages.'" class="rotationImage">';
}

$photos1[0] = 'ayang';
$photos1[1] = 'biden';
$photos1[2] = 'booke';
$photos1[3] = 'butti';
$photos1[4] = 'castr';
$photos1[5] = 'clint';
$photos1[6] = 'harri';
$photos1[7] = 'klobu';
$photos1[8] = 'sande';
$photos1[9] = 'trump';
$photos1[10] = 'warre';

function randImages2($photos1){

    $i = rand(0, count($photos1) -1);
    $selectedImages2 = './images/'.$photos1[$i].'.jpg';
    echo '<img src="'.$selectedImages2.'" >';
}

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$people['Donald_Trump'] = 'trump_President from NY.';
$people['Joe_Biden'] = 'biden_Elected President from PA.';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Elected Vicepresident from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Mayor from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['Julian_Castro'] = 'castr_Housing/Urban from TX.';

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
    $center = 'center';
    $body = 'daily inner';
break;

case 'customers.php';
    $title = 'Our very important customers';
    $mainHeadline = 'Hello Customers - Good to See You!';
    $center = 'center';
    $body = 'customers inner';
break;

case 'contact.php';
    $title = 'Our very important customers';
    $mainHeadline = 'Hello Customers - Good to See You!';
    $center = 'center';
    $body = 'customers inner';
break;

case 'thx.php';
    $title = 'Our thank you page!';
    $mainHeadline = 'Thank you for filling out our form!';
    //$center = 'contact inner';
    $body = 'contact inner';
break;

case 'gallery.php';
    $title = 'Check out our Gallery';
    $mainHeadline = 'Welcome to the Candidates Gallery Page';
    //$center = 'center';
    $body = 'gallery inner';
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
            $myReturn .= '<li><a href=" ' . $key . ' " class = "active"> ' . $value . ' </a></li>';
        } else {
            $myReturn .= '<li><a href=" ' . $key . ' "> ' . $value . ' </a></li>';
        }
    }

    return $myReturn;
}
$name = '';
$email = '';
$tel = '';
$privacy = '';
$bank = '';
$laptop = '';


$nameErr = '';
$emailErr = '';
$telErr = '';
$privacyErr = '';
$bankErr = '';
$laptopErr = '';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['name'])) {
        $nameErr = 'Please fill out your Complete Name';
    } else {
        $name = $_POST['name'];
    }

    if (empty($_POST['email'])) {
        $emailErr = 'Please fill out your email!';
    } else {
        $email = $_POST['email'];
    }
    if ($_POST['bank'] == 'NULL') {
        $bankErr = 'Please pick a banking institution!';
    } else {
        $bank = $_POST['bank'];
    }
    if (empty($_POST['laptop'])) {
        $laptopErr = 'What, no laptops?';
    } else {
        $laptop = $_POST['laptop'];
    }
    if (empty($_POST['privacy'])) {
        $privacyErr = 'Please agree to our Privacy Rules';
    } else {
        $privacy = $_POST['privacy'];
    }

    function myLaptops(){
        $myReturn = '';
        if(!empty($_POST['laptop'])){
            $myReturn = implode(',', $_POST['laptop']);
        } return $myReturn;
    }

    if(empty($_POST['tel'])) {  // if empty, type in your number
        $telErr = 'Your phone number please!';
        } elseif(array_key_exists('tel', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $telErr = 'Invalid format!';
        } else{
        $tel = $_POST['tel'];
        }
        }

    if (isset($_POST['name'],
    $_POST['bank'],
    $_POST['laptop'],
    $_POST['tel'],
    $_POST['privacy'])) {
        //$to = 'szemeo@mystudentswa.com';
        $to = 'diegofalconcostilla94@gmail.com';
        $subject = 'Test Email' . date('m/d/y');
        $body = '' . $name . ' has filled out your form ' . PHP_EOL . '';
        $body .= 'Email: '.$email.' '.PHP_EOL.'';
        $body .= 'Your phone number: '.$tel.' '.PHP_EOL.'';
        $body .= 'Your laptops '.myLaptops().' '.PHP_EOL.'';
        $body .= 'Bank: ' . $bank . ' ' . PHP_EOL . '';
        
        $headers = array(
            'From' => 'no-reply@mystudentswa.com',
            'Reply-to' => ' '.$email.'');

        mail($to, $subject, $body , $headers);
        header('Location: thx.php');
    }
}
?>
