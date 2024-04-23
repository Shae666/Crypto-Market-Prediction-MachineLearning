<?php
include("dbconnect.php");
extract($_POST);
session_start();
?>


<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>User  | About :: Benil </title>
  <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
    <!-- aos CSS -->
    <link rel="stylesheet" href="assets/css/aos.css">
<style type="text/css">
<!--
.style9 {color: #00FF00}
.style12 {
	color: #FFFFFF;
	font-weight: bold;
}
.style13 {color: #FFFF00}
-->
</style></head>

<body>
  <!--header-->
  <header id="site-header" class="w3lhny-head fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0">
        <h1> <a class="navbar-brand" href="index.html">
            <span class="sublog">EVENT</span>PLANNER
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
              <a class="nav-link" href="user_home.php">Home <span class="sr-only">(current)</span></a>            </li>
            <li class="nav-item">
              <a class="nav-link" href="event_details.php">Event Details </a>            </li>
            <li class="nav-item active">
              <a class="nav-link" href="user_bookings.php">Bookings</a>            </li>
            <li class="nav-item">
              <a class="nav-link" href="user_login.php">Logout</a>            </li>
                  <!--/search-right-->
                 
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!--/header-->
  <!--/w3l-inner-page-breadcrumb-->
  <section class="w3l-inner-page-breadcrumb">
    <div class="breadcrumb-bg py-5">
      <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
        <h2 class="title pt-5 style9">EVENT DETAILS</h2>
        <p class="title pt-5">&nbsp;</p>
        <form name="form1" method="post" action="">
          <table width="50%" height="78"  align="center">
            <tr>
              <td width="9%"><span class="style12">Id</span></td>
			  <td width="22%"><span class="style12">User Name</span></td>
              <td width="18%"><span class="style12">Event Name </span></td>
              <td width="28%"><span class="style12">Hall Name </span></td>
              <td width="23%"><span class="style12">Price</span></td>
            </tr>
            <?php
			$qrys1 = mysql_query("select * from user_booking");
			 
			while($row = mysql_fetch_array($qrys1))
			 
		  {
	 ?>
            <tr>
              <td><span class="style13"><?php echo $row['id'];?></span></td>
			  <td><span class="style13"><?php echo $row['uname'];?></span></td>
              <td><span class="style13"><?php echo $row['ename'];?></span></td>
              <td><span class="style13"><?php echo $row['hallname'];?></span></td>
              <td><span class="style13"><?php echo $row['price'];?></span></td>
            </tr>
            <?php
	 }
	 ?>
          </table>
        </form>
        <p class="title pt-5">&nbsp;</p>
      </div>
    </div>
  </section>
  <!-- //w3l-inner-page-breadcrumb--><!--/team-sec-->
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