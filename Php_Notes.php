
<!-- <?php -->
// // Here echo command is used to print
// echo "Hello, world!";
// echo "<br>";
// $marks = 40;
// if($marks>70){
//     echo "Distinction";
// }
// elseif($marks>=50 and $marks<70){
//     echo "Average";
// }
// else{
//     echo "fail";
// }
// echo "<br>";

// // The (.) operator in the above code can be used
// // to concatenate two strings in PHP and the “\n” is used for a
// // new line and is also known as line-break

//   // Defining the variables
//   $text = "Hello, World!";
//   $num1 = 10;
//   $num2 = 20;

//   // Echoing the variables
//   echo $text."\n";
//   echo "<br>";
//   echo $num1."+".$num2."=";
//   echo $num1 + $num2;

//   echo "<br>";

// //returns data type and value
// var_dump($num1);
// $val1 = 50.85;
// $val2 = 654.26;

// $sum = $val1 + $val2;
// echo "<br>";
// echo $sum;
// echo "\n\n";
// echo "<br>";
// //returns data type and value
// var_dump($sum);
// echo "<br>";

// $name = "Krishna";
// echo "The name of the Geek is $name \n";
// echo "<br>";
// echo 'The name of the geek is $name ';
// echo "<br>";

// //returns data type, size and value
// var_dump($name);

// $intArray = array(10,20,30);

// echo "First Element: $intArray[0]\n";
// echo "Second Element: $intArray[1]\n";
// echo "Third Element: $intArray[2]\n\n";

// //returns data type and value
// var_dump($intArray);
//object
// class house {
//     // Properties
//     public $name;
//     public $size;

//     // Methods
//     function set_name($name) {
//       $this->name = $name;
//     }
//     function get_name() {
//       return $this->name;
//     }
//   }

//   $condo = new house();
//   $duplex = new house();
//   $condo->set_name('Siddhi Bhanushali');
//   $duplex->set_name('detached duplex');

//   echo $condo->get_name();
//   echo "\n";
//   echo $duplex->get_name();
//String Functions
//   single quotes string - doesnt print the actual value of the
variable whereas double quotes string does print the value of the
variable
// strlen() function: This function is used to find the length of a
string. This function accepts the string as an argument and returns the
length or number of characters in the string.
// strrev() function: This function is used to reverse a string. This
function accepts a string as an argument and returns its reversed
string.
// str_replace() function: This function takes three strings as
arguments. The third argument is the original string and the first
argument is replaced by the second one. In other words, we can say that
it replaces all occurrences of the first argument in the original string
with the second argument.
//  strpos() function: This function takes two string arguments and if
the second string is present in the first one, it will return the
starting position of the string otherwise returns FALSE.
// trim() function: This function allows us to remove whitespaces or
strings from both sides of a string.

// Example:

// <?php

// echo trim("Hello World!", "Hed!");

//

// Output:

// llo Worl

// explode() function: This function converts a string into an array.

// Example:

// <?php


// $input  = "Welcome to geeksforgeeks";

// print_r(explode(" ",$input));



// Output:

// Array ( [0] => Welcome [1] => to [2] => geeksforgeeks )
// strtolower() function: This function converts a string into the
lowercase string.
// strtoupper() function: This function converts a string into the
uppercase .
//  strwordcount() function: This function counts total words in a
string.
// substr() function: This function gives the substring of a given
string from a given index.

// control statements - if, if else, if elseif else and switch
// loops - for ,while , do while, for each
// foreach loop: This loop is used to iterate over arrays. For every
counter of loop, an array element is assigned and the next counter is
shifted to the next element.
// Syntax:

// foreach (array_element as value) {
//    //code to be executed
// }

// Example:

// <?php

//     $arr = array (10, 20, 30, 40, 50, 60);
//     foreach ($arr as $val) {
//         echo "$val \n";
//     }

//     $arr = array ("Ram", "Laxman", "Sita");
//     foreach ($arr as $val) {
//         echo "$val \n";
//     }

/* ?>*/
// superglobal variable
// $_POST - is a array of all the values passed in a post request 
name-> value
// $_GET - array of values passed in a get request
// $_FILES - consists of all the properties of a file (upload project)
// <!DOCTYPE html>
// <html>
// <body>

// <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
//send values to self(same page only)
//  <label for="name">Please enter your name: </label>
//  <input name="name" type="text"><br>
//  <label for="age">Please enter your age: </label>
//  <input name="age" type="text"><br>
//  <input type="submit" value="Submit">
//  <button type="submit">SUBMIT</button>
// </form>

