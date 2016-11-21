<?php
include_once '../common.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang['HTML_LANG']; ?>">
<head>
    <meta name="viewport" content="width=1110, initial-scale=1, maximum-scale=1">
    <title><?php echo $lang['PAGE_TITLE_PHOTOS1']; ?></title>
    <meta charset="UTF-8">
    <link rel="icon" href="../media/icon.png">
    <link rel="stylesheet" href="photos.css">
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
                <li><a href="../information/"><?php echo $lang['NAV_INFO']; ?></a></li>
                <li><a href="../video/"><?php echo $lang['NAV_VIDEOS']; ?></a></li>
                <li><a href="../about-me/"><?php echo $lang['NAV_ABOUT']; ?></a></li>
            </ul>
        </div>
    </div>

<!--    PAGE CONTENT-->
    <div class="container">
        <div class="text" aos="zoom-in"><h1><?php echo $lang['TITLE_PHOTOS1']; ?></h1></div>
        <div class="image" aos="slide-up"><img src="media/image01.jpg" alt="petra-photo-01"></div>
        <div class="image" aos="flip-up"><img src="media/image02.jpg" alt="petra-photo-02"></div>
        <div class="image" aos="flip-down"><img src="media/image03.jpg" alt="petra-photo-03"></div>
        <div class="image" aos="flip-right"><img src="media/image04.jpg" alt="petra-photo-04"></div>
        <div class="image" aos="flip-left"><img src="media/image05.jpg" alt="petra-photo-05"></div>
        <div class="image" aos="fade-right"><img src="media/image06.jpg" alt="petra-photo-06"></div>
        <div class="image" aos="fade-left"><img src="media/image07.jpg" alt="petra-photo-07"></div>
        <div class="image" aos="zoom-in"><img src="media/image08.jpg" alt="petra-photo-08"></div>
        <div class="image" aos="zoom-out"><img src="media/image09.jpg" alt="petra-photo-09"></div>


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
