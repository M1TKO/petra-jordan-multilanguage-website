<?php
include_once '../common.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang['HTML_LANG']; ?>">
<head>
    <meta name="viewport" content="width=1110, initial-scale=1, maximum-scale=1">
    <title><?php echo $lang['PAGE_TITLE']; ?></title>
    <meta charset="UTF-8">
    <link rel="icon" href="../media/icon.png">
    <link rel="stylesheet" href="information.css">
<!--    Animation stylesheets-->
    <link rel="stylesheet" href="../animation/css/normalize.css">
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/michalsnik/aos/1.0.1/dist/aos.css'>
    <link rel="stylesheet" href="../animation/css/style.css">
</head>
<body>

<!--          NAVIGATION-->
        <div class="nav">
        <a id="title-page" href="../"><?php echo $lang['PAGE_HEADER']; ?></a>
        <div class="nav-menu">
            <ul>
                <li><a href="../"><?php echo $lang['NAV_HOME']; ?></a></li>
                <li><a href="../photos/"><?php echo $lang['NAV_PHOTOS']; ?></a></li>
                <li><a href="../video/"><?php echo $lang['NAV_VIDEOS']; ?></a></li>
                <li><a href="../about-me/"><?php echo $lang['NAV_ABOUT']; ?></a></li>
            </ul>
        </div>
    </div>

<!--    PAGE CONTENT-->
    <div class="container">
        <div class="text" aos="zoom-in"><h1><?php echo $lang['TITLE_INFO']; ?></h1></div>
        <div class="image" aos="zoom-in"><img src="media/petra-01.jpg" alt="Petra image"></div>
        <div class="text" aos="fade-down"><p><?php echo $lang['TEXT_1']; ?></p></div>
        <div class="image" aos="fade-right"><img src="media/petra-02.jpg" alt="Petra image 2"></div>
        <div class="text" aos="fade-left"><p><?php echo $lang['TEXT_2']; ?></p></div>
        <div class="image" aos="zoom-in"><img src="media/Petra_location.png" alt="Petra location"></div>
        <div class="text" aos="zoom-out"><p><?php echo $lang['TEXT_3']; ?></p></div>
        <div class="image" aos="slide-up"><img src="media/nabateans.jpg" alt="nabateans"></div>
        <div class="text" aos="flip-up"><p><?php echo $lang['TEXT_4']; ?></p></div>

        <script src='https://cdn.rawgit.com/michalsnik/aos/1.0.1/dist/aos.js'></script>
        <script src="../animation/js/index.js"></script>


        </div>

<!--    FOOTER-->
    <div class="footer">
    <p>&copy;2016</p>
        <p><a href="http://www.petra-jordan.tk/" id="footer-site-link">petra-jordan.tk</a></p>
    <p><?php echo $lang['AUTHOR_NAME']; ?></p><br>


        <div class="lang-selector">
            <p id="lang-p"><?php echo $lang['LANG_CHANGE_TITLE']; ?></p>
            <form method="GET">

              <select id="language" name="lang">
                <option value="bg"><?php echo $lang['BG']; ?></option>
                <option value="de"><?php echo $lang['DE']; ?></option>
              </select>
                <input type="submit" value="<?php echo $lang['LANG_CHANGE_SUBMIT_BTN']; ?>">
            </form>
        </div>
    </div>
</body>
</html>
