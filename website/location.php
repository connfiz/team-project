<!DOCTYPE html>
<html>
<?php

date_default_timezone_set('Dublin/London');
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // This month
    $ym = date('Y-m');
}

$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

$today = date('Y-m-j', time());

$html_title = date('Y / m', $timestamp);

// Create prev & next month link     mktime(hour,minute,second,month,day,year)
$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
// You can also use strtotime!
// $prev = date('Y-m', strtotime('-1 month', $timestamp));
// $next = date('Y-m', strtotime('+1 month', $timestamp));

// Number of days in the month
$day_count = date('t', $timestamp);

// 0:Sun 1:Mon 2:Tue ...
$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
//$str = date('w', $timestamp);


// Create Calendar!!
$weeks = array();
$week = '';

// Add empty cell
$week .= str_repeat('<td></td>', $str);

for ( $day = 1; $day <= $day_count; $day++, $str++) {


    $date = $ym . '-' . $day;

    if ($today == $date) {
        $week .= '<td class="today">' . $day;
    } else {
        $week .= '<td>' . $day;
    }
    $week .= '</td>';

    // End of the week OR End of the month
    if ($str % 7 == 6 || $day == $day_count) {

        if ($day == $day_count) {
            // Add empty cell
            $week .= str_repeat('<td></td>', 6 - ($str % 7));
        }

        $weeks[] = '<tr>' . $week . '</tr>';

        // Prepare for new week
        $week = '';
    }
}
?>













<!---code done by conn fitzgerald--->


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="logo.png">




    <!-- Bootstrap CSS CDN -->
    <!--- code from https://bootstrapious.com/p/bootstrap-sidebar --->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
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
                    <a href="shop.html">Shop</a>
                </li>


                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="#pageSubmenu">Locations</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">

                    </ul>
                </li>

                <li>
                    <a href="contactInfo.html">Contact</a>
                </li>

            </ul>


        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>


                </div>
            </nav>

            <div class="shopfront">
                <img class="myImages" id="myImg" src="images/shopfront.png" alt="shopfront"
                    style="width:800px;height:400px;" class="shadow p-3 mb-5 bg-white rounded" class="img-thumbnail">

            </div>

            <h1 style="text-align: center"> how to find us </h1>
            </br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            </br>

            <div class="row">
                <div class="col-md-4">
                  
                        style="width:500px;height:250px;" class="shadow p-3 mb-5 bg-white rounded" class="img-thumbnail"
                        ,>
                    <h1 style="text-align: center"> calander </h1>
                    <p> this is where our calander will be </p>
                </div>
                <div class="col-md-4">

                    <style>
                        th {
                            height: 29px;
                            text-align: center;
                            font-weight: 650;
                        }
                        td{
                            height: 100px;

                        }
                        .today {
                            background: orange;
                        }
                    </style>
                    <div class = "container">
                        <h3><a></a>2016/ 06</h3>
                        <br>
                        <table class="table table-bordered">
                            <tr>
                                <th>S </th>
                                <th>M </th>
                                <th>T </th>
                                <th>W </th>
                                <th>T </th>
                                <th>F </th>
                                <th>S </th>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td>1 </td>
                                    <td>2 </td>
                                    <td>3 </td>
                                    <td>4 </td>
                                </tr>
                                <tr>
                                    <td>5 </td>
                                    <td>6 </td>
                                    <td>7 </td>
                                    <td>8 </td>
                                    <td>9 </td>
                                    <td>10 </td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td>12 </td>
                                    <td>13 </td>
                                    <td class ="today">14 </td>
                                    <td>15 </td>
                                    <td>16 </td>
                                    <td>17</td>
                                    <td>18</td>
                                </tr>
                                <tr>
                                    <td>19 </td>
                                    <td>20 </td>
                                    <td>21 </td>
                                    <td>22 </td>
                                    <td>23 </td>
                                    <td>24 </td>
                                    <td>25 </td>
                                </tr>
                                <tr>
                                    <td>26 </td>
                                    <td>27 </td>
                                    <td>28 </td>
                                    <td>29 </td>
                                    <td>30 </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                        </table>
                    </div>


                    <img class="myImages" id="myImg" src="images/map.png" alt="crab" style="width:500px;height:250px;"
                        class="shadow p-3 mb-5 bg-white rounded" class="img-thumbnail" ,>
                    <h1 style="text-align: center"> location on google maps </h1>
                    <p> this is where the google map location will show up after selcting date this will be done using
                        iframes and a custom api </p>
                </div>
                <div class="col-md-4">


                    <link rel="stylesheet" href="styles1.css">

                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img01">
                        <div id="caption"></div>
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
                <!--- code from https://bootstrapious.com/p/bootstrap-sidebar --->
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
                <!--- all imagess from https://unsplash.com/ this is the javascript to be able to toggole the side bar --->
</body>
</html>
