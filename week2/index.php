<?php
#######################################
########### Week 2 #############
#######################################

//? Loosely Typed Language Vs Strongly Typed Language
/*
A loosely typed language is a programming language that does not require a variable to be defined. For example,
Perl is a loosely typed language, you can declare a variable,
but it doesn't require you to classify the type of variable. In the example below,
the first line declares the $test variable that can be used as an integer or string.
*/

//? Reference is Not Pointer in php
/*
In PHP, References enable accessing the same variable content by different names.
They are not like pointers in C/C++ as it is not possible to perform arithmetic oprations using them.
In C/C++, they are actual memory addresses. In PHP in contrast, they are symbol table aliases. In PHP,
variable name and variable content are different, so the same content can have different names.
A reference variable is created by prefixing & sign to original variable. Hence b=&a will mean that bisareferewncevariableofa.
*/
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=<?php echo $elZero ?>>
    <title>Welcome To <?php echo $elZero ?></title>
</head>

<body>
    <h1><?php echo $elZero ?></h1>
    <p>Here In <?php echo $elZero ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $elZero ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $elZero ?></footer>
</body>

</html>


<?php
$elZero = "Romio Courses";

// $name = "elzero";
// $$name = "Web";
// echo "<br>";
// echo $$name;
// echo "<br>";
// echo "\$$name elzero";
// echo "<br>";
// echo "${$name}";
// echo "<br>";
// echo print_r($name);
// echo "<br>";
// echo var_dump($$name);
// echo "<br>";
// echo nl2br($$name);

# variable to variable ==>> reference not pointer
// echo "<br>";
// $a = 200;
// $b = &$a;
// $a = 100;

echo "<br>";
echo __LINE__;
echo "<br>";
echo __file__;

echo "<br>";
echo __dir__;
echo "<br>";
echo __file__;
echo "<br>";
echo $_SERVER;
echo "<br>";
echo $Line;
echo "<br>";
echo $CLONE = "x";
/*
  
*/



?>