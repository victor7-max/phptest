<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
    echo"<h1>hello victor</h1> <br /> <h3>we are learning php</h3>";//without brackets// //any html command can work in the echo tag//
    echo "<hr>";
    echo("hello world");
//creating a variable 
$name = "emeka";
$age = 100;//numbers can be replaced without qoutation mark
$balance = 800000;
    echo" there one a man named $name <br>
    he was $age years  old <br>
    his account balance was $balance <br>
    but he didnt like being 40;"
?>

    <?php
//data types//
$string = "this is a string";
$integer = 40;// whole number;
$float = 4.90;//decimals are float
$gender = false; //boolean data type
null //no value

    ?>
    <?php

//working with string//
echo"<br>";
$string = "this is a sring";
echo $string;
echo strtoupper($string); //to get everything decaled i the vaiabl in uppecase//
echo strtolower($string); // to lower case//
echo strlen($string); //to get the total number of character //
echo $string [0]; //to get the firt character in he string// counting start from 0123etc...
$string[0] = "t" // to change the first character of the string//
?>


    <?php
//replacing charaters
$phrase = "victors php";
echo str_replace("victors", "vicky", $phrase);
echo substr($phrase, 8,);//grabing character from the variable  strarting frm index number 8// ,
echo  "<br>";
//numbers
echo 5 * 7; //multiplication
echo 5 + 7; //addition
echo 7 - 5; //substracton
echo 15 / 5;//division
// mod operation
echo 10 % 3 ; //get the reminder after multipliction
$num =10;
$num++; // adding one to the number
$num--; //substracting by one /// 
echo "<br>";
//math functions//
echo abs(-100); //geting the absoulte value of a number
echo pow(2, 4);//rasing 2 to the power of 4 = 2^4//
echo sqrt(144); //getting the square rooot//
echo max (2,10); //getting the biggest amoung the two figure//
echo min (2 ,10); //geting the smalllest number among them//
echo round (3.7); // to round it up to the nearst whole number//
echo ceil(3.3); //rouning it up to the next greater number =4;
echo floor(3.9); //rounding up to the next smaller number =3;
echo "<br>";
?>
<!-- getting user input in php -->
<form action="index.php" method="get">
Name:<input type="text" name="name">
Age:<input type="number" name="age">
<input type="submit">
</form>
<br>

Your name is <?php echo $_GET["name"] ?>

Your age is <?php echo $_GET["age"] ?>;

<!-- buliding basic calcualtor -->
<br>
<form action="index.php" method="get">
:<input type="number" name="num1">
 <br>
:<input type="number" name="num2">
<input type="submit">
</form>
<!-- gettin result -->
Answer ::<?php echo $_GET["num1"] + $_GET["num2"] ?> <br>

<!-- building mad libs game -->
<form action="index.php" method="get">
    Color: <input type="text" name="color"> <br>
    Plural noun: <input type="text" name="pluralnoun"> <br>
    Celebrity: <input type="text" name="celebrity"> <br>
    <input type="submit">
</form>

<?php
$color = $_GET["color"];
$pluralnoun = $_GET["pluralnoun"];
$celebrity = $_GET["celebrity"];
echo "Roses are $color <br>";
echo " $pluralnoun are blue <br>";
echo "i love $celebrity <br>";
?>
<!-- url parameter -->
<form action="index.php" method="get">
    Name: <input type="text" name="name"> <br>
    <input type="submit">
</form>
<?php
echo $_GET["name"];
//**** get method allows data passed to the url to be modified on url in the browser ,data can be booked marked */
//**post method does not allow data to be passed as a url parameter . it is a secured method of sharing data between client and server*/
?>
<form action="index.php" method="post">
    password: <input type="password" name="password"> <br>
    <input type="submit">
</form>
<?php
echo $_POST["password"];

?>
<!-- Arrays -->
<!-- variables can only store a single data while array stores multiple data or large amount of data -->
<?php

$friends = array("chima","david","denis",); /**all data in the array a given an index position starting from zero */
echo $friends [0];
/**updatind a particular data in an array */
$friends [0] = "okechukwu";
echo $friends[0];
/** adding to an arrray */
echo $friends [3] = "cliton";
echo $friends[3];
/***getting total count of element inside of the array */
echo count($friends);

