<?php
include("dbconnect.php");
session_start();
extract($_POST);
if(isset($_POST['Submit']))
{
$max_qry = mysql_query("select max(id) from organizer_signin");
	$max_row = mysql_fetch_array($max_qry);
	$id=$max_row['max(id)']+1;
$qry=mysql_query("insert into organizer_signin values('$id','$comname','$email','$username','$password','$number','$address')");
if($qry)
{
?>
<script language="javascript">
alert("Register Successfully.!");
window.location.href="organizer_login.php";
</script>
<?php
}
else
{
?>
<script language="javascript">
alert("failed.");
window.location.href="organizer_signin.php";
</script>
<?php
}
}
?>










<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Client Register </title>
  <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
    <!-- aos CSS -->
    <link rel="stylesheet" href="assets/css/aos.css">
    <style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
		.image{
			background-image: url('assets/images/pexels-photo-1045541.jpeg')
	}
    </style>
</head>

<body>
  <!--header-->
  <header id="site-header" class="w3lhny-head fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0">
        <h1> <a class="navbar-brand" href="index.html">
            <span class="sublog">Osborn</span>Ventures
          </a></h1>
        <!-- if logo is image enable this   
  <a class="navbar-brand" href="#index.html">
      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
  </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-lg-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_home.php">Admin </a>            </li>
            <li class="nav-item active">
              <a class="nav-link" href="organizer_login.php">Client</a>            </li>
            <li class="nav-item">
              <a class="nav-link" href="user_login.php">User</a>            </li>
                  <!--/search-right-->
                  
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!--/header-->
  <!--/w3l-inner-page-breadcrumb-->
  <section class="w3l-inner-page-breadcrumb">
    <div class="breadcrumb-bg image py-5">
      <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
        <h2 class="title pt-5">CREATE A CLIENT ACCOUNT</h2>
        <p class="title pt-5">&nbsp;</p>
        <p class="title pt-5">&nbsp;</p>
        <form name="form1" method="post" action="">
          <table width="436" border="0" align="center">
            <tr>
              <td width="133" height="24"><span class="style1">Company Name </span></td>
              <td width="293"><label>
                <input name="comname" type="text" id="comname" required>
              </label></td>
            </tr>
            <tr>
              <td><span class="style1">Email Address </span></td>
              <td><label>
                <input name="email" type="text" id="email" required>
              </label></td>
            </tr>
            <tr>
              <td><span class="style1">User Name</span></td>
              <td><label>
                <input name="username" type="text" id="username" required>
              </label></td>
            </tr>
            <tr>
              <td><span class="style1">Password</span></td>
              <td><label>
                <input name="password" type="text" id="password" required>
              </label></td>
            </tr>
            <tr>
              <td><span class="style1">Contact Number </span></td>
              <td><label>
                <input name="number" type="text" id="number" required>
              </label></td>
            </tr>
            <tr>
              <td><span class="style1">Address</span></td>
              <td><label>
                <textarea name="address" id="address" required></textarea>
              </label></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><label>
                
              <div align="left">
                <input type="submit" name="Submit" value="Submit">
              </div>
              </label></td>
            </tr>
          </table>
        </form>
        <p class="title pt-5">&nbsp;</p>
        <p class="title pt-5">&nbsp;</p>
      </div>
    </div>
  </section>
  <!-- //w3l-inner-page-breadcrumb-->
  <div class="about-content py-5">
    <div class="container py-md-5 py-2">
      <div class="row"></div>
    </div>
</div>
<!--/team-sec-->
<section class="w3l-team-main" id="team">
    <div class="team py-5">
    </section>
    <!--//team-sec-->
    <!-- footer7 block --><!-- //footer7 block -->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!-- owlcarousel -->
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false,
            loop: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->
  <!-- /aos -->
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/aosindex.js"></script>
  <!-- //aos -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->
  <script>
    $('#drop').change(function () {
      if ($('#drop').is(":checked")) {
        $('body').css('overflow', 'hidden');
      } else {
        $('body').css('overflow', 'auto');
      }
    });
  </script>
  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>