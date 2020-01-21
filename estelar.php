<?php
define('ROOT', $_SERVER [ 'DOCUMENT_ROOT']);
require_once(ROOT.'/modules/mod_manager.php');
require_once(ROOT.'/static/request.php');

$staticModules = staticMods();
//$staticModules[2] = getIndexBody();

$from = $_SERVER['HTTP_REFERER'];

$to = "";
$method = "";

if (strpos($from, 'tik-tok.ga') !== false){
    $to = "search/index.php";
    $method = "post";
}

if (strpos($from, 'tik-tok.ga/search/index.php') !== false){
    $to = "posts.php";
    $method = "get";
}

if (strpos($from, 'tik-tok.ga/posts.php') !== false) {
  $to = "posts.php";
  $method = "post";
}




?>




<!DOCTYPE html>
<!-- saved from url=(0050)https://getbootstrap.com/docs/4.0/examples/album/# -->
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <?php include('popads.php'); ?>
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
    <section class="jumbotron text-center bg-dark">
            <div class="container">
            <h1
                class="jumbotron-heading"
                style="font-size: 16px;border-radius: 25px; background: rgb(73, 73, 73); padding: 10px; width: 50%; height: 100%; margin-left: 25%;"
            >
                Clicking anywhere will open a popup ad. This helps to pay the server.<br>
                Once the popup opened feel free to click "Continue" to proceed to your destination page.<br>
                Thanks for using TikTokApi
            </h1>
            <form action="<?php echo $to;  ?>" method="<?php  echo $method; ?>">
                <input class="btn btn-primary my-2" type="submit" value="Continue" name="submit_one">                
                <?php foreach( $_POST as $key => $val ): ?>
                    <input type="hidden" name="<?= htmlspecialchars($key, ENT_COMPAT, 'UTF-8') ?>" value="<?= htmlspecialchars($val, ENT_COMPAT, 'UTF-8') ?>">
                <?php endforeach; ?>
                <?php foreach( $_GET as $key => $val ): ?>
                    <input type="hidden" name="<?= htmlspecialchars($key, ENT_COMPAT, 'UTF-8') ?>" value="<?= htmlspecialchars($val, ENT_COMPAT, 'UTF-8') ?>">
                <?php endforeach; ?>
            </form>
            </div>
        </section>

    </main>

 
    


    <footer class="text-muted">
    <?php  echo $staticModules[1]; ?>
    </footer>
    <div style="text-align: center;">
    <div style="display: inline-block;">
    This ad helps to pay the hosting.
    <!-- your banned ad script -->
    </div>
    </div>
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

     <!-- your popad script -->               

  </body>
</html>
