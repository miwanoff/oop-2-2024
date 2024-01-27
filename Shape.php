d<?php

abstract class Shape
{
    protected $x;
    protected $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    abstract public function draw();

    public function move($x = 0, $y = 0)
    {
        echo "Рухаємо фігуру: старі координати - " . $this->x . ", " . $this->y . " нові координати - " . $x . " " . $y . "\n";
        $this->x = $x;
        $this->y = $y;
    }
}

class RectangleDrawer extends Shape
{
    protected $width;
    protected $height;

    public function __construct($x, $y, $width, $height)
    {
        parent::__construct($x, $y);
        $this->width = $width;
        $this->height = $height;
    }

    public function draw()
    {
       // echo "Малюємо прямокутник: параметри: " . $this->x . " " . $this->y . " " . $this->width . " " . $this->height . "\n";
    echo "<div style='position:absolute;top:{$this->y}px;left:{$this->x}px;width:{$this->width}px; height:{$this->height}px;background:red;'></div>";
    }
}

class CircleDrawer extends Shape
{
    protected $radius;

    public function __construct($x, $y, $radius)
    {
        parent::__construct($x, $y);
        $this->radius = $radius;
    }

    public function draw()
    {
        echo "Малюємо коло: параметри: " . $this->x . " " . $this->y . " " . $this->radius . "\n";
    }
}

$rect1 = new RectangleDrawer(100, 200, 30, 40);
$rect2 = new RectangleDrawer(5, 6, 7, 8);
//$rect1->draw();

$circle3 = new CircleDrawer(150, 160, 30);
$circle4 = new CircleDrawer(25, 26, 6);
$arr = array($rect1, $rect2, $circle3, $circle4);
//$circle3->draw();

foreach ($arr as $value) {
    if ($value instanceof Shape) {
        echo $value->draw();
    }
}

echo "Нове розміщення:";
foreach ($arr as $value) {
    echo $value->move(200, 100);
    echo $value->draw();
}