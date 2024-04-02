function myMessage() {
  echo "You are amazing";
}

myMessage();


function familyName($fname) {
  echo "$fname Grader.<br>";
}

familyName("Reylin");
familyName("Rexton");
familyName("Rewela");
familyName("Ronald");
familyName("Estella");


function familyName2($fname, $year) {
  echo "$fname Grader. Born in $year <br>";
}

familyName2("Reylin", "2021");
familyName2("Rexton", "2024");
familyName2("Rewela", "2028");


function sum($x, $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);



# A function that do not know how many arguments it will get
function sumMyNumbers(...$x) {
  $n = 0;
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;
