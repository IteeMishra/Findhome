<!DOCTYPE html>
<?php include "db.php";?>
<html>
 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Finding Homes</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Rowdies&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>(function (w, d) {w.CollectId = "643840ee65918a6a20801ab7"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async = true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s);})(window, document);</script>
</head>

<body>

  <header class="text-gray-600 bg-gray-300 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <img src="img/l2.png" <span class="ml-3 text-xl" style="padding-right: 20px;">
        <p class="mr-5  text-xl"> Finding Homes</p></span>
      </a>
      <nav
        class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center position:fixed">
        <a class="mr-5 hover:text-gray-900" href="index.php"><b>Home</b></a>
        <a class="mr-5 hover:text-gray-900" href="about2.php"><b>About</b></a>
        <a class="mr-5 hover:text-gray-900" href="rent.php"><b><u>Rent</u></b></a>
        <a class="mr-5 hover:text-gray-900" href="buy.php"><b><u>Buy</u></b></a>
        <a class="mr-5 hover:text-gray-900" href="hostels.php"><b><u>Hostels/P.G.</u></b></a>

      </nav>
      <button>
        <a class="inline-flex items-center bg-cyan-500 hover:bg-cyan-600 border-0 py-1 px-3 focus:outline-none hover:bg-indigo-500 rounded text-black mt-4 md:mt-0"
          href="registration.php"><b style="border: padding-right: 10px;
                                     padding-left: 5px;
                                     padding-top:10px;
                                     padding-bottom:10px;">Sign
            Up</b></a>

      </button>

    </div>
  </header>
  <section class="text-gray-600 bg-gray-100 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center bg-gray-200">
      <div
        class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">"Find a place that belongs to you and
          your family...."</p>
          <div class="flex w-full md:justify-start justify-center items-end">
            <div class="relative mr-4 md:w-full lg:w-full xl:w-1/2 w-2/4">
              <label for="hero-field" class="leading-7 text-sm text-gray-600">Location</label>
              <input type="text" onclick="location()" id="hero-field" name="hero-field"
                placeholder="Enter your preferred location" class="w-full bg-gray-100 rounded border bg-opacity-50 border-gray-300 focus:ring-2 focus:ring-indigo-200
              focus:bg-transparent focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8
              transition-colors duration-200 ease-in-out">
            </div>
            <button onclick="myFunction()"
              class="inline-flex text-white bg-cyan-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Search</button>
          </div>
          <p class="text-sm mt-2 text-gray-500 mb-8 w-full">"Home Sweet Home"</p>
          <div class="flex lg:flex-row md:flex-col">

          </div>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="hero" src="img/hero.jpg">
      </div>
    </div>
  </section>
  <section class="text-gray-600 body-font relative">
    <div class="absolute inset-0 bg-gray-300">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.364871737979!2d81.07069381485228!3d26.89191298313652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399958aa9da50cb7%3A0x8f5a1f4d75d0d691!2sShri%20Ramswaroop%20College%20Of%20Engineering%20and%20Management!5e0!3m2!1sen!2sus!4v1677480587665!5m2!1sen!2sus"
        width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <form action="savelogin.php" method="post">
    <div class="container px-5 py-24 mx-auto flex">
      <div
        class="lg:w-1/3 md:w-1/2 bg-gray-400 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Login for better experience..</h2>
        <p class="leading-relaxed mb-5 text-gray-900">Protecting your information is our duty.</p>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-900"><b>Email</b></label>
          <input type="email" id="email" name="email"
            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="number" class="leading-7 text-sm text-gray-900"></label><b>Password.</b></label>
          <input type="password" id="password" name="password"
            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="password" class="leading-7 text-sm text-gray-900"><b> Confirm Password</b></label>
          <input type="password" id="cp" name="cp"
            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <button
          class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Login</button>

      </div>
    </div>
  </section>
  <br>
  <br>
</form>
  <section class="text-gray-600 bg-gray-300 body-font ">
    <div class="container px-5 py-24 mx-auto" style="padding-top:120px;">
      <div class="flex flex-wrap w-full mb-20">
        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">"Different Categories..."
          </h1>
          <div class="h-1 w-20 bg-indigo-500 rounded"></div>
        </div>
        <p class="lg:w-1/2 w-full leading-relaxed text-gray-900"><i><b>There are four major categories available on our
              website .<br>First Category is of all the properties available for <b>Rent</b> purpose.<br>The second
              category includes all the<b> commercial</b> land available.<br>The
              third category is of available<b> Hostels.</b><br>And the fourth category is of houses that you can
              <b>Buy.</b></b> </i></p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-100 p-6 rounded-lg">
            <img class="h-40 rounded w-full object-cover object-center mb-6"
              src="https://mediacdn.99acres.com/media1/20408/8/408168094M-1676811202094.jpg" alt="content">
            <h3 class="tracking-widest text-gray-900 text-xs font-medium title-font">Rental Properties Available
            </h3>
            <a class="text-lg text-indigo-500 font-medium title-font mb-4" href="rent.html"><i>Click here to
                Explore</i></a>
            <p class="leading-relaxed text-base">Appartments ranging from flats to houses available.</p>
          </div>
        </div>
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-100 p-6 rounded-lg">
            <img class="h-40 rounded w-full object-cover object-center mb-6"
              src="https://aipl.com/assets/img/projects/ABC-Small-Image.jpg" alt="content">
            <h3 class="tracking-widest text-gray-900 text-xs font-medium title-font">Commercial Sites</h3>
            <a class="text-lg text-indigo-500 font-medium title-font mb-4" href="Commercial.html"><i>Click here
                to Explore</i></a>
            <p class="leading-relaxed text-base">Buildings for IT/Cyber/Cafes/Shopes/Malls available in various
              locations.</p>
          </div>
        </div>
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-100 p-6 rounded-lg">
            <img class="h-40 rounded w-full object-cover object-center mb-6"
              src="https://bbdniit.ac.in/wp-content/uploads/2018/02/hostel.jpg" alt="content">
            <h3 class="tracking-widest text-gray-900 text-xs font-medium title-font">Hostels Available</h3>
            <a class="text-lg text-indigo-500 font-medium title-font mb-4" href="hostels.html"><i>Click here to
                Explore</i></a>
            <p class="leading-relaxed text-base">Hostels and PG's for working professionals and students available at
              locations near to colleges and offices.</p>
          </div>
        </div>
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-100 p-6 rounded-lg">
            <img class="h-40 rounded w-full object-cover object-center mb-6"
              src="https://d1y9xwfspocdum.cloudfront.net/fit-in/900x506/filters:format(webp)/story/featureImage/81cfb972948363d63dbae1f3d511197c1516.jpg"
              alt="content">
            <h3 class="tracking-widest text-gray-900 text-xs font-medium title-font">Houses Available</h3>
            <a class="text-lg text-indigo-500 font-medium title-font mb-4" href="buy.html"><i>Click here to
                Explore</i></a>
            <p class="leading-relaxed text-base">Properties ,flats and houses available that are available to be sold.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


</body>

</html>