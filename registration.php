<!DOCTYPE html>
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
        <a class="mr-5 hover:text-gray-900" href="index.html"><b>Home</b></a>
        <a class="mr-5 hover:text-gray-900" href="about.html"><b>About</b></a>
        <a class="mr-5 hover:text-gray-900" href="rent.html"><b><u>Rent</u></b></a>
        <a class="mr-5 hover:text-gray-900" href="sell.html"><b><u>Sell</u></b></a>
        <a class="mr-5 hover:text-gray-900" href="buy.html"><b><u>Buy</u></b></a>
        <a class="mr-5 hover:text-gray-900" href="hostels.html"><b><u>Hostels/P.G.</u></b></a>

      </nav>
      <button>
        <a class="inline-flex items-center bg-cyan-500 hover:bg-cyan-600 border-0 py-1 px-3 focus:outline-none hover:bg-indigo-500 rounded text-black mt-4 md:mt-0"
          href="registration.html"><b style="border: padding-right: 10px;
                             padding-left: 5px;
                             padding-top:10px;
                           padding-bottom:10px;">Sign Up</b></a>

      </button>

    </div>
  </header>
  <section class="bg-gray-50 dark:bg-gray-200">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-gray">
        <img class="w-8 h-8 mr-2" src="img/l2.png" alt="logo">
        Finding Homes
      </a>
      <div
        class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Create and account
          </h1>
          <form class="space-y-4 md:space-y-6" action="saveregister.php" method="post">
            <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
              <input type="email" name="email" id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Please Enter a Valid Email" required="">
            </div>
            <div>
              <label for="password"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
              <input type="password" name="password" id="password" placeholder="Password"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required="">
            </div>
            <div>
              <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                password</label>
              <input type="confirm-password" name="confirm-password" id="confirm-password" placeholder="Confirm password"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required="">
            </div>
            <div class="flex items-start">
              <div class="flex items-center h-5">
                <input id="terms" aria-describedby="terms" type="checkbox"
                  class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                  required="">
              </div>
              <div class="ml-3 text-sm">
                <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a
                    class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="index.php">Terms and
                    Conditions</a></label>
              </div>
            </div>
            <button type="submit" class="w-full text-white bg-primary-600 hover:bg-gray-500 focus:ring-4 focus:outline-none
              focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600
              dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create
              an account</button>
            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
              Already have an account? <a href="index.php"
                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="script.js">
</body >

</html >