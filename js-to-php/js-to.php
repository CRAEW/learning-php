<?php
// Variable with random strings
// ============================
// Variable array for the header background images
$pictures = array(
    "https://www.pixelstalk.net/wp-content/uploads/2016/08/HD-PC-Wallpaper-2016.jpg",
    "https://wallpaperaccess.com/full/190815.jpg",
    "https://images7.alphacoders.com/528/528418.jpg",
    "https://wallpaperaccess.com/full/300068.jpg",
    "https://www.hdwallpaper.nu/wp-content/uploads/2016/02/golden-gate_wallpaper_030.jpg"
);

// Variable array with random name strings
$strings = array(
  "Kirito",
  "Erza",
  "Akatsuki",
  "Shiro",
  "Leo",
  "Rundel-Haus-Code",
  "Ken Kaneki",
  "Glenn Radars",
  "Momonga-Sama"
);

// Executables
// ===========
// These are directly inside the HTML

// Exercise 1: Changing attributes
// ===============================

// Variable that selects a random bg-image src
$headerImage = $pictures[mt_rand(0, count($pictures) - 1)];

// Exercise 2: Loops and randoms
// =============================

function loopWhile() {
  // Acces the global variable inside this function
  global $strings;

  // copie of the array $strings
  $arr_tracker = array_slice($strings, 0);

  // Create the header and ul
  echo "<h2>Exercise 1: Loops and stuff</h2>";
  echo "<ul>";

  // Loop through $strings array and create random li as long as there are values in the $arr_tracker array
  while(count($arr_tracker) > 0) {
    $randomString = $strings[mt_rand(0, count($strings) - 1)];
    echo "<li>Menu Item $randomString </li>";

    // Searches the random value in the array and deletes it
    if (($key = array_search($randomString, $arr_tracker)) !== false) {
     unset($arr_tracker[$key]);
     }
  }

  echo "</ul>";
}

// Exercise 3: String manipulation - cookies and printing
// ======================================================
function createUsername($name) {
  echo "<p>";

  $collection = str_split($name);

  for ($i = 0; $i <= count($collection); $i++) {
    addRandomColorSpan($collection[$i]);
  };

  echo "</p>";
}

function addRandomColorSpan($char) {
  $r = mt_rand(0, 255);
  $g = mt_rand(0, 255);
  $b = mt_rand(0, 255);

  echo "<span style='color:rgb($r,$g,$b);'>$char</span>";
}


?>
