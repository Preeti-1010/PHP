
Notes on PHP :-

1.INTRODUCTION:

PHP(Hypertext Preprocessor)is a programming language used together with HTML and CSS. This open source scripting language can be used for many tasks:
Establish a connection with a database
Send and receive cookies
Collect form data
Generate dynamic page content 
And much more!

2.MORE FACTS:

PHP is a server-side programming language that will run on the server. A server is a machine that will store all of your files and information. After you save your files on the server, you can access and manage them for your needs. 

There is also a reason why you should use index.php and not index.html. The ending .php indicates that your files store PHP code. This way the interpreter will understand that it has to check the PHP part of the code before delivering it.

HTML (HyperText Markup Language) is one of the basic languages that will allow you to build amazing websites. It is relatively easy to learn and is one of the most known programming languages.

3.SYNTAX:

 <?php and ?> - delimiters that will tell where your PHP code will start and end.

echo - a function that will output “I'm the head engineer of a Spaceship!”

semicolon(;)- a mark that will end the statement.

Both PHP and HTML can interact with one another. You can write your PHP code directly inside the HTML, and it will work.

4.SEMICOLONS:

Semicolons(;) are very important in PHP.
A semicolon is used at the end of each statement. This is how you tell the PHP that you are done writing the instructions.
A statement is a command that you give to the computer.
A few examples of the statements:

9 * 9; - complete statement
echo ”BitDegreee!”; - complete statement
15 *  - not complete statement
echo "  - not complete statement

5. ECHO:

echo is a PHP function used to output parameters.
<?php
  echo "It’s me!";
?>
In the example:
echo “It’s me!”; will print words “It’s me!”

The semicolon(;) will end the function.

6. 	STRING:

A string is series of characters placed inside quotes. For example, "Welcome to the Spaceship!" is a string.
A simple single quote string will look like this:
<?php
  echo "Welcome to the Spaceship!";
?>
Dot(.) is the concatenation operator used to combine several strings. 

7. ARITHMETIC:

<?php
   echo 9 * 6;
?>

8. VARIABLE:

A variable is like a storage container where you can keep your data. It can store numbers and strings. To set a variable name, you must start with the dollar sign ($) following the name of the variable.

Let's check the example:

$Name = "Pexirind";
$Age = 18459;
$Name and $Age are variables. These variables have unique names that store different values.

Keep in mind that variable names are case-sensitive!
" " double colon are used to print the value of variable but '' single not, it prints the variable.

9.COMMENTS:

Comments are used to explain or annotate the code of the program and are only visible within the code. You can put comments in PHP code the same way you put them in:

 CSS -  /* this syntax */ 
