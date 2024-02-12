<?php 
    include('./index.php');

    $person1 = new Person();
    $person1->setName('joão miguel');
    $person1->setAge(24);
    echo $person1->name;
    echo $person1->getName();
    echo '<br>';
    echo $person1->age;
    echo $person1->getAge();
    echo '<br>';
    echo $person1::$heigth;
    echo $person1::doubleAge();
?>