<?php
include('./includes/config.php');
include('./includes/header.php');
?>

<div id="wrapper">
    <h1 class="<?php echo $center ?>"><?php echo $mainHeadline ?></h1>
   <?php echo randImages($photos) ?> 

    <blockquote>
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

        Section 1.10.32 of "de Finibus Bonorum et M
    </blockquote>
    <p class="center"><a href="">Here is my <strong>Extra Credit Link</strong> link to my Github account showing you my randImages function (index.php and config.php)</a></p>
    <?php
    include('includes/footer.php');
    ?>