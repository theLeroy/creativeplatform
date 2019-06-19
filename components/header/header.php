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
    <link href="<?php $url ?>/libs/costom.css" rel="stylesheet" type="text/css">
    <link href="./css/style.css" rel="stylesheet" type="text/css">

  </head>
  <header class="mainheader">
    <a href="/">
      <div class="headerlogo">
        <img id="headerImage" src="<?php $url ?>/media/Icon/Logo.svg" alt="">
      </div>
    </a>
    <div class="headeruserpicture">
      <img src="/media/Bilder/users/user_id_1/mainimg.jpg" class="" alt="">
    </div>
    <a href="/pages/newproject">
    <div class="headeradd">
      <?xml version="1.0" encoding="iso-8859-1"?>
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      	 viewBox="0 0 52 52" style="enable-background:new 0 0 52 52;" xml:space="preserve">
      <g>
      	<path d="M26,0C11.664,0,0,11.663,0,26s11.664,26,26,26s26-11.663,26-26S40.336,0,26,0z M26,50C12.767,50,2,39.233,2,26
      		S12.767,2,26,2s24,10.767,24,24S39.233,50,26,50z"/>
      	<path d="M38.5,25H27V14c0-0.553-0.448-1-1-1s-1,0.447-1,1v11H13.5c-0.552,0-1,0.447-1,1s0.448,1,1,1H25v12c0,0.553,0.448,1,1,1
      		s1-0.447,1-1V27h11.5c0.552,0,1-0.447,1-1S39.052,25,38.5,25z"/>
      </g>
      </svg>
    </div>
  </a>
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
      float: right;
      margin-top: 25px;
      margin-left: 20px;
      margin-right: 20px;
      cursor: pointer;
    }
    .headeradd > a {
      width: 50px;
      height: 50px;
    }
    .headeradd > svg {
      width: 50px;
      height: 50px;
    }
    .headeruserpicture {
      display: inline-block;
      float: right;
      height: 50px;
      width: 50px;
      margin-top: 25px;
    }
    .headeruserpicture > img {
      background-size: cover;
      border-radius: 100%;
      width: 100%;
      height: 50px;
      background-repeat: no-repeat;
      background-position: 50% 50%;
      object-fit: cover;
    }
  </style>
