<?php


// Shorthand arithmetic

test('Assign $number to 2', function () {
  $number = 2;

  // fill start
  // fill end
  
  $this->assertEquals(2, $number);
});

test('Shorthand increment $number by 2 with +=', function () {
  $number = 2;

  // fill start
  // fill end
  
  $this->assertEquals(4, $number);
});

test('Shorthand decrement $number by 2 with -=', function () {
  $number = 2;

  // fill start
  // fill end
  
  $this->assertEquals(0, $number);
});

// $number /= $float; // Divide and assign the quotient to $number
test('Shorthand divide $number by 2 with /=', function () {
  $number = 4;

  // fill start
  // fill end
  
  $this->assertEquals(2, $number);
});

test('Shorthand increment $number by 1 with ++', function () {
  $number = 2;

  // fill start
  // fill end
  
  $this->assertEquals(3, $number);
});

test('Shorthand decrement $number by 1 with --', function () {
  $number = 2;

  // fill start
  // fill end
  
  $this->assertEquals(1, $number);
});


test('Set $sgl_quotes with single quotes to World', function () {
  // Strings should be enclosed in single quotes;

  // fill start
  $sgl_quotes = ChangeMe;
  // fill end
  
  $this->assertEquals('World', $sgl_quotes);
});


test('Set $sgl_quotes with double quotes to Hello', function () {
  // Strings should be enclosed in single quotes;
  $sgl_quotes = 'World';
  
  // Avoid using double quotes except to embed other variables

  // fill start
  $dbl_quotes = ChangeMe;
  // fill end
  
  $this->assertEquals('Hello World.', $dbl_quotes);
});

// Special characters are only escaped in double quotes
$escaped   = "This contains a \t tab character.";

test('Set $escaped to contain a tab character', function () {
  // Special characters are only escaped in double quotes
  // Set $escaped to This contains a x tab character.

  // fill start
  $escaped   = ChangeMe;
  // fill end
  
  $this->assertEquals("This contains a \t tab character.", $escaped);
});


