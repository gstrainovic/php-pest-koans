<?php

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