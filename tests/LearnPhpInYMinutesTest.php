<?php // PHP code must be enclosed with <?php tags

// If your php file only contains PHP code, it is best practice
// to omit the php closing tag to prevent accidental output.

// Two forward slashes start a one-line comment.

# So will a hash (aka pound symbol) but // is more common

/*
     Surrounding text in slash-asterisk and asterisk-slash
     makes it a multi-line comment.
*/

// (all statements must end with a semicolon)

// Use "echo" or "print" to print output
// () are optional for print and echo
test('Print "Hello " with no line break, use print or echo', function () {

  // fill start
  print "Hello ";
  // fill end

  $this->expectOutputString("Hello ");
});

test('Prints "World" with a line break', function () {

  // fill start
  echo "World\n";
  // fill end 

  $this->expectOutputString("World\n");
});



test('Anything outside <?php tags is echoed automatically', function () {
  // That is because historically PHP started as a Template engine

  // fill start
  ?>Hello World Again!<?php
  // fill end

  $this->expectOutputString("Hello World Again!");
});


/************************************
 * Types & Variables
 */

// Variables begin with the $ symbol.
// A valid variable name starts with a letter or an underscore,
// followed by any number of letters, numbers, or underscores.

// You don't have to (and cannot) declare variables.
// Once you assign a value, PHP will create the variable with the right type.

// Boolean values are case-insensitive
$boolean = true;  // or TRUE or True
$boolean = FALSE; // or false or False

test('Set $boolean to true', function () {

  // fill start
  $boolean = true;
  // fill end
  
  $this->assertTrue($boolean);
});

test('Set $boolean to false', function () {

  // fill start
  $boolean = false;
  // fill end
  
  $this->assertFalse($boolean);
});

test('Set $int1 to 12', function () {

  // fill start
  $int1 = 12;
  // fill end
  
  $this->assertEquals(12, $int1);
});


test('Set $int2 to -12', function () {

  // fill start
  $int2 = -12;
  // fill end
  
  $this->assertEquals(-12, $int2);
});

test('Set $float to 1.234', function () {

  // fill start
  $float = 1.234;
  // fill end
  
  $this->assertEquals(1.234, $float);
});

test('Add two floats', function () {

  // fill start
  $sum = 1.234 + 5.678;
  // fill end
  
  $this->assertEquals(6.912, $sum);
});

test('Delete variable', function () {
  $int1 = 12;

  // fill start
  unset($int1);
  // fill end
  
  $this->assertFalse(isset($int1));
});


test('Add two integers', function () {

  // fill start
  $sum = 1 + 1;
  // fill end
  
  $this->assertEquals(2, $sum);
});

test('Subtract two integers', function () {

  // fill start
  $difference = 2 - 1;
  // fill end
  
  $this->assertEquals(1, $difference);
});

test('Multiply two integers', function () {

  // fill start
  $product = 2 * 2;
  // fill end
  
  $this->assertEquals(4, $product);
});

test('Divide two integers', function () {

  // fill start
  $quotient = 4 / 2;
  // fill end
  
  $this->assertEquals(2, $quotient);
});


// Shorthand arithmetic

test('Assign $number to 2', function () {
  $number = 2;

  // fill start
  $number = 2;
  // fill end
  
  $this->assertEquals(2, $number);
});

test('Shorthand increment $number by 2 with +=', function () {
  $number = 2;

  // fill start
  $number += 2;
  // fill end
  
  $this->assertEquals(4, $number);
});

test('Shorthand decrement $number by 2 with -=', function () {
  $number = 2;

  // fill start
  $number -= 2;
  // fill end
  
  $this->assertEquals(0, $number);
});

// $number /= $float; // Divide and assign the quotient to $number
test('Shorthand divide $number by 2 with /=', function () {
  $number = 4;

  // fill start
  $number /= 2;
  // fill end
  
  $this->assertEquals(2, $number);
});

test('Shorthand increment $number by 1 with ++', function () {
  $number = 2;

  // fill start
  $number++;
  // fill end
  
  $this->assertEquals(3, $number);
});