?>
<!-- checkboxes -->
<form action="index.php" method="post">
 Apples:  <input type="checkbox" name="fruits[]" value="apples"> <br>
  Oranges :<input type="checkbox" name="fruits[]" value="orange"> <br>
  pear :<input type="checkbox" name="fruits[]" value="pear"> <br>
    <input type="submit">
</form>

<?php
$fruits = $_POST["fruits"];
echo $fruits[4];
?>
<br>
<!-- associative array -->
<form action="index.php" method="post">
 <input type="text" name="student"> <br>
 <input type="submit">
 
</form>
<?php
/**associative array can store multiple data using key example names are used as key to acess score grades of students */

$grades = array("jim"=>"A+","john"=>"B-","kevin"=>"C+");
echo $grades[$_Post ["student"]];

?>
<!-- Functions -->
<?php
/** a function is a group of code in a container to carry out specfic actions*/
  function sayhi(){
    echo "Hello user";
    }
  sayhi();
  /**information give to a function are called parameters */
  function hi($name, $age){
    echo "Hello $name you are $age years old";
    }
  hi("victor", 70);
  hi("amarachi", 112);
  hi("sydeny", 56);
  hi("gift" , 90);
?>
<!-- return statement -->
<?php
/**using a function to return a piece of information */
function cube($num){
  return $num*$num*$num;
}
$cuberesult = cube(4);
echo $cuberesult
/** or echo cube (4); */


?>
<!-- if statement -->
When i wake up
If i'm hungry
I eat breakfast

I look at my phone 
If battery percentage is below 2%
i charge it
<!-- if else -->
I leave my house
If its's cloudy
I bring an umbrella
elsei bring sumglasses
<?php
/**if statements are used to carry out different function in different suitation*/
$isMale = false; /**if true male if false it is female */
if ($isMale) {
    echo "you are male";
}
else {
        echo "you are female";
    }
    $manutd = true;
    $isTall = true;
    if ($manutd && $isTall) {
        echo "you are a tall manutd fan";      /** using the or operator if one is true || */
    } else {
        echo "you are not a manutd fan";
    }
/** using the else if */
$football = true;
$female = true;
if ($football && $female ) {
    echo "you are a female footballer";
} elseif($football && !$female){                /** the exlcamination mark is used to check the opposite of the function */   
        echo "you are a male football";                                      
} elseif( !$football && $female){
 echo " you not a female football";
}
else {
 echo"you do not access";
}
?>
<br>
<!-- Comparsim with if statements -->
<?php
function getmax($num1 , $num2){
  if ($num1 > $num2) {
    return $num1;
  } else{
    return $num2;
  }
}
echo getmax(3 , 90); 
/**more complex comparison */
function getmin($id1 , $id2 , $id3){
    if($id1 <= $id2 && $id1 <= $id3){
     return $id1;
    } else if($id2 <= $id1 && $id1 <= $id3){
        return $id2;
    } else{
        return $id3;
    }
}

echo getmin (18,260,190);

?>
<!-- Advanced calculator -->
<form action="index.php" method="POST">

 First Num:<input type="number" step="0.000001" name="num1">  <br>
 OP: <input type="text" name="op"> <br>
 Second Num:<input type="number" step="0.000001" name="num2">
 <input type="submit">
<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];

if($op == "+"){
    echo $num1 + $num2;
}elseif($op == "-"){
    echo $num1 - $num2;
}elseif($op == "*"){
    echo $num1 * $num2;
}elseif($op == "/"){
    echo $num1 / $num2;
}else{
echo "Invalid Operator";
    }
?>

    </form>
    <!-- switch statements -->
    <form action="index.php" method="POST">
        What is your grade?
        <input type="text" name="grade">
        <input type="submit">
    </form>
    <?php
$grade = $_POST["grade"];
echo $grade;


switch ($grade) {
    case 'A':
        echo "You did amazing";
        break;
        case 'B':
            echo "You did pretty Good!";
            break;
            case 'c':
                echo "You Tired!";
                break;
                case 'D':
                    echo "Work harder!";
                    break;
                    case 'E':
                        echo "Escaped failure!";
                        break;
                        case 'F':
                            echo "You Failed!";
                            break;
    default:
        echo "Invalid grade";
        break; 
        
} 
?>
<!-- While loops -->
<br>;
<?php
$index = 6;
while ($index <= 5) {
    echo "$index <br>";
    $index++;
}

