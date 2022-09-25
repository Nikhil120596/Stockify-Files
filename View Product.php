<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.6.11, mobirise.com">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="View Product">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="">
  
  <link rel="icon" type="logo" href="assets/images/mbr-696x464.jpg">
  <title>View Product</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  <?php

    if(isset($_COOKIE['Stock'])) {
        if($_COOKIE['Stock'] == 'StockAdmin') {
            header('Location: Portal.php');
        }
    }
  if(!isset($_GET['id']) || !isset($_COOKIE['Stock'])){
    header('Location: Portal.php');
  }
  else{
    $id = $_GET['id'];
  }
  ?>
  <section data-bs-version="5.1" class="features6 cid-teEOvp91ym" id="features7-o">
    
    <div class="container">
        <div class="card-wrapper">
            <div class="row align-items-center flex-row-reverse">
                        <?php
                            include 'backend/_conn.php';
                            $sql = "SELECT * FROM `stock`";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    if($id == $row["id"] ) {
                                        echo '<div class="col-12">
                                        <div class="text-box">
                                            <h5 class="mbr-title mbr-fonts-style display-2"><strong>' . strtoupper($row["name"]) . '</strong></h5>
                                            <p class="mbr-text mbr-fonts-style display-7">ID No. :- ' . strtoupper($row["id"]) . '<br>STATUS :- ' . strtoupper($row["priceperunit"]) . '<br>QUANTITY :- ' . strtoupper($row["quantity"]) . '<br>TOTAL PRICE :- ' . strtoupper($row["total price"]) . '<br>DATE ADDED :- ' . strtoupper($row["dateadded"]) . '<br>TIME ADDED :- ' . strtoupper($row["timeadded"]) . '<br>EXPIRY :- ' . strtoupper($row["expiration"]) . '</p>
                                            
                                            <div class="mbr-section-btn pt-3"><a href="Update product.php?id=' . strtoupper($row["id"]).'" class="btn btn-primary display-4"><span class="mobi-mbri mobi-mbri-edit mbr-iconfont mbr-iconfont-btn"></span>UPDATE</a> <a href="Portal.php" class="btn btn-success display-4">GO BACK</a></div>
                                        </div>
                                    </div>
                                    ';
                                    }
                                }
                            } 
                            else {
                                echo '<p class="mbr-text mbr-fonts-style mt-3 display-7">0 results</p>';
                            }
                        ?>
            </div>
        </div>
    </div>
</section>
<section class="display-7" style="padding: 0;align-items: center;justify-content: center;align-content: center;display: flex;position: relative;height: 0rem;pointer-events: none;">
    <a href="https://mobiri.se/" style="height: 0rem;position: absolute;width: 100%;z-index: 1;">
        <img alt="" style="height: 0rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
    </a>
    <p style="margin: 0;text-align: center;" class="display-7"></p>
    <a style="z-index:1" href="https://mobirise.com/offline-website-builder.html"></a>
</section>

<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/theme/js/script.js"></script>  
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>