test('Shorthand decrement $number by 1 with --', function () {
  $number = 2;

  // fill start
  $number--;
  // fill end
  
  $this->assertEquals(1, $number);
});


test('Set $sgl_quotes with single quotes to World', function () {
  // Strings should be enclosed in single quotes;

  // fill start
  $sgl_quotes = 'World';
  // fill end
  
  $this->assertEquals('World', $sgl_quotes);
});


test('Set $sgl_quotes with double quotes to Hello', function () {
  // Strings should be enclosed in single quotes;
  $sgl_quotes = 'World';
  
  // Avoid using double quotes except to embed other variables

  // fill start
  $dbl_quotes = "Hello $sgl_quotes."; 
  // fill end
  
  $this->assertEquals('Hello World.', $dbl_quotes);
});

// Special characters are only escaped in double quotes
$escaped   = "This contains a \t tab character.";

test('Set $escaped to contain a tab character', function () {
  // Special characters are only escaped in double quotes
  // Set $escaped to This contains a x tab character.

  // fill start
  $escaped   = "This contains a \t tab character.";
  // fill end
  
  $this->assertEquals("This contains a \t tab character.", $escaped);
});


test('Set $apples to contain the number of apples', function () {
  // Set $apples to contain the number of apples
  $number = 5;

  // fill start
  $apples = "I have x apples to eat.";
  $apples = "I have $number apples to eat.";
  // fill end
  
  $this->assertEquals("I have 5 apples to eat.", $apples);
});

test('Concatenate two strings', function () {
  // String concatenation is done with .
  // Concatenate the strings 'This string ' and 'is concatenated'

  // fill start
  $concatenated = 'This string ' . 'is concatenated';
  // fill end
  
  $this->assertEquals('This string is concatenated', $concatenated);
});

test('String can be passed in as parameters to echo', function () {
  // Strings can be passed in as parameters to echo
  // Set $echo to MultipleParametersValid

  // fill start
  echo 'Multiple', 'Parameters', 'Valid';
  // fill end

  $this->expectOutputString('MultipleParametersValid');
});


/********************************
 * Constants
 */

// A constant is defined by using define()
// and can never be changed during runtime!

test('Set constant FOO to something', function () {
  // a valid constant name starts with a letter or underscore,
  // followed by any number of letters, numbers, or underscores.
  // Set constant FOO to something

  // fill start
  define("FOO", "something");
  // fill end
  
  $this->assertEquals('something', FOO);
});

// access to a constant is possible by calling the chosen name without a $
// echo FOO; // Returns 'something'
// echo 'This outputs ' . FOO;  // Returns 'This outputs something'

test('Set constant BAR to something else', function () {
  // a valid constant name starts with a letter or underscore,
  // followed by any number of letters, numbers, or underscores.
  // Set constant BAR to something else

  // fill start
  define("BAR", "something else");
  echo BAR;
  // fill end
  
  $this->expectOutputString('something else');
});

/********************************
 * Arrays
 */

// All arrays in PHP are associative arrays (hashmaps in some languages)


test('Create an array which works with all PHP versions', function () {
  // Works with all PHP versions
  // Create an array which works with all PHP versions

  // fill start
  $associative = array('One' => 1, 'Two' => 2, 'Three' => 3);
  // fill end
  
  $this->assertEquals(1, $associative['One']);
});

test('Create an array which works with PHP 5.4 or greater', function () {
  // PHP 5.4 introduced a new syntax
  // Create an array which works with PHP 5.4 or greater

  // fill start
  $associative = ['One' => 1, 'Two' => 2, 'Three' => 3];
  // fill end
  
  $this->assertEquals(1, $associative['One']);
});

test('Get the value of the key Two', function () {
  // Get the value of the key Two

  $associative = ['One' => 1, 'Two' => 2, 'Three' => 3];

  // fill start
  $two = $associative['Two'];
  // fill end

  $this->assertEquals(2, $two);

});

