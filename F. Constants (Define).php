<?php

#define(name, value, case-insensitive);

// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

// case-insensitive constant name
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;

// Arrays

define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];

function myTest() {
  echo GREETING;
}
 
myTest();

?>
