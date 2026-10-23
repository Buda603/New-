<?php
class Car
{
    // Свойства создаются через конструктор,
    // color и weight — необязательные, со значениями по умолчанию
    public function __construct(
        public $brand,
        public $model,
        public $type,
        public $color = "черный",
        public $weight = 0
    ) {}

    public function getInfo()
    {
        echo "Модель: " . $this->brand . " " . $this->model
            . " (тип: " . $this->type
            . ", цвет: " . $this->color
            . ", вес: " . $this->weight . " кг)<br>";
    }

    public function getWeight()
    {
        return $this->weight;
    }
}
?>