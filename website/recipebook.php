<!DOCTYPE html>  
<html>
<?php  ?>
  	

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
    integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    
    

</head>

<div class="wrapper">
    <!-- Sidebar  -->
    <!--- code from https://bootstrapious.com/p/bootstrap-sidebar this is to name the diffrent tabs in the side bar and to add the logo  --->
    <nav id="sidebar">
      <div class="sidebarlogo">
        <img src="logo.png" alt="logo">
      </div>
      <div class="sidebar-header">
        <h3>McHugh's Coffee Pod</h3>
      </div>

      <ul class="list-unstyled components">

        <li>
          <a href="index.html">Home</a>
        </li>
        <li>
          <a href="index.php">Shop</a>
        </li>


        </li>
        <li>
          <a href="about.html">About</a>
        </li>
        <li>
          <a href="location.html">Locations</a>

        </li>

        <li>
          <a href="contactInfo.html">Contact</a>
        </li>

      </ul>


    </nav>

    <!-- Page Content  -->
    <!--- code from https://bootstrapious.com/p/bootstrap-sidebar  this is to be able to toggle the side bar  --->
    <div id="content">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid1">

          <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left"></i>
            <span>Toggle Sidebar</span>
          </button>
          <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

          </div>
        </div>
      </nav>
      </nav>
      <!--Example used to create our newsletter pop uphttps://www.w3schools.com/js/js_popup.asp !-->
      <h1>Sign Up To Our Newsletter</h1>

      <button class="center" onclick="myFunction()">Newsletter</button>

      <p id="demo"></p>

      <script>
      function myFunction() {
        let text;
        let person = prompt("Please enter your email address:", "");
        if (person == null || person == "") {
          text = "You have requested not to join the newsletter.";
        } else {
          text = "Congratulations " + person + "! You are now part of our newsletter";
        }
        document.getElementById("demo").innerHTML = text;
      }
      </script>



<h1> <span>  This is a recipe book</h1> <span> <br>

    <img class = "center" src ="images/our cooking book.png" alt= cookbook>
    

    <div id="canvas" class="container group">
    
	
    <div id="primaryContent" class="group">

    <p>Click the button below to load the recipes.</p>
    <button class ="center" id="recipe"> recipe </button>
    <div id="update"></div>
       
       <script src="recipe.js"></script>
       <div class="line"></div>
        <div id="myModal" class="modal">
          <!--- code from https://stackoverflow.com/questions/47798971/several-modal-imgs-on-page --->
          <span class="close">&times;</span>
          <img class="modal-content" id="img01">
          <div id="caption"></div>
        </div>
    </div>
  </div>

  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <!--- code from https://bootstrapious.com/p/bootstrap-sidebar --->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <!-- Popper.JS -->
  <!--- code from https://bootstrapious.com/p/bootstrap-sidebar --->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
    crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <!--- code from https://bootstrapious.com/p/bootstrap-sidebar --->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
    crossorigin="anonymous"></script>
  <!-- jQuery Custom Scroller CDN -->
  <!--- code from https://bootstrapious.com/p/bootstrap-sidebar --->
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
  <!-- code from https://bootstrapious.com/p/bootstrap-sidebar --->
  <script type="text/javascript"> // code from https://bootstrapious.com/p/bootstrap-sidebar --->
    $(document).ready(function () {
      $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
      });
    });
    // create references to the modal...<!--- https://stackoverflow.com/questions/47798971/several-modal-imgs-on-page --->
    var modal = document.getElementById('myModal');
    // to all imgs -- note I'm using a class!
    var imgs = document.getElementsByClassName('myimgs');
    // the image in the modal
    var modalImg = document.getElementById("img01");
    // and the caption in the modal
    var captionText = document.getElementById("caption");

    // Go through all of the imgs with our custom class
    for (var i = 0; i < imgs.length; i++) {
      var img = imgs[i];
      // and attach our click listener for this image.
      img.onclick = function (evt) {
        console.log(evt);
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
      }
    }

    var span = document.getElementsByClassName("close")[0];

    span.onclick = function () {
      modal.style.display = "none";
    }
  </script>
  <!--- all imgss from https://unsplash.com/ this is the javascript to be able to toggole the side bar --->

  <!--- all imgss from https://unsplash.com/ --->
  <footer >
    <div class="container-fluid">
        <div class="row">
            <div class="line">
                <hr/>
            </div>
            <div class="col-12">Sitemap</div>
            <div class="col-12"><a  href="index.html">Home</a></div>
            <div class="col-12"><a  href="contactInfo.html">Contact</a></div>
            <div class="col-12"><a  href="location.html">Location</a></div>
            <div class="col-12"><a  href="shop.html">Shop</a></div>
            <div class="col-12"><a  href="about.html">About</a></div>
            <div class="col-12">© Group 5</div>
            <div class="line">
                <hr/>
            </div>
        </div>
    </div>
</footer>




<?php  ?> 
</html>