test('Add an element to an associative array', function () {
  // Add an element to an associative array

  $associative = ['One' => 1, 'Two' => 2, 'Three' => 3];

  // fill start
  $associative['Four'] = 4;
  // fill end

  $this->assertEquals(4, $associative['Four']);

});

test('Get the second element of the array', function () {
  // Get the second element of the array

  $array = ['One', 'Two', 'Three'];

  // fill start
  $second = $array[1];
  // fill end

  $this->assertEquals('Two', $second);

});


test('Add an element to the end of an array', function () {
  // Add an element to the end of an array

  $array = ['One', 'Two', 'Three'];

  // fill start
  $array[] = 'Four';
  // fill end

  $this->assertEquals('Four', $array[3]);

});

test('Remove an element from an array', function () {
  // Remove 'Two' from an array

  $array = ['One', 'Two', 'Three'];

  // fill start
  unset($array[1]);
  
  // print the array
  print_r($array);

  // fill end

  // the new array should be ['One', 'Three']
  $this->

});

/********************************
 * Output
 */

echo ('Hello World!');
// Prints Hello World! to stdout.
// Stdout is the web page if running in a browser.

print('Hello World!'); // The same as echo

// echo and print are language constructs too, so you can drop the parentheses
echo 'Hello World!';
print 'Hello World!';

$paragraph = 'paragraph';

echo 100;        // Echo scalar variables directly
echo $paragraph; // or variables

// If short open tags are configured, or your PHP version is
// 5.4.0 or greater, you can use the short echo syntax
?>
<p><?= $paragraph ?></p>
<?php

$x = 1;
$y = 2;
$x = $y; // $x now contains the same value as $y
$z = &$y;
// $z now contains a reference to $y. Changing the value of
// $z will change the value of $y also, and vice-versa.
// $x will remain unchanged as the original value of $y

echo $x; // => 2
echo $z; // => 2
$y = 0;
echo $x; // => 2
echo $z; // => 0

// Dumps type and value of variable to stdout
var_dump($z); // prints int(0)

// Prints variable to stdout in human-readable format
// print_r($array); // prints: Array ( [0] => One [1] => Two [2] => Three )

/********************************
 * Logic
 */
$a = 0;
$b = '0';
$c = '1';
$d = '1';

// assert throws a warning if its argument is not true

// These comparisons will always be true, even if the types aren't the same.
assert($a == $b); // equality
assert($c != $a); // inequality
assert($c <> $a); // alternative inequality
assert($a < $c);
assert($c > $b);
assert($a <= $b);
assert($c >= $d);

// The following will only be true if the values match and are the same type.
assert($c === $d);
assert($a !== $d);
// assert(1 === '1');
assert(1 !== '1');

// 'Spaceship' operator (since PHP 7)
// Returns 0 if values on either side are equal
// Returns 1 if value on the left is greater
// Returns -1 if the value on the right is greater

$a = 100;
$b = 1000;

echo $a <=> $a; // 0 since they are equal
echo $a <=> $b; // -1 since $a < $b
echo $b <=> $a; // 1 since $b > $a

// Variables can be converted between types, depending on their usage.

$integer = 1;
echo $integer + $integer; // => 2

$string = '1';
echo $string + $string; // => 2 (strings are coerced to integers)

$string = 'one';
// echo $string + $string; // => Unsupported operand types: string + string
// Outputs Unsupported operand types: string + string because the + operator cannot cast the string 'one' to a number

// Type casting can be used to treat a variable as another type

$boolean = (bool) 1; // => true

$zero = 0;
$boolean = (bool) $zero; // => false

// There are also dedicated functions for casting most types
$integer = 5;
$string = strval($integer);

$var = null; // Null value


/********************************
 * Control Structures
 */

if (true) {
  print 'I get printed';
}

if (false) {
  print 'I don\'t';
} else {
  print 'I get printed';
}

if (false) {
  print 'Does not get printed';
} elseif (true) {
  print 'Does';
}

// ternary operator
print(false ? 'Does not get printed' : 'Does');