// $nm=$_POST['name'];
// $age=$_POST['age'];
// echo "<strong>".$nm." is $age years old.</strong>";
// Arrays
In PHP, there are three types of arrays:

     Indexed arrays - Arrays with a numeric index
     Associative arrays - Arrays with named keys
     Multidimensional arrays - Arrays containing one or more arrays
The count() function is used to return the length (the number of
elements) of an array:
Example:
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
PHP Indexed Arrays

There are two ways to create indexed arrays:

The index can be assigned automatically (index always starts at 0), like
this:
$cars = array("Volvo", "BMW", "Toyota");

or the index can be assigned manually:
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

PHP Associative Arrays

Associative arrays are arrays that use named keys that you assign to
them.

There are two ways to create an associative array:
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

or:
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";

Loop Through an Associative Array

To loop through and print all the values of an associative array, you
could use a foreach loop, like this:
Example
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
}
Creating a 2D array
$cars = array (
   array("Volvo",22,18),
   array("BMW",15,13),
   array("Saab",5,2),
   array("Land Rover",17,15)
);

Now the two-dimensional $cars array contains four arrays, and it has two
indices: row and column.

To get access to the elements of the $cars array we must point to the
two indices (row and column):
Example
echo $cars[0][0].": In stock: ".$cars[0][1].", sold:
".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold:
".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold:
".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold:
".$cars[3][2].".<br>";

PHP - Sort Functions For Arrays

   PHP Array sort functions
     sort() - sort arrays in ascending order
     rsort() - sort arrays in descending order
     asort() - sort associative arrays in ascending order, according to
the value
     ksort() - sort associative arrays in ascending order, according to
the key
     arsort() - sort associative arrays in descending order, according to
the value
     krsort() - sort associative arrays in descending order, according to
the key


$_GET is an array of variables passed to the current script via the URL
parameters.

$_POST is an array of variables passed to the current script via the
HTTP POST method.

PHP - The __construct Function

A constructor allows you to initialize an object's properties upon
creation of the object.

If you create a __construct() function, PHP will automatically call this
function when you create an object from a class.

Notice that the construct function starts with two underscores (__)!

We see in the example below, that using a constructor saves us from
calling the set_name() method which reduces the amount of code:
Example
Get your own PHP Server
class Fruit {
   public $name;
   public $color;

   function __construct($name) {
     $this->name = $name;
   }
   function get_name() {
     return $this->name;
   }
}

$apple = new Fruit("Apple");
echo $apple->get_name();
The final keyword can be used to prevent class inheritance or to prevent
method overriding.

Constants cannot be changed once it is declared.

Class constants can be useful if you need to define some constant data
within a class.

A class constant is declared inside a class with the const keyword.

Class constants are case-sensitive. However, it is recommended to name
the constants in all uppercase letters.

We can access a constant from outside the class by using the class name
followed by the scope resolution operator (::) followed by the constant
name, like here:
Example
Get your own PHP Server
class Goodbye {
   const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
}

echo Goodbye::LEAVING_MESSAGE;
// include() and require() - to include other files


// file handling
  fopen() – PHP fopen() function is used to open a file. First parameter
of fopen() contains name of the file which is to be opened and second
parameter tells about mode in which file needs to be opened, e.g.,
  $file = fopen(“demo.txt”,'w');

  fread() –– After file is opened using fopen() the contents of data are
read using fread(). It takes two arguments. One is file pointer and
another is file size in bytes, e.g.,
   $filename = "demo.txt";
   $file = fopen( $filename, 'r' );
   $size = filesize( $filename );
   $filedata = fread( $file, $size );

  fwrite() – New file can be created or text can be appended to an
existing file using fwrite() function. Arguments for fwrite() function
are file pointer and text that is to written to file. It can contain
optional third argument where length of text to written is specified,
e.g.,
   $file = fopen("demo.txt", 'w');
   $text = "Hello world\n";
   fwrite($file, $text);

  fclose() – file is closed using fclose() function. Its argument is file
which needs to be closed, e.g.,
   $file = fopen("demo.txt", 'r');
   //some code to be executed
   fclose($file);

// </body>
// </html>



PHP COOKIES - A SMALL file stored on client computer
set cookies - setcookie(name, value, expire, path, domain, security);

creating a cookie in php
<!DOCTYPE html>
<?php
        setcookie("Auction_Item", "Luxury Car", time() + 2 * 24 * 60 * 60); //2
days expiry
?>
<html>
<body>
        <?php
                echo "cookie is created.";
        ?>
        <p>
                <strong>Note:</strong>
                You might have to reload the
                page to see the value of the cookie.
        </p>

</body>
</html>

Only the name argument in the setcookie() function is mandatory. To skip
an argument, the argument can be replaced by an empty string(“”)
to check whether a cookie is set or not - isset()
$_COOKIE  - superglobal used to access the value of a cookie