test('Set $apples to contain the number of apples', function () {
  // Set $apples to contain the number of apples
  $number = SecretNumber;

  // fill start
  $apples = "I have [number] apples to eat.";
  $apples = "I have {$number} apples to eat.";
  // fill end
  
  // expect($apples)->toContain(SecretNumber);
  expect($apples)->toContain((string)(SecretNumber));
  expect($apples)->toContain('I have');
  expect($apples)->toContain('apples to eat.');
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

test('Remove an element from an array with array_splice', function () {
  // Remove 'Two' from an array

  $array = ['One', 'Two', 'Three'];

  // fill start
  array_splice($array, 1, 1);
  // fill end

  $this->assertEquals(['One', 'Three'], $array);

});

/********************************
 * Output
 */
test('Echo a number', function () {
  // Echo scalar variables directly

  // fill start
  echo 100;
  // fill end

  $this->expectOutputString('100');
});

test('Echo a variable', function () {
  // Echo scalar variables directly

  $variable = 'Hello World';

  // fill start
  echo $variable;
  // fill end

  $this->expectOutputString('Hello World');
});


// Reference 
test('Reference', function () {
  $x = 1;
  $y = 2;
  $x = $y; // $x now contains the same value as $y
  $z = &$y;
  // $z now contains a reference to $y. Changing the value of
  // $z will change the value of $y also, and vice-versa.
  // $x will remain unchanged as the original value of $y

  // // fill start
  $this->assertEquals(2, $x);
  $this->assertEquals(2, $z);
  $y = 0;
  $this->assertEquals(2, $x);
  $this->assertEquals(0, $z);
  // // fill end
});


test('Print an array', function () {
  // Prints variable to stdout in human-readable format with print_r

  $array = ['One', 'Two', 'Three'];

  // fill start
  print_r($array);
  // fill end

  $this->expectOutputString('Array
(
    [0] => One
    [1] => Two
    [2] => Three
)
');
});

/********************************
 * Logic
 */


// assert throws a warning if its argument is not true


test('Logical operators', function () {
  // Logical operators

  $a = 0;
  $b = '0';
  $c = '1';
  $d = '1';

  // fill start
  // These comparisons will always be true, even if the types aren't the same.
  $equal = $a == $b; 
  $notEqual = $a != $b;
  $lower = $a < $c;
  $greater = $c > $b;
  $lowerOrEqual = $a <= $b;
  $greaterOrEqual = $c >= $d;

  // These comparisons will always be true, even if the types aren't the same.
  $identical = $c === $d;
  $notIdentical = $a !== $d;
  $numberAndStringComparison = $a === $b;
  $numberAndStringComparison2 = $a !== $b;


  // fill end

  $this->assertTrue($equal);
  $this->assertFalse($notEqual);
  $this->assertTrue($identical);
  $this->assertTrue($notIdentical);
  $this->assertTrue($lower);
  $this->assertTrue($greater);
  $this->assertTrue($lowerOrEqual);
  $this->assertTrue($greaterOrEqual);
  $this->assertFalse($numberAndStringComparison);
  $this->assertTrue($numberAndStringComparison2);
});



// Variables can be converted between types, depending on their usage.
$integer = 1;
echo $integer + $integer; // => 2

test('Autocasting', function () {
  // Autocasting

  $integer = 1;
  $string = '1';
  $string2 = 'one';

  // this is not possible
  // $integer + $string2; // 'Unsupported operand types: string + string');
  // $string + $string2; //  Unsupported operand types: string + string
  // $string2 + $string2; //  Unsupported operand types: string + string 

  // fill start
  $sum = $integer + $string;
  $sum1 = $integer + $integer;
  $sum2 = $string + $string;
  // fill end

  $this->assertEquals(2, $sum);
  $this->assertEquals(2, $sum1);
  $this->assertEquals(2, $sum2);
});


// Type casting can be used to treat a variable as another type



$var = null; // Null value

test('Type casting', function () {
  // There are also dedicated functions for casting most types

  // Type casting
  $boolean1 = (bool) 1; // => true
  $boolean2 = (bool) 0; // => false
  $integer = 5;
  $string = '5';
  $array = [1, 2, 3];
  $object = (object) [1, 2, 3];

  // fill start
  $integerCast = (int) $string;
  $stringCast = (string) $integer;
  $arrayCast = (array) $object;
  $objectCast = (object) $array;
  $nullCast = null;
  // fill end

  $this->assertEquals(true, $boolean1);
  $this->assertEquals(false, $boolean2);
  $this->assertEquals(5, $integerCast);
  $this->assertEquals('5', $stringCast);
  $this->assertEquals([1, 2, 3], $arrayCast);
  $this->assertEquals((object) [1, 2, 3], $objectCast);
  $this->assertEquals(null, $nullCast);
});


/********************************
 * Control Structures
 */


test('If statement', function () {
  // Control structures

  // fill start
  // set x to print 'Does print'
  $x = 3;
  // fill end

  if ($x === 0) {
    print 'Does not print';
  } elseif ($x === 1) {
    print 'Does not print';
  } else {
    print 'Does print';
  }

  $this->expectOutputString('Does print');
});

// ternary operator
print(false ? 'Does not get printed' : 'Does');

test('Ternary operator', function () {
  // Ternary operator

  // fill start
  // set x to print 'Does print'
  $x = 3;
  // fill end

  print($x === 0 ? 'Does not print' : 'Does print');

  $this->expectOutputString('Does print');
});

test('Ternary shortcut operator', function () {
  // ternary shortcut operator since PHP 5.3
  // equivalent of "$x ? $x : 'Does'"

  // fill start
  // set x to print 'Does print'
  $x = false;
  // fill end

  print($x ?: 'Does print');

  $this->expectOutputString('Does print');
});

// null coalesce operator since php 7
$a = null;
$b = 'Does print';
echo $a ?? 'a is not set'; // prints 'a is not set'
echo $b ?? 'b is not set'; // prints 'Does print'

test('Null coalesce operator', function () {
  // null coalesce operator since php 7
  // equivalent of "$x ? $x : 'Does'"

  // fill start
  // set x to print 'Does print'
  $x = null;
  $y = 'Does print';
  // fill end

  $xresult = $x ?? 'x is not set'; // prints 'x is not set'
  $yresult = $y ?? 'y is not set'; // prints 'Does print'

  $this->assertEquals('x is not set', $xresult);
  $this->assertEquals('Does print', $yresult);
});


test('Switch statement', function () {
  // Use switch to save some logic.

  // fill start
  // set x to print 'Switch does type coercion'
  $x = 0;
  // fill end

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

  $this->expectOutputString('Switch does type coercion');
});

test('While loop', function () {
  // While, do...while and for loops are probably familiar

  // fill start
  // set x to print '01234'
  $x = 0;
  // fill end

  while ($x < 5) {
    echo $x++;
  }

  $this->expectOutputString('01234');
});

$i = 0;
do {
  echo $i++;
} while ($i < 5); // Prints "01234"

test('Do...while loop', function () {
  // While, do...while and for loops are probably familiar

  // fill start
  // set x to print '01234'
  $x = 0;
  // fill end

  do {
    echo $x++;
  } while ($x < 5);

  $this->expectOutputString('01234');
});


test('For loop', function () {
  // While, do...while and for loops are probably familiar

  // fill start
  // set x to print '0123456789'
  $x = 0;
  // fill end

  for ($x = 0; $x < 10; $x++) {
    echo $x;
  }

  $this->expectOutputString('0123456789');
});

test('Foreach loop', function () {
  // Foreach loops can iterate over arrays

  // fill start
  // set x to print '24'
  $x = ['bicycle' => 2, 'car' => 4];
  // fill end

  foreach ($x as $wheel_count) {
    echo $wheel_count;
  }

  $this->expectOutputString('24');
});



test('Foreach loop with keys', function () {
  // Foreach loops can iterate over arrays

  // fill start
  // set x to print 'A bicycle has 2 wheelsA car has 4 wheels'
  $x = ['bicycle' => 2, 'car' => 4];
  // fill end

  foreach ($x as $vehicle => $wheel_count) {
    echo "A $vehicle has $wheel_count wheels.";
  }

  $this->expectOutputString('A bicycle has 2 wheels.A car has 4 wheels.');
});


test('Break statement', function () {
  // Break and continue can be used to control loops

  // fill start
  // set x to print '012'
  $x = 0;
  // fill end

  while ($x < 5) {
    if ($x === 3) {
      break; // Exit out of the while loop
    }
    echo $x++;
  }

  $this->expectOutputString('012');
});

test('Continue statement', function () {
  // Break and continue can be used to control loops

  // fill start
  // set x to print '0124'
  $x = 0;
  // fill end

  for ($x = 0; $x < 5; $x++) {
    if ($x === 3) {
      continue; // Skip this iteration of the loop
    }
    echo $x;
  }

  $this->expectOutputString('0124');
});


/********************************
 * Functions
 */
// A valid function name starts with a letter or underscore, followed by any
// number of letters, numbers, or underscores.


test('Function without parameters', function () {
  // Define a function with "function":

  // fill start
  // set x to print 'Hello'
  function my_function()
  {
    return 'Hello';
  }
  // fill end

  echo my_function(); // => "Hello"

  $this->expectOutputString('Hello');
});

test('Function with parameters', function () {
  // Define a function with "function":

  // fill start
  // set x to print 'Hello, John'
  function my_function_with_parameters($name)
  {
    return "Hello, $name";
  }
  // fill end

  echo my_function_with_parameters('John'); // => "Hello, John"

  $this->expectOutputString('Hello, John');
});



test('Function with optional parameters', function () {
  // Define a function with "function":

  function add($x, $y = 1)
  { // $y is optional and defaults to 1
    $result = $x + $y;
    return $result;
  }

  echo add(4); // => 5
  echo add(4, 2); // => 6

  $this->expectOutputString('56');

});


test('Function with variable number of parameters', function () {
  // Define a function with "function":

  // fill start
  // set x to print 'Separate || Hello | World |'
  function variablef($word, ...$list)
  {
    echo $word . " || ";
    foreach ($list as $item) {
      echo $item . ' | ';
    }
  }
  // fill end

  variablef("Separate", "Hello", "World"); // Separate || Hello | World |

  $this->expectOutputString('Separate || Hello | World | ');
});