?>

<!-- D0 While Loop -->
<?php
$index = 1;
do {
    echo "$index <br>";
    $index++;
}while($index <= 5)


?>

<!-- For Loop -->
<?php
$index = 1;
while ($index <= 10) {
    echo "$index <br>";
    $index++;
}

for($i = 0; $i <= 5; $i++){ //for loop is way shorter than while loop//
echo "$i <br>";
}

$luckyNumbers = array(4,8,14,16,23,42);
for($i = 0; $i < count($luckyNumbers); $i++){
echo "luckyNumber[$i] <br>";
}
?>
<!-- including Html in php -->
<?php

include "header.html"
?>
<?php

include "footer.html"
?>



<!-- including php files -->
<?php
$title = "this is the blog header";
$author = "victor";
$wordcount = 400;
include "header.php";
?>


  <?php
  include "user.php";
  echo "$feetInMile";
  Hiz("victor");

  ?>
<!-- Classes & Objects -->
<?php

class Book {
   var $title;
   var $author;
   var $pages;
}


$book1 = new Book;
$book1->title = "Harry Potter";
$book1->author = "Jk Rowling";
$book1->pages = 400;

echo $book1->author;



$book2 = new Book;
$book2->title = "Lord of the rings";
$book2->author = "Tolkien";
$book2->pages = 700;

echo $book2->author;
?>



<!-- Constructors -->

<?php

class Car {
   var $name;
   var $color;
   var $year;

   function __construct($aName,$aColor,$aYear){
    // echo "New Car Created";
    $this->name = $aName;                             //constructors makes it easier for us to create objeacts for class *
    $this->color = $aColor;
    $this->year = $aYear;

}
}



$car1 = new Car("Honda","Black","2004");
// $car1->name = "Honda";
// $car1->color = "Black";
// $car1->year = 2004;

echo $car1->name;



$car2 = new Car("Manzda","Red","1997");
// $car2->name = "Manzda";
// $car2->color = "Red";
// $car2->year = 1997;

echo $car2->year;
?>



<!-- Object functions  --> 
<!-- an object function is a function that can be used by diffrent objects in a class -->
<?php
class Student {
    var $name;
    var $major;
    var $gpa;
    function __construct($name,$major,$gpa)
    {
       $this->name = $name;
       $this->major = $major;
       $this->gpa = $gpa; 
    }

    function hasHonours(){
        if( $this->gpa >= 3.5){
        return "true";
        }
        return "false";
    

    }
}
$student1 = new Student("victor","Computer Sci","2.1");
$student2 = new Student("Emeka","Business","4.1");

echo $student2->hasHonours();
?>

<!-- Getters & Setters --> 

<?php
/**getters and setters are speacial function which allows the users to set the attributes */
class Movie{
    public $title;
    private $rating;

    function __construct($title,$rating)
    {
        $this->title = $title;
        $this->setRating($rating);
        
    }
    function getRating()
    {
      return $this->rating;
    }
    function setRating($rating){
      if ($rating == "G" || $rating == "PG" ||$rating == "PG-13" ||$rating == "R" ||$rating == "NR"  ) {
        $this->rating = $rating;
      }else{
        $this->rating = "NR";
      }
    }
}
$avengers = new Movie ("Avengers","PG-13");
// $avengers->setRating("dog");
echo $avengers->getRating();



?>

<!-- inheritance -->
<?php
/**inhertiance makes it possible for another class to inherit all the functionality of another class */
class Chef{
    function makeChicken(){
        echo "The chef makes chicken <br>";
    }
  function makeSalad(){
    echo "The chef makes salad <br>";
  }
  function makeSpecialDish(){
    echo "The chef makes bbq ribs <br>";
  }
}

class ItalianChef extends Chef {    //the chef fuctions are used for the italian chef class
 function makePasta(){
echo "The chef makes pasta <br>";  // normal chef can not make pasta unless we extend the italianchef class to it.
 }
}

$chef = new Chef ();
$chef->makeChicken();

$italianchef = new ItalianChef ();
$italianchef->makeChicken();
$italianchef->makePasta();
?>

</body>

</html>