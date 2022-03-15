

<?php

class Car
{
    public $color;
    public $model;


    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    public function mess()
    {
        echo "My car is a {$this->color} {$this->model}";
    }



}
$myCar = new Car("black", "MEC");
$myCar->mess();





?>
