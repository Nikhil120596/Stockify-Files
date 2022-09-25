<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.6.11, mobirise.com">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="Add Product">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="">
  
  <link rel="icon" type="logo" href="assets/images/mbr-696x464.jpg">
  <title>Add Product</title>
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
    if(!isset($_COOKIE['Stock'])) {
        header('Location: index.php');
    }
    else {
        if($_COOKIE['Stock'] == 'StockAdmin') {
            header('Location: Portal.php');
        }
    }
?>
  <section data-bs-version="5.1" class="form6 cid-teWbrb2WVc" id="form6-q">
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>ADD PRODUCT</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form">
                <form autocomplete="off" action="backend/addproduct.php" method="POST" class="mbr-form form-with-styler mx-auto" data-verified="">
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <input maxlength="50" required type="text" name="name" placeholder="Product Name" data-form-field="name" class="form-control" value="" id="name-form6-q">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <input maxlength="5" required type="number" onkeyup="calculatetotalprice()" name="quantity" placeholder="Quantity" data-form-field="email" class="form-control" value="" id="quantity-form6-q">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <input maxlength="7" required type="number" onkeyup="calculatetotalprice()" name="priceperunit" placeholder="Price per unit" data-form-field="phone" class="form-control" value="" id="ppu-form6-q">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <input style="pointer-events:none;" maxlength="10" required type="number" name="total_price" placeholder="Total price" data-form-field="name" class="form-control" value="" id="tp-form6-q">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <input maxlength="10" required type="hidden" name="dateadded" placeholder="Date" data-form-field="email" class="form-control" value="<?php echo date("d/m/y"); ?>" id="email-form6-q">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <input maxlength="15" required type="hidden" name="timeadded" placeholder="Time" data-form-field="phone" class="form-control" value="<?php date_default_timezone_set("Asia/Calcutta");echo date("h:i:sa"); ?>"" id="phone-form6-q">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <p class="mbr-fonts-style align-left mb-0 display-7">EXPIRATION DATE:</p>
                            <input maxlength="10" required type="date" name="expiration" placeholder="Expiration" data-form-field="phone" class="form-control" value="" id="phone-form6-q">
                        </div>
                        <div class="col-auto mbr-section-btn align-center"><button type="submit" class="btn btn-primary display-4"><span class="mbrib-plus mbr-iconfont mbr-iconfont-btn"></span>ADD</button></div>
                    </div>
                </form>
                <div class="col-auto mbr-section-btn align-center"><a href="Portal.php" class="w-50 btn btn-warning display-4">GO BACK</a></div>
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
    <script src="assets/mobirise/js/jquery.js"></script>
    <script>
        function calculatetotalprice() {
            let quantity = $('#quantity-form6-q').val();
            let ppu = $('#ppu-form6-q').val();
            $('#tp-form6-q').val(quantity*ppu);
        }
    </script>
  </body>
</html>