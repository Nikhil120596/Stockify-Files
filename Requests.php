<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="UTS">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="Statement">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/whatsapp-image-2022-08-24-at-7.15.13-pm.jpeg" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Statement</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="content11 cid-thzg8MAITU" id="content11-y">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="mbr-section-btn align-center"><a class="btn btn-primary display-4" onclick="window.print()">PRINT STATEMENT</a>
                    <a class="btn btn-primary-outline display-4" href="portal.php">GO BACK</a></div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content7 cid-thzg99x51T" id="content7-z">
    
    <div class="container">
        <div class="row justify-content-center">
            <?php
                include 'backend/_conn.php';
                $sql = "SELECT * FROM `ask` ORDER BY id DESC";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                            echo '<div class="col-12 col-md-11">
                            <blockquote>
                                <h5 class="mbr-section-title mbr-fonts-style mb-2 display-7"><strong>STOCK ASK ID: ' . strtoupper($row["id"]) . ' </strong><span style="color:orange;">| '; 
                                
                                if(strtoupper($row["status"]) == "PENDING" ){
                                    echo '<a class="btn btn-success display-4" href="backend/asktransaction.php?id=' . strtoupper($row["id"]) . '">COMPLETED</a>';
                                }
                                
                                echo'</span></h5>
                                <p class="mbr-text mbr-fonts-style display-4">DATE: ' . strtoupper($row["date"]) . ' | TIME: ' . strtoupper($row["time"]) . ' </p>
                                <p class="mbr-text mbr-fonts-style display-4">MESSAGE: ' . strtoupper($row["message"]) . '</p>';
                                $checkarray = [];
                                $count = 0;
                                $items = explode("-",$row["ask"]);
                                for ($x = count($items)-2; $x >= 0; $x--) {
                                    $item = explode("|",$items[$x]);
                                    if (!in_array($item[0], $checkarray)){
                                        $checkarray[$count] = $item[0];
                                        $count++;
                                        echo '<p class="mbr-text mbr-fonts-style display-4">ID: ' . strtoupper($item[0]) . '| NAME: ' . strtoupper($item[1]) . '| QUANTITY ' . strtoupper($item[2]) . '</p>';
                                    }
                                }
                            echo'</blockquote>
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
</section><section class="display-7" style="pointer-events:none;padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"><a href="https://mobiri.se/2312362" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a><p style="margin: 0;text-align: center;" class="display-7"></p><a style="z-index:1" href="https://mobirise.com/website-maker.html">   </a></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/theme/js/script.js"></script>  
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    
  </body>
</html>