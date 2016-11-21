<?php
include_once '../common.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang['HTML_LANG']; ?>">
<head>
    <meta name="viewport" content="width=1110, initial-scale=1, maximum-scale=1">
    <title><?php echo $lang['PAGE_TITLE_ABOUT_ME']; ?></title>
    <meta charset="UTF-8">
    <link rel="icon" href="../media/icon.png">
    <link rel="stylesheet" href="about-me.css">
</head>
<body>

<!--          NAVIGATION-->
        <div class="nav">
        <a id="title-page" href="../about-me/"><?php echo $lang['TITLE_HEADER_ABOUT_ME']; ?></a>
        <div class="nav-menu">
            <img src="media/background.gif" id="background" alt="bg">
            <ul>
                <li><a href="../"><?php echo $lang['NAV_HOME']; ?></a></li>
                <li><a href="../information/"><?php echo $lang['NAV_INFO']; ?></a></li>
                <li><a href="../photos/"><?php echo $lang['NAV_PHOTOS']; ?></a></li>
                <li><a href="../video/"><?php echo $lang['NAV_VIDEOS']; ?></a></li>
            </ul>
        </div>
    </div>

<!--    PAGE CONTENT-->
    <div class="container">
        <img id="author" src="media/me.jpg" alt="author">
        <p><?php echo $lang['AUTHOR_NAME']; ?></p>
        <p>mitko.kalenderov@abv.bg</p>
        <p><?php echo $lang['USED_TECH']; ?></p>
        <p><?php echo $lang['INFO_WIKI']; ?><a href="<?php echo $lang['WIKI_LINK']; ?>" target="_blank">Wikipedia</a></p>
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
