<!DOCTYPE html>
<html>
<body>

<h1>"My First PHP script!"</h1>

<?php 
//1. About echo
echo "Hello World!";
?>


<?php
//2. About Comments

// hello?

# this works for a single line.

/*
for multiple lines
and partial comments
*/
$x = 51 + /* TEMPORARY */ 6;
echo $x;
?>


<?php
//3. About Case Sensitivity.
ECHO "<br>SUSHI<br>";
echo "banana<br>";
EcHo "iceCream<br>";

$color = "red";
echo "My car is ".$color."<br>";
echo "My money is ".$COLOR."<br>";
echo "My time is ".$coLOR."<br>";
?>


<?php
//4. About declaring Variables
$txt = "Lei!";
$x = 10;
$y = 0.33;
echo $txt.($x+$y);

/* 5.
A variable name
1.starts with the $
2.must start with a letter or _
3.cannot start with a number
4.can only contain A-z, 0-9, and _ 
*/


//6. echo = output data
$txt = "<br> SHIBUYA";
echo $txt;
?>


<?php
//7. "Fatal Error" = a type mismatch error.

//8. strict, and non-strict requirements exsit in php variables
?>


<?php
$xen = 10;//9.global scope
$zen = 7; //global 

function test(){
    $yen = 99; //10.local scope
    echo "<br>this is 'xen' inside a function : ".$xen;
    echo "<br>this is 'yen' inside a function : ".$yen;

    global $xen, $zen;
    $zen = $xen * $zen;

    //11.GLOBALS array
    $GLOBALS['xen'] = $GLOBALS['xen'] / $GLOBALS['zen']; 
}
test();
echo "<br>this is 'xen' outside of a functon : ".$xen;
echo "<br>modified zen's value : ".$zen;
echo "<br>modified xen's value via GLOBALS : ".$xen."<br><br>";
?>

<?php
function hello(){
    //12.static variable
    static $b = 0;
    echo "<div>".$b."</div>";
    $b++;
}

hello();
hello();
hello();
hello();
?>


<?php
/*
13. echo & print 
echo = no return value, take multiple parameters, marginally faster than print.
print = returns 1, take one argument
*/
echo ("<br>hello");
$abc = print "<h3>print test</h3>";
print $abc."<br>";
?>

<?php
/*
14. php Data types
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object - an object must be explicitly declared.
NULL
Resource -
resource type is not an actual data type. 
It is the storing of a reference to functions and resources external to PHP.
A common example of using the resource data type is a database call.
*/

class Japan {
    function Japan(){
        $this -> yen = "jp currency<br>";
        $this -> won = "kr currency<br>";
        $this -> dollar = "us currency<br>";
    }
}
$asia = new Japan();
echo $asia->won;
echo $asia->yen;
echo $asia->dollar;
?>

<?php
$a = "A";
echo $a."<br>";

 /*var_dump()
 This function displays structured information 
 such as type and value of the given variable.
 */
var_dump($a);
echo "<br>".$a;
?>


<?php
/*15.
string functions;
*/
echo strlen("<div>ASBDLKASJDLASKDJasdasd</div>");

echo str_word_count("<div>ASBDLKASJDLASKDJasdasd</div>");
echo str_word_count("This place is Tokyo, Japan");

echo strrev("ayubihs");
echo strpos("Final Fantasy", "tas");
echo str_replace("shibuya","Tebuya","Tokyo shibuyaku");
?>

<?php 
echo "<br><br><br><br><br><br><br><br>";
//16.constant variable
define("emo","emotional?",true);
echo emo;

define("EmOt","leihau",true);
echo EmOt;

?>


<?php
//17.constant arrays
define("lala",[
    "pizza",
    "sushi",
    "curry"
]);
echo lala[2]."<div></div>";
?>

<?php
//18. space ship
    $x = 10;
    $y = 2;

    echo $x <=> $y;

    $a = 4;
    $b = 4;
    echo $a <=> $b;

    $t = 1 ;
    $i = 2;
    echo $t<=>$i;
?>

<?php
//19.string concatenation
    $tim = "ABC";
    $tom = "DEF";

    echo $tim.=$tom;
?>


<?php
//20. ?? NULL coalesce
    $fff = NULL;
    $abc = $fff ?? "string jam";
    echo $abc;

//21/ if , elseif, else
// if($abc){

// } elseif($abc){

// } else{

// }
?>

<?php 


?>



</body>
</html>