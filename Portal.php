<!DOCTYPE html>
<html  >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.6.11, mobirise.com">
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:image:src" content="">
    <meta property="og:image" content="">
    <meta name="twitter:title" content="Home">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="description" content="">
    
    <link rel="icon" type="logo" href="assets/images/mbr-696x464.jpg">
    <title>Stock System</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
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
    if(!isset($_COOKIE['Stock'])) {
        header('Location: index.php');
    }
?>
  <section data-bs-version="5.1" class="content4 cid-teWbGLL1Je" id="content4-r">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-md-12 col-lg-10">
                <h1 style="font-family: 'Inter', sans-serif;text-align:center" ><strong>STOCK SYSTEM </strong><a href="backend/logout.php" class="btn btn-primary display-4">LOGOUT</a></h1>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content4 cid-teEMymhKVh" id="content4-m">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-md-12 col-lg-10">
                <input id="portalsearch"  onkeyup="showResult(this.value)" type="text" class="form-control " placeholder="Search By Name or ID...">
                <div class="col-md-auto col-12 mbr-section-btn" >
                <?php
                    if(isset($_COOKIE['Stock'])) {
                        if($_COOKIE['Stock'] != 'StockAdmin') {
                            echo '<a href="Add Product.php" class="btn btn-success display-4"><span class="mbr-iconfont-btn"></span>ADD PRODUCT</a>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content17 cid-teEMDSD03a" id="content17-n">
    <div class="container">
        <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div id="livesearch" class="toggle-panel accordionStyles tab-content">
                        <?php
                            include 'backend/_conn.php';
                            $sql = "SELECT * FROM `stock`";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                        echo '<div class="card mb-3">
                                        <div class="card-header" id="headingOne">
                                            <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>' . strtoupper($row["name"]) . ' | ID: ' . strtoupper($row["id"]) . ' | QUANTITY: ' . strtoupper($row["quantity"]) . '</strong></h6>
                                            <span >
                                                <a href="ADD QUANTITY.php?id=' . strtoupper($row["id"]) . '&&qt=' . strtoupper($row["quantity"]) . '&&ppu=' . strtoupper($row["priceperunit"]) . '&&name=' . strtoupper($row["name"]) . '"  class="btn btn-success display-4"><span class="mbr-iconfont-btn"></span>ADD AMOUNT</a>';

                                                if($_COOKIE['Stock'] != 'StockAdmin') {
                                                    echo '<a href="View Product.php?id=' . strtoupper($row["id"]).'" type="submit" class="btn btn-info display-4"><span class="mbr-iconfont-btn"></span>VIEW</a>
                                                    <a href="backend/remove.php?id=' . strtoupper($row["id"]).'" class="btn btn-primary display-4"><span class="mbr-iconfont-btn"></span>REMOVE</a>';
                                                }
                                                
                                            echo '</span>
                                        </div>
                                    </div>
                                    ';
                                }
                            } 
                            else {
                                echo '<p class="mbr-text mbr-fonts-style mt-3 display-7">0 results</p>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="display-7" style="padding: 0;align-items: center;justify-content: center;align-content: center;display: flex;position: relative;height: 0rem;pointer-events: none;">
    <a href="https://mobiri.se/" style="height: 0rem;position: absolute;z-index: 1;">
        <img alt="" style="height: 0rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
    </a>
    <p style="margin: 0;text-align: center;" class="display-7"></p>
    <a style="z-index:1" href="https://mobirise.com/offline-website-builder.html"></a>
</section>

<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>  <script src="assets/theme/js/script.js"></script>  
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
    <script>
        function showResult(str) {
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                document.getElementById("livesearch").innerHTML=this.responseText;
                }
            }
            xmlhttp.open("GET","backend/livesearch.php?q="+str,true);
            xmlhttp.send();
        }
    </script>
  </body>
</html>