<?php


class Color{
    public $color;
    public function __construct($color)
    {
        $this->color = $color;
    }

    public function setColor($color){
        $this->color = $color;
    }
}


class FavColor{
    public $favColor;
    public $color;

    public function __construct($favColor, $color)
    {
        $this->favColor = $favColor;
        $this->color = new Color($color);
    }

    public function updateFavColor($color){
        $this->color->setColor($color);
    }

    public function __clone()
    {
        $this->color = clone $this->color;
    }
}


$fc1 = new FavColor("Navy Blue","Black");
$fc2 = clone $fc1;
$fc2->updateFavColor("Maroon");
print_r($fc1);
print_r($fc2);