Deleting Cookies: The setcookie() function can be used to delete a
cookie. For deleting a cookie, the setcookie() function is called by
passing the cookie name and other arguments or empty strings but however
this time, the expiration date is required to be set in the past. To
delete a cookie named “Auction_Item”, the following code can be
executed.

Example: This example describes the deletion of the cookie value.

<!DOCTYPE html>
<?php
     setcookie("Auction_Item", "Luxury Car", time() + 2 * 24 * 60 * 60);
?>
<html>
<body>
     <?php
        setcookie("Auction_Item", "", time() - 60);
     ?>
     <?php
         echo "cookie is deleted";
     ?>
     <p>
         <strong>Note:</strong>
         You might have to reload the page
         to see the value of the cookie.
     </p>

</body>
</html>


//Session
In general, session refers to a frame of communication between two
medium. A PHP session is used to store data on a server rather than the
computer of the user. Session identifiers or SID is a unique number
which is used to identify every user in a session based environment. The
SID is used to link the user with his information on the server like
posts, emails etc

Below are different steps involved in PHP sessions:

   1.  Starting a PHP Session: The first step is to start up a session.
After a session is started, session variables can be created to store
information. The PHP session_start() function is used to begin a new
session.It also creates a new session ID for the user.

     Below is the PHP code to start a new session:

     <?php

     session_start();

     ?>
   2. Storing Session Data: Session data in key-value pairs using the
$_SESSION[] superglobal array.The stored data can be accessed during
lifetime of a session.

     Below is the PHP code to store a session with two session variables
Rollnumber and Name:

   <?php

     session_start();

     $_SESSION["Rollnumber"] = "11";
     $_SESSION["Name"] = "Ajay";

     ?>


   3. Accessing Session Data: Data stored in sessions can be easily
accessed by firstly calling session_start() and then by passing the
corresponding key to the $_SESSION associative array.

     The PHP code to access a session data with two session variables
Rollnumber and Name is shown below:

   <?php

   session_start();

   echo 'The Name of the student is :' . $_SESSION["Name"] . '<br>';
   echo 'The Roll number of the student is :' . $_SESSION["Rollnumber"] .
'<br>';

   ?>

   4. Destroying Certain Session Data: To delete only a certain session
data,the unset feature can be used with the corresponding session
variable in the $_SESSION associative array.

     The PHP code to unset only the “Rollnumber” session variable from
the associative session array:

   <?php

   session_start();

   if(isset($_SESSION["Name"])){
       unset($_SESSION["Rollnumber"]);
   }

   ?>

   5. Destroying Complete Session: The session_destroy() function is used
to completely destroy a session. The session_destroy() function does not
require any argument.

   <?php

   session_start();
   session_destroy();

   ?>


// Array Functions
array_change_key_case(in_array, convert_case) - change the case of key
(by default lower case)
array_chunk( $array, $size, $preserve_keys ) - split array into parts
array_column($input_array, $column_number, $index_key); used to return
the values from a single column in the input array.
The array_combine() is an inbuilt function in PHP which is used to
combine two arrays and create a new array by using one array for keys
and another array for values.
array_combine( $keys_array, $values_array )
array_count_values( $array ) - gives frequency of all the elements in
the array
array_diff($array1, $array2, $array3, ...,$arrayn) - elements present in
1st array which are not present in other arrays
array_diff_assoc($array1, $array2, $array3, ..., $arrayn) - diffrence
for associative arrays (checks keys and values)
array array_diff_key($array1, $array2, $array3, ..., $array_n) -
compares keys (associative arrays difference)
array_diff_uassoc($array1, $array2, $array3, ..., $arrayn,
user_function) - compares according to the user_function
array_fill($start_index, $number_elements, $values) - fills array
according to the value defined by user
array_fill_keys ( $keys, $value ) - fill the array with given keys


//String Functions
  addcslashes() function accepts specified characters before which we
want to add slashes
  The addslashes() function is an inbuilt function in PHP and it returns
a string with backslashes in front of predefined characters. It does not
take any specified characters in the parameter.

The predefined characters are:

     single quote (‘)
     double quote (“)
     backslash (\)
     NULL
bin2hex($string) - converts a string into hexadecimal values
string chop($string, $character) - remove the specified character from
the string
chr() - convert a ASCII value to a character.

The chunk_split() function is a built-in function in PHP. The
chunk_split() function is used to split a string into smaller chunks of
a specific length.

Syntax:

chunk_split($string, $length, $end)

  convert_uuencode($string) - encodes a string
  convert_uudecode($string) - decodes a string
  count_chars(string,return_mode);


-->
