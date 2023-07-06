<?php
    echo ("Hello World!");
    // data types
    //1. string 

    Echo '<br>';

    $y = 'hello world';
    $Y = "I love Programming";
    var_dump($Y);

    echo $y . $Y;
    Echo '<br>';

    //integer
    $a = '5674329';
    var_dump($a);
    Echo '<br>';
    //float
    $b = 5674.329;
    var_dump($b);
    Echo '<br>';
       //Boolean
       $c = false;
       var_dump($c);

       Echo '<br>';
       // arrays

       $cars = array ('Toyota','Volvo', 'BMW');
       var_dump($cars);
       Echo '<br>';
       echo $cars [0];

       Echo '<br>';
       // objects
    class Car {
        public $color;
        public $model;

        public function __construct($color , $model){
            $this->color = $color;
            $this->model = $model;   
        }

        function msg(){
            return 'My car is ' .$this->color . ' and ' .$this->model .'.';
        }   

    }

    $car = new Car ('red' ,'toyota');
    Echo '<br>';
    echo $car ->msg();

    //float
    Echo '<br>';
    $num1= 5.6789 ;
    var_dump($num1);

    // php conditional statements
    Echo '<br>';
    $t = date("H");
    if ( $t < 10){
        echo "Have a good morning!";
    } elseif ( $t < 20){ 
        echo "Have a good day";
    } else{
        echo "Have a Good night";
    }

    //switch
    Echo '<br>';
    $favcolor = "green";

 switch ($favcolor) {
   case "red":
     echo "Your favorite color is red!";
     break;
   case "blue":
     echo "Your favorite color is blue!";
     break;
   case "green":
     echo "Your favorite color is green!";
     break;
   default:
     echo "Your favorite color is neither red, blue, nor green!";
 }

 Echo '<br>';

 $x = 50;
  while ($x <= 50){
    echo "the number is:   $x <br>"  ;
    $x+=10;
  }
  $x = 0;

  Echo '<br>';
  $w = 6;
  
  do {
    echo "The number is: $w <br>";
    $w++;
  } while ($w <= 5);
  Echo '<br>';

  for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }


  $colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";


}

Echo '<br>';

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";

}


  
    ?>