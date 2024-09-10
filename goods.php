<?php

abstract class AbstractGood {
    protected string $title;
    protected int $price;
    protected static int $income = 0;

    public abstract function calculateValue(int $amount) : int;
}

class DigitalGood extends AbstractGood {
    public function __construct(string $title, int $price) {
        $this->title = $title;
        $this->price = $price;
    }

    public function calculateValue(int $amount) : int {
        $value = $this->price * $amount;
        self::$income += $value;
        return $value;
    }
}

class PhysicalGood extends AbstractGood {
    public function __construct(string $title, int $price) {
        $this->title = $title;
        $this->price = $price;
    }

    public function calculateValue(int $amount) : int {
        $value = $this->price * $amount;
        self::$income += $value;
        return $value;
    }
}

class WeightGood extends PhysicalGood {
    public function __construct(string $title, int $price) {
        $this->title = $title;
        $this->price = $price;
    }

    public function calculateValue(int $weight) : int {
        $value = $this->price * $weight;
        self::$income += $value;
        return $value;
    }
}
