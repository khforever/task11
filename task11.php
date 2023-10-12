<?php

class Person 
{

public $name ;
public $age ;
private $height;
private $weighit;




function __construct()
{
 
 
    echo "Created";
}
    
    function __set($key, $value)
    {
        
        $this->$key = $value;
    }
    function __get($key)
    {
        return $this->$key;
    }
    public function print_name()
    {
        echo "The  name is $this->name and the age is $this->age such as the height is $this->height  and the weight is $this->weight";
    }




}


$ali= new Person ();
$ali->name="ali";           //set the value of name
$ali->age="33";
$ali->height="300";           //set the value of height
$ali->weight="100";



echo "<br>";
echo "<br>";


$nada =new Person();
$nada->name="nada";              //set the value of name
$nada->age="22";
$nada->height="250";                 //set the value of height
$nada->weight="90";


echo "<hr>";
//the solving 3
echo "the height of ali is ".$ali->height;

 echo "<hr>";

 //the solving 4

echo "the weight of nada is ".$nada->weight;


echo "<hr>";


 //the solving 6

$ali->print_name();



echo "<br>";
echo "<br>";
$nada->print_name();






?>