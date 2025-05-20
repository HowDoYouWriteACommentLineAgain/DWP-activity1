<?php 

require __DIR__ . '/vendor/autoload.php';

use Cocur\Slugify\Slugify;
use Ramsey\Uuid\uuid;
//in java libs are access via dots in php slashes

$slugify = new Slugify();
$uuid = Uuid::uuid4(); //4 bytes??
echo $slugify->slugify("This is a new title.");
echo "\n";
echo $uuid->toString();

//if in java . is to access properties it is arrwos in php

$faker = Faker\Factory::create();
echo $faker->name() . "\n";
echo $faker->email() . "\n";
echo $faker->text() . "\n";
echo $faker->phoneNumber() . "\n";
echo $faker->address() . "\n";




$number = readline("\nEnter a number: ");

if(!is_numeric($number))
{
    echo "Invalid Input.";
    exit;
}

$number = (int)$number;
for($ctr = 0; $ctr <= $number; $ctr++)
{
    echo isPrimeNumber($ctr);
}

function isPrimeNumber($number){
    if($number < 2)
    {
        return "{$number} is not a prime.\n";
    }

    if($number == 2)
    {
        return "{$number} is a prime.\n";
    }

    if($number % 2 == 0)
    {
        return "{$number} is not a prime.\n";
    }

    $sqrtNumber = sqrt($number);
    for($i =3 ; $i < $sqrtNumber; $i += 2 )
    {
        if($number % $i === 0)
        {
            return "{$number} is not a prime number.\n";
        }
    }
    return "{$number} is a prime number.\n";
}

// if($num % 2 === 0)
// {
//     echo $num . " is even";
// }
// else
// {
//     echo $num . " is odd";
// }

//---

// $result = "Even";
// if($num % 2 !=0){
//     $result = "Odd";
// }

// echo "The number is: {$result}";

// ?>

