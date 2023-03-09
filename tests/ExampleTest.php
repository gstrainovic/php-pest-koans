<?php

test('example', function () {
    expect(true)->toBeTrue();
});

it('has home', function () {
  $this->assertTrue(true);

  // \PHPUnit\Framework\TestCase
  echo get_class($this);
});