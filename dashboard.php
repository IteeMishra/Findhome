<?php include "link.php";
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Finding Homes</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Rowdies&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <header style="background:pink;">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <img src="img/l2.png" <span class="ml-3 text-xl" style="padding-right: 20px;">
        <p class="mr-5 text-xl" style="font-size:40px; color:white;"> Finding Homes</p></span>
      </a>
      <nav
        class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center position:fixed">
        <a class="mr-5 hover:text-gray-900 " style="font-size:20px;color:gray;" href="index.php"><b>Home</b></a>
        <a class="mr-5 hover:text-gray-900"style="font-size:20px;color:gray;" href="about2.php"><b>  About</b></a>
        <a class="mr-5 hover:text-gray-900 " style="font-size:20px;color:gray;" href="rent.php"><b> Rent</b></a>
        <a class="mr-5 hover:text-gray-900 fa fa-money"" style="font-size:20px;color:gray;" href="buy.php"><b> Buy</b></a>
        <a class="mr-5 hover:text-gray-900 fa fa-home"  style="font-size:20px;color:gray;" href="hostels.php"><b>  Hostels/P.G.</b></a>
		<a class="mr-5 hover:text-gray-900  fa fa-user"  style="font-size:20px;color:gray;" href="logout.php"><b>  Logout</b></a>

      </nav>
      <button>

      </button>

    </div>
  </header>

<style>
    .navbox {
        margin: 30px;
        min-height: 80px;
        background-color: gray;
        color:white;
        padding: 5%;
        text-align: center;
        text-decoration: none;
        box-shadow: 3px 3px 4px 3px #191414;
        border-radius: 5px;
       
    }

        .navbox:hover {
            background-color:grey;
            color: white;
            text-decoration: none;
        }

    #st {
        color: white;
    }
</style>
<!--Main Body Start  -->
<div class="container-fluid" style="background-image:url('/Content/images/slides/dash2.jpg'); background-size:cover; background-repeat:no-repeat;">
    <h1 align="center" style="color: #68392a; font-size:40px; font-weight: bold; margin-top: 0px; padding-top: 10px;">Customer Dashboard</h1>
	<hr>
	<hr>
	<hr>
    <div class="row" style="min-height:437px;margin-top:10px;">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">

            <div class="row text-white align-items-center" style="padding: 0% 0% 0% 5%">
                <a href="#" class="col-sm-3 navbox"><i class="fa fa-user" style="font-size:30px;" aria-hidden="true">
			</i><h6>User Profile </h6></a>
                <a href="rent.php" class="col-sm-3 navbox"><i class="fa fa-book" style="font-size:30px;" aria-hidden="true">
			</i><h6> My Booking</h6></a>
                <a href="rating.php" class="col-sm-3 navbox"><i class="fa fa-comments-o" style="font-size:30px;" aria-hidden="true">
			</i><h6> Feed Back </h6></a>

            </div>



            <div class="row text-white align-items-center" style="padding: 0% 0% 0% 5%">


                <a href="logout.php" class="col-sm-3 navbox"><i class="fa fa-comments" style="font-size:30px;" aria-hidden="true">
			</i><h6>Logout</h6></a>
                <a href="sms.php" class="col-sm-3 navbox"><i class="fa fa-envelope" style="font-size:30px;" aria-hidden="true">
			</i><h6>SMS/Email</h6></a>
                <a href="changepassword.php" class="col-sm-3 navbox"><i class="fa fa-key" style="font-size:30px;" aria-hidden="true">
			</i><h6>Change Paswrd</h6></a>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <!--Main Body End  -->
</div>

