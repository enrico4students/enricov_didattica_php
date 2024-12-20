<?php
// https://www.w3schools.com/php/php_casting.asp

const ENDL = "<br/>\n";

echo ENDL;
/* Change Data Type
Casting in PHP is done with these statements:
(string) - Converts to data type String
(int) - Converts to data type Integer
(float) - Converts to data type Float
(bool) - Converts to data type Boolean
(array) - Converts to data type Array
(object) - Converts to data type Object

(unset) - Converts to data type NULL
*/

// Cast to string
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a); echo ENDL;
var_dump($b); echo ENDL;
var_dump($c); echo ENDL;
var_dump($d); echo ENDL;
var_dump($e); echo ENDL;



function dump1() {
    global $a, $b,$c, $d, $e, $f, $g;
    echo "dump" . ENDL;
    echo "\$a = " . $a . ENDL . "\$b = " . $b . ENDL . "\$c = " . $c . ENDL . "\$d = " .  $d . ENDL . "\$e = " . $e . ENDL . "\$f = " . $f . ENDL . "\$g = " . $g . ENDL;
}


// Cast to Integer
// To cast to integer, use the (int) statement:

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;
dump1();


//Cast to Float
//To cast to float, use the (float) statement:
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;
dump1();


// Cast to Boolean
// To cast to boolean, use the (bool) statement:
$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;
dump1();


echo ENDL;
/* Cast to Array
To cast to array, use the (array) statement:
*/ 
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;
dump1();




echo ENDL;
/* When converting into arrays, 
- most data types converts into an indexed array with one element.
- NULL values converts to an empty array object.
- Objects converts into associative arrays where 
  the property names becomes the keys and the property values becomes the values:
*/ 
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "Volvo");
  
  $myCar = (array) $myCar;
  var_dump($myCar);


echo ENDL;
/* Cast to Object
To cast to object, use the (object) statement: 
*/ 
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;
# dump1(); crashes with objects




echo ENDL;
/* When converting into objects, 
- most data types converts into  a object with one property, named "scalar", with the corresponding value.
- NULL values converts to an empty object.
- Indexed arrays converts into objects with the index number as property name and the value as property value.
- Associative arrays converts into objects with the keys as property names and values as property values.
*/ 
$a = array("Volvo", "BMW", "Toyota"); // indexed array
$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array

$a = (object) $a;
$b = (object) $b;
var_dump($a); # ev added
var_dump($b); # ev added




echo ENDL;
/* Cast to NULL
To cast to NULL, use the (unset) statement:
*/ 
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (unset) $a;
$b = (unset) $b;
$c = (unset) $c;
$d = (unset) $d;
$e = (unset) $e;
dump1();
