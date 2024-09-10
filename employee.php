<?php

class Employee {
    private string $name;
    private int $age;
    private int $salary;

    public function __construct(string $name, int $age, int $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function setName(string $name) : bool {
        $this->name = $name;
        return true;
    }

    public function getName() : string {
        return $this->name;
    }

    public function setAge(int $age) : bool {
        $this->age = $age;
        return true;
    }

    public function getAge() : int {
        return $this->age;
    }

    public function setSalary(int $salary) : bool {
        $this->salary = $salary;
        return true;
    }

    public function getSalary() : int {
        return $this->salary;
    }
}

$employee1 = new Employee("Олег", 25, 1000);
$employee2 = new Employee("Мария", 26, 2000);

echo $employee1->getSalary() + $employee2->getSalary();

echo "\n";

echo $employee1->getAge() > $employee2->getAge() ? $employee1->getAge() : $employee2->getAge();
