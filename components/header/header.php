<!DOCTYPE html>
  <html lang="de">
  <head>
    <meta charset="'.$hederjson['Meta']['UTF'].'">
    <meta name="description" content="Deine Platform um Events zu organisiern">
    <meta name="keywords" content="Organisieren, Platform, Events, Evenements">
    <meta name="author" content="Evenements">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"> -->
    <!-- <meta name="apple-mobile-web-app-status-bar-style" content="black"> -->
    <meta name="apple-mobile-web-app-status-bar-style" content="white">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, minimal-ui">
    <title>Evenements</title>
    <link href="<?php $url ?>/libs/reset.css" rel="stylesheet" type="text/css">

  </head>
  <header class="mainheader">
    <div class="headerlogo">
      <img id="headerImage" src="<?php $url ?>/media/Icon/Logo.svg" alt="">
    </div>
    <div class="headeradd">
      add
    </div>
    <div class="headeruserpicture">
      userpicture
    </div>
  </header>

  <style media="screen">
    .mainheader {
      width: 100%;
      z-index: 999;
      padding-left: 80px;
      padding-right: 80px;
      background: #fff;
      box-shadow: 0px 1px 5px #0000004a;
      height: 100px;
      position: relative;
      top: 0;
      box-sizing: border-box;
      display: block;
    }
    .headerlogo {
      height: 100px;
      width: 150px;

      display: inline-block;
      padding-top: 30px;
      box-sizing: border-box;
      /* transform: translateY(-50%); */
    }
    #headerImage {
      width: auto;
      height: auto;
      z-index: 10;
    }
    .headeradd {
      display: inline-block;
    }
    .headeruserpicture {
      display: inline-block;
      float: right;
    }
  </style>
