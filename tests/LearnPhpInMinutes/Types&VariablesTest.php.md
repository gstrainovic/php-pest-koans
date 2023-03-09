<?php

/************************************
 * Types & Variables
 */

// Variables begin with the $ symbol.
// A valid variable name starts with a letter or an underscore,
// followed by any number of letters, numbers, or underscores.

// You don't have to (and cannot) declare variables.
// Once you assign a value, PHP will create the variable with the right type.

test('Set $boolean to true', function () {
  // Boolean
  // Boolean values are case-insensitive
  
  // fill start use true, TRUE or True
  $boolean1 = ChangeMe;
  $boolean2 = ChangeMe;
  $boolean3 = ChangeMe;
  // fill end

  $this->assertTrue($boolean1);
  $this->assertTrue($boolean2);
  $this->assertTrue($boolean3);
});

test('Set $boolean to false', function () {
  // Boolean
  // Boolean values are case-insensitive

  // fill start use false, FALSE or False
  $boolean1 = ChangeMe;
  $boolean2 = ChangeMe;
  $boolean3 = ChangeMe;
  // fill end

  $this->assertFalse($boolean1);
  $this->assertFalse($boolean2);
  $this->assertFalse($boolean3);
});

// Integers
test('Set $int1 to 12', function () {
  // fill start
  $int1 = ChangeMe;
  // fill end
  $this->assertEquals(12, $int1);
});


test('Set $int2 to -12', function () {
  // fill start
  $int2 = ChangeMe;
  // fill end
  $this->assertEquals(-12, $int2);
});

// Floats
test('Set $float to 1.234', function () {
  // fill start
  $float = ChangeMe;
  // fill end
  $this->assertEquals(1.234, $float);
});


test('Add two floats', function () {

  // fill start
  $sum = ChangeMe + ChangeMe;
  // fill end

  $this->assertEquals(6.912, $sum);
});

// Delete variable
test('Delete variable', function () {
  $int1 = 12;

  // fill start

  // fill end

  $this->assertFalse(isset($int1));
});
