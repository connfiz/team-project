<!DOCTYPE html><!---code done by conn fitzgerald--->
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="logo.png">




    <!-- Bootstrap CSS CDN --><!--- code from https://bootstrapious.com/p/bootstrap-sidebar --->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  --><!-- Sidebar  --><!--- code from https://bootstrapious.com/p/bootstrap-sidebar this is to name the diffrent tabs in the side bar and to add the logo  --->
        <nav id="sidebar">
          <div class="sidebarlogo">
            <img src="logo.png" alt="logo">
          </div>
            <div class="sidebar-header">
                <h3>MCHugh's coffee pod</h3>
            </div>

            <ul class="list-unstyled components">
                <p></p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="shop.html">shop</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="location.html">locations</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">

                    </ul>
                </li>

                <li>
                    <a href="contactInfo.html">Contact</a>
                </li>
            </ul>


        </nav>
        <!-- Page Content  -->
        <div id="content"><!--- code from https://bootstrapious.com/p/bootstrap-sidebar --->
<!--- code from https://bootstrapious.com/p/bootstrap-sidebar  this is to be able to toggle the side bar  --->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    </div>
                </div>
            </nav>
<!-- Page Content  -->
<div class="container">
<div id="message"></div>
<div class="row mt-2 pb-3">
<?php
include 'config.php';
$stmt = $conn->prepare('SELECT * FROM product');
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()):
?>
<div class="col-sm-6 col-md-4 col-lg-3 mb-2">
<div class="card-deck">
<div class="card p-2 border-secondary mb-2">
<img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
<div class="card-body p-1">
 <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
 <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

</div>
<div class="card-footer p-1">
 <form action="" class="form-submit">
   <div class="row p-2">
     <div class="col-md-6 py-1 pl-4">
       <b>Quantity : </b>
     </div>
     <div class="col-md-6">
       <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
     </div>
   </div>
   <input type="hidden" class="pid" value="<?= $row['id'] ?>">
   <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
   <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
   <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
   <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
   <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
     cart</button>
 </form>
</div>
</div>
</div>
</div>
<?php endwhile; ?>
</div>
</div>
<!-- Displaying Products End -->

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

<script type="text/javascript">
$(document).ready(function() {

// Send product details in the server
$(".addItemBtn").click(function(e) {
e.preventDefault();
var $form = $(this).closest(".form-submit");
var pid = $form.find(".pid").val();
var pname = $form.find(".pname").val();
var pprice = $form.find(".pprice").val();
var pimage = $form.find(".pimage").val();
var pcode = $form.find(".pcode").val();

var pqty = $form.find(".pqty").val();

$.ajax({
url: 'action.php',
method: 'post',
data: {
pid: pid,
pname: pname,
pprice: pprice,
pqty: pqty,
pimage: pimage,
pcode: pcode
},
success: function(response) {
$("#message").html(response);
window.scrollTo(0, 0);
load_cart_item_number();
}
});
});

// Load total no.of items added in the cart and display in the navbar
load_cart_item_number();

function load_cart_item_number() {
$.ajax({
url: 'action.php',
method: 'get',
data: {
cartItem: "cart_item"
},
success: function(response) {
$("#cart-item").html(response);
}
});
}
});
</script>
      		<p>&copy;group 5</p>
      	</footer>


    <!-- jQuery CDN - Slim version (=without AJAX) --> <!--- code from https://bootstrapious.com/p/bootstrap-sidebar --->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS --> <!--- code from https://bootstrapious.com/p/bootstrap-sidebar --->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS --> <!--- code from https://bootstrapious.com/p/bootstrap-sidebar --->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN --> <!--- code from https://bootstrapious.com/p/bootstrap-sidebar --->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
        // create references to the modal...<!--- https://stackoverflow.com/questions/47798971/several-modal-images-on-page --->
      var modal = document.getElementById('myModal');
      // to all images -- note I'm using a class!
      var images = document.getElementsByClassName('myImages');
      // the image in the modal
      var modalImg = document.getElementById("img01");
      // and the caption in the modal
      var captionText = document.getElementById("caption");

      // Go through all of the images with our custom class
      for (var i = 0; i < images.length; i++) {
      var img = images[i];
      // and attach our click listener for this image.
      img.onclick = function(evt) {
      console.log(evt);
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
      }
      }

      var span = document.getElementsByClassName("close")[0];

      span.onclick = function() {
      modal.style.display = "none";
      }
    </script>
</body>
<!--- all imagess from https://unsplash.com/ this is the javascript to be able to toggole the side bar --->

</html>
