<?php

/**
 * Welcome to php introduction.
 * 
 * In this short demo, I will introduce you to php basic syntax.
 * 
 * <?php : is the systax to begin a php script.
 * ?> : is the closing tag for a php script.
 * But usually we will not close our php script.
 *
 * We can run a php script from terminal/command prompt
 * by typing php filename.php
 * or php -a to enter interactive mode.
 *
 */

/** 
 *
 * If you have learnt about any other programming language, 
 * you will definitely remember that variable is one of the 
 * foundation for a programming language.
 * 
 * In php, variable is named with prefix of '$', for example
 * $variable_name
 *
 * php is very sensitive to the ; syntax.
 * Therefore remember to finish each line of your command with ;
 * 
 * To read input from user in command line, use readline();
 * To display a value use echo;
 * To display an array use print_r();
 * To show more info of the variable use var_dump();
 * 
 */

$name = 'Yong Jun';
$age = '23';

/** 
 *
 * After getting variable, of course we will need to manipulate
 * our value in variable. Thats where operand comes in.
 * In php, the operant are ., +, -, *, /, %
 * + is use for addition, - is use for minus
 * * is use for multiplication, / is use for division
 * % is use for modulus(remainder)
 * To concatinate (combine) strings, we will use '.'
 * 
 */

$string1 = 'Hello';
$string2 = 'World';
$full_string = $string1 . ' ' . $string2 . ' !';

/**
 *
 * There is another way to combine strings together.
 * Where we use double quote " "
 *
 */

$string1 = 'Hello';
$string2 = 'World';
$full_string = "$string1 $string2 !";

/**
 *
 * php also offers arrays and objects.
 * Without any hesitation let's dig into example.
 *
 */

$an_array = ['value1', 'value2', 'value3'];
$another_array = ['key1' => 'value1', 'key2' => 'value2'];

/**
 *
 * In php there is two types of array.
 * Indexed array and Associative array.
 * If a key is not stated, it will use it's index as the key.
 *
 */

// It is workable, but is not a good practice.
$mix_array = ['value', 'key1' => 'value1'];

/**
 *
 * In php class is defined by adding class keyword in front of the name
 * class name usually is put in StudlyCaps, while method in it is camelCase.
 * Variable name usually is in snake_case.
 * For more information of php professional practice and refer to PSR(Php Standard Recommendations).
 *
 */

class Shape{

	// Declaration of a class property
	public $type;
	public $unit;
	public $length;

	// __construct function is called when you create an object using new Object
	public function __construct($type = 'Square', $unit = 'cm', $length = 0)
	{	// The braces of a method (function in a class), is place in a new line according to PSR.
		
		$this->type = $type; // $this->property/method is use to access the property 
		$this->unit = $unit; // or method in an object.
		$this->length = $length;
	}

	public function getArea()
	{
		if($this->type == 'Square') {
			return pow($this->length, 2);
		} else {
			return 'Sorry, the formula for ' . $this->type . ' is currently unavailable.';
		}
	}
}

// Creating an object with Shape class
$shape = new Shape;
// Modifying the property
$shape->type = 'Square';
$shape->unit = 'cm';
$shape->length = 5;

/**
 *
 * The for, if, switch, while, and do while are similar to other programming language.
 * There is a special kind of loop called foreach
 * The syntax is fairly simple 
 * foreach($array as $key => $value);
 *
 */

$array = ['name' => 'Yong Jun', 'age' => '23', 'education' => 'degree'];
foreach ($array as $key => $value) {
	echo $key . ': ' . $value . PHP_EOL;
}