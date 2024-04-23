<?php
session_start();
extract($_POST);
if(isset($_POST['Submit']))
{

 
  if(($adminname=="admin")&&($password=="admin"))
{
?>
<script language="javascript">
alert("Login Successfully");
window.location.href="admin.php";
</script>
<?php

}
else
{
 ?>
<script language="javascript">
alert("Failed");
window.location.href="admin_home.php";
  </script>
<?php
}

}?>














<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | About :: main </title>
  <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
    <!-- aos CSS -->
    <link rel="stylesheet" href="assets/css/aos.css">
    <style type="text/css">
<!--
-->
	.image{
		background-image: url('assets/images/admin4.jpg')
	}
    .style3 {color: #000000}
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
            <li class="nav-item active">
              <a class="nav-link" href="admin_home.php">Admin </a>            </li>
            <li class="nav-item">
              <a class="nav-link" href="organizer_login.php">Client</a>            </li>
 
            <li class="nav-item">
              <a class="nav-link" href="user_login.php">User</a>            </li>
                  <!--/search-right-->
                  
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!--/header-->
  <!--/w3l-inner-page-breadcrumb-->
  <section class="w3l-inner-page-breadcrumb">
    <div class="breadcrumb-bg image py-5">
      <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
        <h2 align="center" class="title pt-5 style3"><span class="style3">ADMIN</span> <span class="style3">HOME</span></h2>
        <form name="form1" method="post" action="">
          <p>&nbsp;</p>
          <table width="348" height="150" border="0 " align="center">
            <tr>
              <td width="179"><span class="style3">Admin name </span></td>
              <td width="153"><label>
                <input name="adminname" type="text" id="adminname" required>
              </label></td>
            </tr>
            <tr>
              <td><span class="style3">Password</span></td>
              <td><label>
                <input name="password" type="password" id="password" required>
              </label></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><label>
                <div align="center">
                  <input type="submit" name="Submit" value="Login">
                </div>
              </label></td>
            </tr>
          </table>
          <p align="center">&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </form>
        <p align="center">&nbsp;</p>
        <p>&nbsp;	</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div>
    </div>
  </section>
  <!-- //w3l-inner-page-breadcrumb-->
  <div class="about-content py-5">
    <div class="container py-md-5 py-2"></font> </div>
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