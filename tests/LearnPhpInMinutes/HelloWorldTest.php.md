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

test('Print "Hello " with no line break, use print or echo', function () {
  // Use "echo" or "print" to print output
  // () are optional for print and echo

  // fill start

  // fill end

  $this->expectOutputString("Hello ");
});

test('Prints "World" with a line break', function () {

  // fill start

  // fill end 

  $this->expectOutputString("World\n");
});


