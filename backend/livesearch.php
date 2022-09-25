<?php
include '_conn.php';
$sql = "SELECT * FROM `stock`";
$result = $conn->query($sql);

//get the q parameter from URL
$q=$_GET["q"];
$hint="";
//lookup all links from the xml file if length of q>0
if (strlen($q)>=0) {
  for($i=0; $i<10; $i++) {
      //find a link matching the search text
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if (stristr($row["id"],$q)||stristr($row["name"],$q)||stristr("",$q)) {
                if ($hint=="") {
                    $hint='<div class="card mb-3">
                    <div class="card-header" id="headingOne">
                        <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>' . strtoupper($row["name"])  . ' | ID: ' . strtoupper($row["id"]) . ' | QUANTITY: ' . strtoupper($row["quantity"]) . '</strong></h6>
                        <span >
                            <a href="ADD QUANTITY.php?id=' . strtoupper($row["id"]) . '&&qt=' . strtoupper($row["quantity"]) . '&&ppu=' . strtoupper($row["priceperunit"]) . '&&name=' . strtoupper($row["name"]) . '"  class="btn btn-success display-4"><span class="mbr-iconfont-btn"></span>ADD AMOUNT</a>
                            <a href="View Product.php?id=' . strtoupper($row["id"]).'" type="submit" class="btn btn-info display-4"><span class="mbr-iconfont-btn"></span>VIEW</a>
                            <a href="backend/remove.php?id=' . strtoupper($row["id"]).'" class="btn btn-primary display-4"><span class="mbr-iconfont-btn"></span>REMOVE</a>
                        </span>
                    </div>
                </div>
                ';
                } else {
                    $hint=$hint . '<br /><div class="card mb-3">
                    <div class="card-header" id="headingOne">
                        <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>' . strtoupper($row["name"])  . ' | ID: ' . strtoupper($row["id"]) . ' | QUANTITY: ' . strtoupper($row["quantity"]) . '</strong></h6>
                        <span >
                            <a href="ADD QUANTITY.php?id=' . strtoupper($row["id"]) . '&&qt=' . strtoupper($row["quantity"]) . '&&ppu=' . strtoupper($row["priceperunit"]) . '&&name=' . strtoupper($row["name"]) . '"  class="btn btn-success display-4"><span class="mbr-iconfont-btn"></span>ADD AMOUNT</a>
                            <a href="View Product.php?id=' . strtoupper($row["id"]).'" type="submit" class="btn btn-info display-4"><span class="mbr-iconfont-btn"></span>VIEW</a>
                            <a href="backend/remove.php?id=' . strtoupper($row["id"]).'" class="btn btn-primary display-4"><span class="mbr-iconfont-btn"></span>REMOVE</a>
                        </span>
                    </div>
                </div>
                ';
                }
            }
        }
    }
    
  }
}
// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="<p class='mbr-fonts-style align-left mb-0 display-7'>NO SUGGESTION</p>";
} else {
  $response=$hint;
}
//output the response
echo $response;
