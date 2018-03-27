<?php
session_start();
ini_set('display_errors', 1);//this for show errs
error_reporting(~0);// the same target
include "class/autoLoader.class.php";
include "global.php";?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset='utf-8'/>
    <title>MAZAD</title>
    <link rel="stylesheet" href="fonts/SEGOEUI.ttf"/>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/selectize.default.css"/>
    <link rel="stylesheet" href="css/styles/loader.css">
    <?php includeStyles();?>
    <link rel="stylesheet" href="css/styles/frontEnd.css" class="sepp"/> <!-- STRONG STYLE-->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
</head>