<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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




       

   

    


     

    
    
    
    
    
    
    ?>
</body>
</html>