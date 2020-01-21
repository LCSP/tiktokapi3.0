<?php

define('ROOT', $_SERVER [ 'DOCUMENT_ROOT']);

require_once(ROOT.'/modules/mod_manager.php');
require_once(ROOT.'/static/builder.php');
require_once(ROOT.'/static/static.php');



//$keyword = $_POST["keyword"] ?? '';

$cursor = $_POST["cursor"] ?? '0';


$staticModules = staticMods();
if($cursor != "0"){
  
  $uid =  $_POST["keyword"] ?? '';

  $usr_img = $_POST["usr_img"] ?? '';
  $usr_nick = $_POST["usr_nick"] ?? '';
  $usr_desc = $_POST["usr_desc"] ?? '';
  
  $doc =[$usr_img,$usr_nick,$usr_desc]; 
  $Builder = new builderHelper();
  $headBuilder = new staticHelper();
  $headBuilder = $headBuilder->getPostHead($doc[0],$doc[1],$doc[2], "post");
  //$headBuilder = $Builder->buildInfo($uid);
  $bodyBuilder = $Builder->buildPostList($uid, $cursor, $doc);

  $staticModules[2] = $headBuilder[0] . $bodyBuilder;
}else{
  $uid = $_GET["uid"] ?? '';
  $Builder = new builderHelper();
  $headBuilder = $Builder->buildInfo($uid);
  $bodyBuilder = $Builder->buildPostList($uid, $cursor, $headBuilder[1]);

  $staticModules[2] = $headBuilder[0] . $bodyBuilder;
}




?>




<!DOCTYPE html>
<!-- saved from url=(0050)https://getbootstrap.com/docs/4.0/examples/album/# -->
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
      rel="icon"
      href="https://cdn4.iconfinder.com/data/icons/digital-marketing-134/52/49-512.png"
    />

    <title>TikTokApi</title>

    

    <!-- Bootstrap core CSS -->
    <link href="./index_files/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="./index_files/album.css" rel="stylesheet" />
  </head>

  <body>
    <?php  echo $staticModules[0]; ?>

    <main role="main">
    <?php  echo $staticModules[2]; ?>
    </main>

    <footer class="text-muted">
    <?php  echo $staticModules[1]; ?>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./index_files/jquery-3.2.1.slim.min.js"></script>
    <script src="./index_files/popper.min.js"></script>
    <script src="./index_files/bootstrap.min.js"></script>
    <script src="./index_files/holder.min.js"></script>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      width="348"
      height="225"
      viewBox="0 0 348 225"
      preserveAspectRatio="none"
      style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"
    >
      <defs><style type="text/css"></style></defs>
      <text
        x="0"
        y="17"
        style="font-weight:bold;font-size:17pt;font-family:Arial, Helvetica, Open Sans, sans-serif"
      >
        Thumbnail
      </text>
    </svg>

  </body>
</html>
