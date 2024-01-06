<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" , initial-scale="1.0">
  <link rel="stylesheet" href="./assets/css/output.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
  <title>INDIGO</title>
</head>

<body>
  <div class="flex items-center justify-center w-full h-screen bg-gray-100 loading hidden">
    <div class="flex justify-center items-center space-x-1 text-sm text-gray-700">

      <svg fill='none' class="w-6 h-6 animate-spin" viewBox="0 0 32 32" xmlns='http://www.w3.org/2000/svg'>
        <path clip-rule='evenodd' d='M15.165 8.53a.5.5 0 01-.404.58A7 7 0 1023 16a.5.5 0 011 0 8 8 0 11-9.416-7.874.5.5 0 01.58.404z' fill='currentColor' fill-rule='evenodd' />
      </svg>


      <div>Loading ...</div>
    </div>
  </div>
  <header class="bg-white dark:bg-black">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="./index.html" class="-m-1.5 p-1.5">
          <span class="sr-only">INDIGO</span>
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" id="toggle">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12 ">
        <a href="./index.html" class="text-sm font-semibold leading-6 text-gray-900 dark:text-white">Home</a>
        <a href="./products.php" class="text-sm font-semibold leading-6 text-gray-900 dark:text-white">Products</a>
        <a href="./about.html" class="text-sm font-semibold leading-6 text-gray-900 dark:text-white">About</a>
        <a href="./contact.html" class="text-sm font-semibold leading-6 text-gray-900 dark:text-white">Contact</a>
        <a href="./dashboard.php" class="text-sm font-semibold leading-6 text-blue-500"><span id="user-id">Log In</span><span aria-hidden="true">&rarr;</span></a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <div class="flex flex-col justify-center ml-3">
          <input type="checkbox" id="light-switch" class="light-switch sr-only" />
          <label class="relative cursor-pointer p-2" for="light-switch">
            <svg class="dark:hidden" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
              <path class="fill-slate-300" d="M7 0h2v2H7zM12.88 1.637l1.414 1.415-1.415 1.413-1.413-1.414zM14 7h2v2h-2zM12.95 14.433l-1.414-1.413 1.413-1.415 1.415 1.414zM7 14h2v2H7zM2.98 14.364l-1.413-1.415 1.414-1.414 1.414 1.415zM0 7h2v2H0zM3.05 1.706 4.463 3.12 3.05 4.535 1.636 3.12z" />
              <path class="fill-slate-400" d="M8 4C5.8 4 4 5.8 4 8s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4Z" />
            </svg>
            <svg class="hidden dark:block" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
              <path class="fill-slate-400" d="M6.2 1C3.2 1.8 1 4.6 1 7.9 1 11.8 4.2 15 8.1 15c3.3 0 6-2.2 6.9-5.2C9.7 11.2 4.8 6.3 6.2 1Z" />
              <path class="fill-slate-500" d="M12.5 5a.625.625 0 0 1-.625-.625 1.252 1.252 0 0 0-1.25-1.25.625.625 0 1 1 0-1.25 1.252 1.252 0 0 0 1.25-1.25.625.625 0 1 1 1.25 0c.001.69.56 1.249 1.25 1.25a.625.625 0 1 1 0 1.25c-.69.001-1.249.56-1.25 1.25A.625.625 0 0 1 12.5 5Z" />
            </svg>
            <span class="sr-only">Switch to light / dark version</span>
          </label>
        </div>'
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden hidden dark:bg-black" role="dialog" aria-modal="true" id="menu">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-10 "></div>
      <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 dark:bg-black">
        <div class="flex items-center justify-between">
          <a href="./index.html" class="-m-1.5 p-1.5">
            <span class="sr-only">INDIGO</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 dark:text-white" id="toggleoff">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10 dark:divide-white">
            <div class="space-y-2 py-6">
              <a href="./index.html" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 dark:text-white">Home</a>
              <a href="./products.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 dark:text-white">Products</a>
              <a href="./about.html" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 dark:text-white">About</a>
              <a href="./contact.html" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 dark:text-white">Contact</a>
            </div>
            <div class="py-6 dark:divide-blue-500/10 divide-y dark:divide-white">
              <a href="" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-blue-500 hover:bg-gray-50 dark:text-blue-900 ">Log
                in</a>
            </div>
            <div class=" divide-y divide-gray-500/10 py-6 flex dark:divide-white hover:divide-blue-500">
              <div class="flex flex-col justify-center ml-3 -mx-3">
                <input type="checkbox" id="light-switch" class="light-switch sr-only" />
                <label class="relative cursor-pointer p-2" for="light-switch">
                  <svg class="dark:hidden" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-slate-300" d="M7 0h2v2H7zM12.88 1.637l1.414 1.415-1.415 1.413-1.413-1.414zM14 7h2v2h-2zM12.95 14.433l-1.414-1.413 1.413-1.415 1.415 1.414zM7 14h2v2H7zM2.98 14.364l-1.413-1.415 1.414-1.414 1.414 1.415zM0 7h2v2H0zM3.05 1.706 4.463 3.12 3.05 4.535 1.636 3.12z" />
                    <path class="fill-slate-400" d="M8 4C5.8 4 4 5.8 4 8s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4Z" />
                  </svg>
                  <svg class="hidden dark:block" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-slate-400" d="M6.2 1C3.2 1.8 1 4.6 1 7.9 1 11.8 4.2 15 8.1 15c3.3 0 6-2.2 6.9-5.2C9.7 11.2 4.8 6.3 6.2 1Z" />
                    <path class="fill-slate-500" d="M12.5 5a.625.625 0 0 1-.625-.625 1.252 1.252 0 0 0-1.25-1.25.625.625 0 1 1 0-1.25 1.252 1.252 0 0 0 1.25-1.25.625.625 0 1 1 1.25 0c.001.69.56 1.249 1.25 1.25a.625.625 0 1 1 0 1.25c-.69.001-1.249.56-1.25 1.25A.625.625 0 0 1 12.5 5Z" />
                  </svg>
                  <span class="sr-only">Switch to light / dark version</span>
                </label>
              </div>'
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="main">
    <div class="bg-gradient-to-r from-white to-blue-200 lg:p-24 dark:from-black dark:to-blue-500">
      <div id="content" class="p-20 justify-center justify-items-center">
        <h1 class="lg:text-6xl pd-3 text-4xl dark:text-white">Welcome Back,</h1>
        <a class="text-xl pt-6 pl-3 dark:text-white">
          <?php
          require './php/db.php';
          
          $id = $_SESSION['id'];
          $username = $_SESSION['username'];
          $query = "SELECT * FROM profile JOIN users on profile.uid = users.uid WHERE profile.username = ? AND profile.uid = ?";
          $stmt = $conn->prepare($query);
          $stmt->bind_param("ss", $username, $id);
          $stmt->execute();
          $result = $stmt->get_result();
          
          $row = $result->fetch_assoc();
          
          echo $row['firstname'] . " " . $row['lastname'];
          ?>
        </a>
      </div>
    </div>
    <div class="grid grid-rows-1 bg-gray-300 p-20 lg:p-24 justify-items-center dark:bg-black">
      <div class="pb-10">
        <h1 class="lg:text-6xl capitalize text-4xl text-blue-500 dark:text-white">Profile</h1>
      </div>
      <div class="container grid grid-cols-4 gap-6 pt-4 pb-16">

        <!-- sidebar -->
        <div class="col-span-1">
          <div class="px-4 py-3 shadow flex items-center gap-4 bg-blue-200 dark:bg-blue-600">
            <div class="flex-shrink-0">
              <img src="./assets/images/profiles/<?php echo  $row['profileimage']; ?>" alt="<?php echo  $row['firstname'] . " " . $row['lastname']; ?>" class="rounded-full w-14 h-14 border border-gray-200 p-1 object-cover">
            </div>
            <div class="flex-grow">
              <p class="text-gray-600">Hello,</p>
              <h4 class="text-gray-800 font-medium"><?php echo  $row['firstname'] . " " . $row['lastname']; ?></h4>
            </div>
          </div>

          <div class="mt-6 shadow rounded p-4 divide-y divide-gray-200 space-y-4 text-gray-600 bg-blue-200 dark:bg-blue-600">
            <div class="space-y-1 pl-8">
              <a href="#" class="relative text-primary block font-medium capitalize transition">
                <span class="absolute -left-8 top-0 text-base">
                  <i class="fa-regular fa-address-card"></i>
                </span>
                Manage account
              </a>
              <a href="#" class="relative hover:text-primary block capitalize transition">
                Profile information
              </a>
              <a href="#" class="relative hover:text-primary block capitalize transition">
                Manage addresses
              </a>
              <a href="#" class="relative hover:text-primary block capitalize transition">
                Change password
              </a>
            </div>

            <div class="space-y-1 pl-8 pt-4">
              <a href="#" class="relative hover:text-primary block font-medium capitalize transition">
                <span class="absolute -left-8 top-0 text-base">
                  <i class="fa-solid fa-box-archive"></i>
                </span>
                My order history
              </a>
              <a href="#" class="relative hover:text-primary block capitalize transition">
                My returns
              </a>
              <a href="#" class="relative hover:text-primary block capitalize transition">
                My Cancellations
              </a>
              <a href="#" class="relative hover:text-primary block capitalize transition">
                My reviews
              </a>
            </div>

            <div class="space-y-1 pl-8 pt-4">
              <a href="#" class="relative hover:text-primary block font-medium capitalize transition">
                <span class="absolute -left-8 top-0 text-base">
                  <i class="fa-regular fa-credit-card"></i>
                </span>
                Payment methods
              </a>
              <a href="#" class="relative hover:text-primary block capitalize transition">
                voucher
              </a>
            </div>

            <div class="space-y-1 pl-8 pt-4">
              <a href="#" class="relative hover:text-primary block font-medium capitalize transition">
                <span class="absolute -left-8 top-0 text-base">
                  <i class="fa-regular fa-heart"></i>
                </span>
                My wishlist
              </a>
            </div>

            <div class="space-y-1 pl-8 pt-4">
              <a href="./php/logout.php" class="relative hover:text-primary block font-medium capitalize transition">
                <span class="absolute -left-8 top-0 text-base">
                  <i class="fa-solid fa-right-from-bracket"></i>
                </span>
                Logout
              </a>
            </div>

          </div>
        </div>
        <!-- ./sidebar -->

        <!-- info -->
        <div class="col-span-3 shadow rounded px-6 pt-5 pb-7 bg-blue-200 dark:bg-blue-600">
          <h4 class="text-lg font-medium capitalize mb-4">
            Profile information
          </h4>
          <form method="post" action="./php/userprofileinsert.php">
            <div class="space-y-4">
              <div class="grid grid-cols-2 gap-4">
                <div>
                  <label for="first">First name</label>
                  <input type="text" name="first" id="first" class="input-box" placeholder="<?php echo  $row['firstname']; ?>">
                </div>
                <div>
                  <label for="last">Last name</label>
                  <input type="text" name="last" id="last" class="input-box" placeholder="<?php echo  $row['lastname']; ?>">
                </div>
              </div>
              <div class="grid grid-cols-2 gap-4">
                <div>
                  <label for="birthday">Birthday</label>
                  <input type="date" name="birthday" id="birthday" class="input-box" placeholder="<?php echo  $row['dob']; ?>">
                </div>
                <div>
                  <label for="gender">Gender</label>
                  <select name="gender" id="gender" class="input-box">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>
              </div>
              <div class="grid grid-cols-2 gap-6">
                <div>
                  <label for="email">Email Address</label>
                  <input type="email" name="email" id="email" class="input-box" placeholder="<?php echo  $row['email']; ?>">
                </div>
                <div>
                  <label for="phone">Phone number</label>
                  <input type="text" name="phone" id="phone" class="input-box" placeholder="<?php echo  $row['phonenumber']; ?>">
                </div>
              </div>
              <div class="grid grid-cols-2 gap-6">
                <div>
                  <label for="address">Address</label>
                  <input type="text" name="address" id="address" class="input-box" placeholder="<?php echo  $row['address']; ?>">
                </div>
                <div>
                  <label for="city">City</label>
                  <input type="text" name="city" id="city" class="input-box" placeholder="<?php echo  $row['city']; ?>">
                </div>
              </div>
              <div class="grid grid-cols-2 gap-6">
                <div>
                  <label for="zip">Zip</label>
                  <input type="text" name="zip" id="zip" class="input-box" placeholder="<?php echo  $row['zip']; ?>">
                </div>
                <div>
                  <label for="country">State</label>
                  <input type="text" name="country" id="country" class="input-box" placeholder="<?php echo  $row['country']; ?>">
                </div>
              </div>
              <div class="grid grid-cols-1 gap-6">
                <div>
                  <label for="pimage">Profile Image</label>
                  <input type="file" name="pimage" id="pimage" class="input-box" filename="<?php echo  $row['profileimage']; ?>">
                </div>
              </div>
            </div>
            <div class="mt-4">
              <button type="submit" class="p-4 text-center text-white bg-blue-900 border border-primary rounded-md hover:bg-transparent hover:text-primary transition font-medium">save
                changes</button>
            </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  <footer class="bg-white p-6 lg:px-8 dark:bg-black">
    <div class="items-center flex flex-coloum flex-nowrap justify-between content-end sm:flex-row">
      <div class="">
        <p class="sm:text-2xl lg:text-2xl dark:text-white">© 2023 · INDIGO LLC. All rights reserved</p>
      </div>
      <div class="p-5 justify-between flex flex-coloum flex-nowrap dark:text-white dark:fill-white">
        <a class="z-30">
          <!--<span class="lg:hidden sm:hidden">facebook</span>-->
          <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-11 dark:fill-white">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z">
              </path>
            </g>
          </svg>
        </a>
        <a class="z-20">
          <!--<span class="lg:hidden sm:hidden">Instagram</span>-->
          <svg style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-11 dark:fill-white">
            <path d="M256,0c141.29,0 256,114.71 256,256c0,141.29 -114.71,256 -256,256c-141.29,0 -256,-114.71 -256,-256c0,-141.29 114.71,-256 256,-256Zm0,96c-43.453,0 -48.902,0.184 -65.968,0.963c-17.03,0.777 -28.661,3.482 -38.839,7.437c-10.521,4.089 -19.444,9.56 -28.339,18.455c-8.895,8.895 -14.366,17.818 -18.455,28.339c-3.955,10.177 -6.659,21.808 -7.437,38.838c-0.778,17.066 -0.962,22.515 -0.962,65.968c0,43.453 0.184,48.902 0.962,65.968c0.778,17.03 3.482,28.661 7.437,38.838c4.089,10.521 9.56,19.444 18.455,28.34c8.895,8.895 17.818,14.366 28.339,18.455c10.178,3.954 21.809,6.659 38.839,7.436c17.066,0.779 22.515,0.963 65.968,0.963c43.453,0 48.902,-0.184 65.968,-0.963c17.03,-0.777 28.661,-3.482 38.838,-7.436c10.521,-4.089 19.444,-9.56 28.34,-18.455c8.895,-8.896 14.366,-17.819 18.455,-28.34c3.954,-10.177 6.659,-21.808 7.436,-38.838c0.779,-17.066 0.963,-22.515 0.963,-65.968c0,-43.453 -0.184,-48.902 -0.963,-65.968c-0.777,-17.03 -3.482,-28.661 -7.436,-38.838c-4.089,-10.521 -9.56,-19.444 -18.455,-28.339c-8.896,-8.895 -17.819,-14.366 -28.34,-18.455c-10.177,-3.955 -21.808,-6.66 -38.838,-7.437c-17.066,-0.779 -22.515,-0.963 -65.968,-0.963Zm0,28.829c42.722,0 47.782,0.163 64.654,0.933c15.6,0.712 24.071,3.318 29.709,5.509c7.469,2.902 12.799,6.37 18.397,11.969c5.6,5.598 9.067,10.929 11.969,18.397c2.191,5.638 4.798,14.109 5.509,29.709c0.77,16.872 0.933,21.932 0.933,64.654c0,42.722 -0.163,47.782 -0.933,64.654c-0.711,15.6 -3.318,24.071 -5.509,29.709c-2.902,7.469 -6.369,12.799 -11.969,18.397c-5.598,5.6 -10.928,9.067 -18.397,11.969c-5.638,2.191 -14.109,4.798 -29.709,5.509c-16.869,0.77 -21.929,0.933 -64.654,0.933c-42.725,0 -47.784,-0.163 -64.654,-0.933c-15.6,-0.711 -24.071,-3.318 -29.709,-5.509c-7.469,-2.902 -12.799,-6.369 -18.398,-11.969c-5.599,-5.598 -9.066,-10.928 -11.968,-18.397c-2.191,-5.638 -4.798,-14.109 -5.51,-29.709c-0.77,-16.872 -0.932,-21.932 -0.932,-64.654c0,-42.722 0.162,-47.782 0.932,-64.654c0.712,-15.6 3.319,-24.071 5.51,-29.709c2.902,-7.468 6.369,-12.799 11.968,-18.397c5.599,-5.599 10.929,-9.067 18.398,-11.969c5.638,-2.191 14.109,-4.797 29.709,-5.509c16.872,-0.77 21.932,-0.933 64.654,-0.933Zm0,49.009c-45.377,0 -82.162,36.785 -82.162,82.162c0,45.377 36.785,82.162 82.162,82.162c45.377,0 82.162,-36.785 82.162,-82.162c0,-45.377 -36.785,-82.162 -82.162,-82.162Zm0,135.495c-29.455,0 -53.333,-23.878 -53.333,-53.333c0,-29.455 23.878,-53.333 53.333,-53.333c29.455,0 53.333,23.878 53.333,53.333c0,29.455 -23.878,53.333 -53.333,53.333Zm104.609,-138.741c0,10.604 -8.597,19.199 -19.201,19.199c-10.603,0 -19.199,-8.595 -19.199,-19.199c0,-10.604 8.596,-19.2 19.199,-19.2c10.604,0 19.201,8.596 19.201,19.2Z" />
          </svg>
        </a>
        <a>
          <!--<span class="lg:hidden sm:hidden">Twitter</span>-->
          <svg enable-background="new 0 0 56.693 56.693" viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-11 dark:fill-white">
            <path d="M28.348,5.157c-13.6,0-24.625,11.027-24.625,24.625c0,13.6,11.025,24.623,24.625,24.623c13.6,0,24.623-11.023,24.623-24.623  C52.971,16.184,41.947,5.157,28.348,5.157z M40.752,24.817c0.013,0.266,0.018,0.533,0.018,0.803c0,8.201-6.242,17.656-17.656,17.656  c-3.504,0-6.767-1.027-9.513-2.787c0.486,0.057,0.979,0.086,1.48,0.086c2.908,0,5.584-0.992,7.707-2.656  c-2.715-0.051-5.006-1.846-5.796-4.311c0.378,0.074,0.767,0.111,1.167,0.111c0.566,0,1.114-0.074,1.635-0.217  c-2.84-0.57-4.979-3.08-4.979-6.084c0-0.027,0-0.053,0.001-0.08c0.836,0.465,1.793,0.744,2.811,0.777  c-1.666-1.115-2.761-3.012-2.761-5.166c0-1.137,0.306-2.204,0.84-3.12c3.061,3.754,7.634,6.225,12.792,6.483  c-0.106-0.453-0.161-0.928-0.161-1.414c0-3.426,2.778-6.205,6.206-6.205c1.785,0,3.397,0.754,4.529,1.959  c1.414-0.277,2.742-0.795,3.941-1.506c-0.465,1.45-1.448,2.666-2.73,3.433c1.257-0.15,2.453-0.484,3.565-0.977  C43.018,22.849,41.965,23.942,40.752,24.817z" />
          </svg>
        </a>
        <a>
          <!--<span class="lg:hidden sm:hidden">LinkedIn</span>-->
          <svg style="enable-background:new 0 0 67 67;" fill="#000000" viewBox="0 0 67 67" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-11 dark:fill-white">
            <path d="M50.837,48.137V36.425c0-6.275-3.35-9.195-7.816-9.195  c-3.604,0-5.219,1.983-6.119,3.374V27.71h-6.79c0.09,1.917,0,20.427,0,20.427h6.79V36.729c0-0.609,0.044-1.219,0.224-1.655  c0.49-1.22,1.607-2.483,3.482-2.483c2.458,0,3.44,1.873,3.44,4.618v10.929H50.837z M22.959,24.922c2.367,0,3.842-1.57,3.842-3.531  c-0.044-2.003-1.475-3.528-3.797-3.528s-3.841,1.524-3.841,3.528c0,1.961,1.474,3.531,3.753,3.531H22.959z M34,64  C17.432,64,4,50.568,4,34C4,17.431,17.432,4,34,4s30,13.431,30,30C64,50.568,50.568,64,34,64z M26.354,48.137V27.71h-6.789v20.427  H26.354z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#010101;" />
          </svg>
        </a>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="./js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

</html>