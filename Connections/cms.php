<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_cms = "localhost";
$database_cms = "kim_4site";
$username_cms = "kim_larocca";
$password_cms = "Lotus18641864!";
$cms = mysqli_connect($hostname_cms, $username_cms, $password_cms, $database_cms) or trigger_error(mysqli_error(),E_USER_ERROR);
$websiteID = 20;
$idxLink = 'http://www.realtor.com/realestateandhomes-search/Oradell_NJ';
$homePage = 127;
$aboutmePage = 128;
$listingsPage = 129;
$contactPage = 132;
$localinfoPage = 131;
$searchPage = 130;
$meetOurTeamPage = 135;
$careersPage = 136;
$resourcesPage = 139;
$mortgagePage = 140;
?>