HTML - <!-- this syntax -->
To add comments in the program use two forward slashes (//), like so:
<?php
    echo "Project of BitDegree Spaceship ";
    // This is the name of the project.
?>

10. IF-ELSE CONDITION:

If statement is made up of:

if keyword
a condition
a pair of curly braces ({}) 
Whenever the answer to the condition is yes, the program will execute the code inside the curly braces.

11. SWITCH CONDITION:

The switch statement is used to replace if/else statements that have multiple expressions with the same value. This command is more efficient and easier to read.

switch statements work like if statements: if a value of a condition is true, it executes a block of code.

12. MORE ABIUT SWITCH:

Switch statements consist of three components which include the switch keyword, a variable, and a pair of curly braces {}. Here, we take a look at a switch statement for the value $color.

Case "red":
echo "red"; 
break; 
Here, the program will check if $color is equal to “red”. 
It will echo "red" and will exit the switch statement using a break keyword if the condition is true.
Otherwise, the next case's block will run.
The program will execute the default case if all previous cases return false.

13. SWITCH WITH MULTIPLE EXP:

Sometimes you want to make multiple expressions, all of which have the same result. Consider the following if statement:
if ($a == 1 || $a == 2 || $a == 3) {
echo "$a is between 1 and 3.";
}
With a switch statement, you can do this by adding cases right after another without a break. This is called falling through. The following code works exactly like the above if statement:
switch ($a){
case 1:
case 2:
case 3:
    echo "$a is between 1 and 3.";
    break;
}

14. WAYS TO CREATE SWITCH:

There are two ways to create a switch statement. You already know the first one:
switch ($a) { }
Or, you can also make it this way:
switch ($i):
Endswitch;

This is called the alternative syntax. It exists to provide syntactic sugar- making programming language easier to read and express.

There's no difference when using either the curly brace syntax (first example) or alternative syntax (second example). The alternative syntax provides better readability, thus it is usually used when mixing HTML and PHP code in the same file.

15. ARRAYS:

In PHP, arrays are special variables that can hold more than one item.

Imagine that you are creating a shopping list and you use a new sticky note (a variable) for each item you intend to buy. Eventually, you would get lost in all the sticky notes you carry around. This is why you usually write down every item on a single piece of paper.

In PHP, this piece of paper is called an array. 
Check the emulator and look how the $array variable was declared. This is how you define an array.

16. MORE ABOUT ARRAY:

Well, it starts the same way as a variable - with a $ sign followed by the name and =.
However, this is when things start to differ. When declaring an array, you have to use array(). This will tell the program that $array is an array and not something else, such as a regular variable.

<?php
$fruits = array("apple", "orange", "grape");
?>
More or less, you can add any type of information to an array. This is done pretty much the same way as when declaring variables. Use "" when adding strings, or enter the number when adding integers.
You should remember that each item in the array must be separated by a comma (,).

17. ACCESSING ARRAY WITH []:

Each item in an array is numbered, or indexed, starting from 0. As an example, let’s create an array of musical notes:
$myArray = array("do", "re", "mi");
Each element in the array is indexed starting from 0, like so:
+------+------+------+
| "do" | "re" | "mi" |
+------+------+------+
  0            1             2  

The element “do” is given the index number 0, the element “re” the index number 1, and so on.

We can access an array element by mentioning its index number, like this:
$myArray = array("do", "re", "mi");
echo $myArray[0]
// outputs "do"
It works like this:
The array $myArray stores musical notes as elements. 
Then,  with the help of echo, the first element "do" is displayed. 
[0] will tell PHP which element of the array it should output. In this example, it will be the first element.

18. ACCESSING ARRAY WITH {}:

When accessing an array’s element by its index, you can use two different types of brackets. The first one is the square brackets [], which you have used in the previous example, and the second one is the curly brackets {}.

$myArray = array("do", "re", "mi");
echo $myArray{2};
// prints "mi";
They are equivalent to each other, and you can use whichever you like!

 19. MODIFYING ARRAY VALUES:

 To change an item in an array you have to define its position and replace it with a new value. 
Take a look at the example:

$myArray = array("red", "blue", "yellow");
echo $myArray[1];
// outputs "blue"
$myArray[1] = "green";
echo $myArray[1];
// outputs "green"
The program will recognize the new array called $myArray. It has a list of colors: red, blue and green. 
The function echo will output the item at position 1. In this case, it will be blue. Remember that the array starts from the position 0 (red).
After that, the blue color in position 1 will switch places with a new item called green.
In the end, the echo function will output the new value at position 1. It will output green.

20. DELETING ARRAY:

You can use unset to remove an element from the array or even delete the whole array. 

Let's examine the following code:

$array = array("red", "blue", "green"); 
unset($array[2]);

21. LOOP:

A loop is a block of code that will execute for a specified number of times. 

Let's say that you want to output the parts of your spaceship! Well, you could write all of your code manually, like so:
<?php
    echo “part number:” . 10;
    echo “part number:” . 15;
    echo “part number:” . 20;
    // And so on
?>

22. FOR LOOP:

for - a keyword that indicates where the loop syntax will start. 
($i = 0; $i < 10; $i++) - instructions separated by semicolons(;), closed inside of a set of parentheses(()). 
$i = 0. This will tell PHP where to start the loop. Here, the loop will start with $i at 0.
 $i < 10. This will tell PHP where to end the loop. Here, the loop will run until $i is lower than 10.
$i++. This will tell PHP what to do to repeat the loop. Here, every time the loop repeats it will add 1 to $i. $i++ is the same as $i = $i + 1.
{ echo $i;} - a code inside curly braces({}) will run with every iteration of the loop. In the example, loop will output the current value of $i while $i < 10.

23. Loops + Arrays = ForEach:

This specific loop is exclusively useful when you know how many times you will need the loop to repeat. However, in some cases, you will need to use other loops that will help out in problematic situations.

For example, you can use a new loop called foreach that will go over each element of the array. It will take all the elements of the array and run them separately through the code between curly braces({}). The loop will end with the last element of the array.
To continue, follow the instructions in the task!

Take a look at <ul> element it is a part of an html code. <ul> gives a bullet point to every value which is printed to the console.

23. FOREACH SYNTAX:

<?php
  $numbers = array(1, 2, 3);
  foreach($numbers as $item) {
      echo $item;
  }
?>
Here, the loop will print out all of the elements in the array.
$numbers = array(1, 2, 3) will create a new array to use in the foreach loop.
Foreach - a keyword that will start the loop.
( $numbers as $item)  - a condition between the parentheses that will tell the PHP to take each value in $numbers array and assign those values temporarily to the $item. 
$item - is a temporary variable that can have any name.
{ echo $item;} - a code inside curly braces that will output each value in the $item variable. Here, it will print out 1, 2, and 3.

24. WHILE LOOP:

There will be situations when you will not know how many times the loop should repeat. In cases like this, you can use the while loop.

A while loop will run without ending as long as the condition is true. 
Check the code in the emulator! The while loop will simulate coin flips until the number of heads, in turn, is less than 3.

25. INFINITE LOOP:

An infinite loop is a sequence of instructions that will never end. If you do happen to write an infinite loop, refresh your page to stop it! 

24: END WHILE:

while(cond):
  // looped statements go here
endwhile;
Here, the while loop does not use the curly braces({}) and instead uses the colon(:). The loop ends with endwhile;.

Loops that use the endwhile syntax are more readable for the users that are embedding the PHP code with HTML. However, the syntax that uses curly braces is more readable within a PHP code block, like so:
while(cond) {
      // looped statements go here
    }

 25: DO WHILE LOOP:

 The while loop will check its condition before each iteration of the code inside.
Do/while loop will check its condition after each iteration of the code inside.
So it means that the do/while loop will execute the code at least once, while the while loop might not. 

A perfect example of where you could use the do/while loop is doing a coin flip. 

26. INTRO TO FUNCTION:

Functions are a big part of PHP because they allow you to reuse pieces of code in your application. By doing so, you can save a lot of time and space in your program.
PHP language has two types of functions:
Built-in functions.
Functions that you can create yourself.
PHP has more than 1000 built-in library functions, so in most cases, you will only use them. 

i) Strlen();

For example - strlen(), an integrated string function in PHP that you can use to get a length of a string. Let's examine it:
<?php
  $length = strlen("Name");
  echo $length;
?>

ii) Substr();

Our mission will require another built-in PHP string function called substr(). You can use this function to return a part of a string.
When you use the substr() function you have to pass it the name of the string - tell it where to start and when to end. 
Take a look at the example:
$myname = "Name";
$partial = substr($myname, 0, 3);
echo $partial;
Here, the function will output three characters nam from the string $myname in the position 0, 1 and 2.

iii) Strtoupper();

Another two helpful integrated string functions are strtoupper() and strtolower(). The first function will make your whole string UPPERCASE and the second one will make your string lowercase.

Examine the syntax of these functions:
$uppercase = strtoupper($myname);
echo $uppercase;

iv) Lowercase();

$lowercase = strtolower($uppercase);
echo $lowercase;
It is also possible to use these functions directly on a string, like so:
echo strtolower("Name");