// ternary shortcut operator since PHP 5.3
// equivalent of "$x ? $x : 'Does'"
$x = false;
print($x ?: 'Does');

// null coalesce operator since php 7
$a = null;
$b = 'Does print';
echo $a ?? 'a is not set'; // prints 'a is not set'
echo $b ?? 'b is not set'; // prints 'Does print'


$x = 0;
if ($x === '0') {
  print 'Does not print';
} elseif ($x == '1') {
  print 'Does not print';
} else {
  print 'Does print';
}



// This alternative syntax is useful for templates:
?>

<?php if ($x) : ?>
  This is displayed if the test is truthy.
<?php else : ?>
  This is displayed otherwise.
<?php endif; ?>

<?php

// Use switch to save some logic.
switch ($x) {
  case '0':
    print 'Switch does type coercion';
    break; // You must include a break, or you will fall through
    // to cases 'two' and 'three'
  case 'two':
  case 'three':
    // Do something if $variable is either 'two' or 'three'
    break;
  default:
    // Do something by default
}

// While, do...while and for loops are probably familiar
$i = 0;
while ($i < 5) {
  echo $i++;
} // Prints "01234"

echo "\n";

$i = 0;
do {
  echo $i++;
} while ($i < 5); // Prints "01234"

echo "\n";

for ($x = 0; $x < 10; $x++) {
  echo $x;
} // Prints "0123456789"

echo "\n";

$wheels = ['bicycle' => 2, 'car' => 4];

// Foreach loops can iterate over arrays
foreach ($wheels as $wheel_count) {
  echo $wheel_count;
} // Prints "24"

echo "\n";

// You can iterate over the keys as well as the values
foreach ($wheels as $vehicle => $wheel_count) {
  echo "A $vehicle has $wheel_count wheels";
}

echo "\n";

$i = 0;
while ($i < 5) {
  if ($i === 3) {
    break; // Exit out of the while loop
  }
  echo $i++;
} // Prints "012"

for ($i = 0; $i < 5; $i++) {
  if ($i === 3) {
    continue; // Skip this iteration of the loop
  }
  echo $i;
} // Prints "0124"


/********************************
 * Functions
 */

// Define a function with "function":
function my_function()
{
  return 'Hello';
}

echo my_function(); // => "Hello"

// A valid function name starts with a letter or underscore, followed by any
// number of letters, numbers, or underscores.

function add($x, $y = 1)
{ // $y is optional and defaults to 1
  $result = $x + $y;
  return $result;
}

echo add(4); // => 5
echo add(4, 2); // => 6

// $result is not accessible outside the function
// print $result; // Gives a warning.

// Since PHP 5.3 you can declare anonymous functions;
$inc = function ($x) {
  return $x + 1;
};

echo $inc(2); // => 3

function foo($x, $y, $z)
{
  echo "$x - $y - $z";
}

// Functions can return functions
function bar($x, $y)
{
  // Use 'use' to bring in outside variables
  return function ($z) use ($x, $y) {
    foo($x, $y, $z);
  };
}

$bar = bar('A', 'B');
$bar('C'); // Prints "A - B - C"

// You can call named functions using strings
$function_name = 'add';
echo $function_name(1, 2); // => 3
// Useful for programmatically determining which function to run.
// Or, use call_user_func(callable $callback [, $parameter [, ... ]]);


// You can get all the parameters passed to a function
function parameters()
{
  $numargs = func_num_args();
  if ($numargs > 0) {
    echo func_get_arg(0) . ' | ';
  }
  $args_array = func_get_args();
  foreach ($args_array as $key => $arg) {
    echo $key . ' - ' . $arg . ' | ';
  }
}

parameters('Hello', 'World'); // Hello | 0 - Hello | 1 - World |

// Since PHP 5.6 you can get a variable number of arguments
function variable($word, ...$list)
{
  echo $word . " || ";
  foreach ($list as $item) {
    echo $item . ' | ';
  }
}

variable("Separate", "Hello", "World"); // Separate || Hello | World |
