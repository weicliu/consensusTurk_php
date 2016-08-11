<?php
session_start();
?>


<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>ConsensUs Pilot Study</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.teal-red.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        #view-source {
            position: fixed;
            display: block;
            right: 0;
            bottom: 0;
            margin-right: 40px;
            margin-bottom: 40px;
            z-index: 900;
        }
    </style>
</head>
<body>
<div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">

    <div class="demo-ribbon"></div>
    <main class="demo-main mdl-layout__content">
        <div class="demo-container mdl-grid">
            <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
            <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
                <div class="demo-crumbs mdl-color-text--grey-500">
                    ConsensUs &gt; Instruction
                </div>
                <h3>Instruction</h3>

                <p>
                    For this task, you will roleplay as a member of an Admissions Committee for an engineering college to evaluate three high school students.
                </p>



                <p>
                    Please read the information regarding the three candidates very carefully. Click <a href="https://docs.google.com/spreadsheets/d/1tXTdFMQ_VPg8Qzc5m_CFC10pN7UP3S1Xj03uPmY85CU/edit?usp=sharing" target="_blank"><b>HERE</b></a>!
                </p>


                <p>
                    Hit START when you’re ready to evaluate them.
                </p>

                <br>


                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                    <label><input name="" type="checkbox" value="" id="regText"  class="mdl-checkbox__input">I have read the instruction and opened the student information.</label>


                </label>

                <br>
                <br>

                <button onclick="location='turk_add.php'" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="regBtn" disabled>
                    Start
                </button>



        </div>
<!--        <footer class="demo-footer mdl-mini-footer">-->
<!--            <div class="mdl-mini-footer--left-section">-->
<!--                <ul class="mdl-mini-footer--link-list">-->
<!--                    <li><a href="#">ProtoLab</a></li>-->
<!---->
<!--                </ul>-->
<!--            </div>-->
<!--        </footer>-->
    </main>
</div>


<script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.9.0/jquery.min.js"></script>
<script>

    $(function(){
        var regBtn = $("#regBtn");
        $("#regText").change(function(){
            var that = $(this);
            that.prop("checked",that.prop("checked"));
            if(that.prop("checked")){
                regBtn.prop("disabled",false)
            }else{
                regBtn.prop("disabled",true)
            }
        });
    });
</script>



<script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</body>
</html>



